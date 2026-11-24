/**
 * Hero 3D stage: laptop on the disk, squircle-orbit media icons, chrome Apple mark.
 * The laptop and disk spin together. Icons orbit in a soft rounded square and stay
 * outside that spin. Expects #hero-laptop-stage mount and window.SITE_BASE.
 */
import * as THREE from 'three';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
import { MeshoptDecoder } from 'three/addons/libs/meshopt_decoder.module.js';
import { DecalGeometry } from 'three/addons/geometries/DecalGeometry.js';

const mount = document.getElementById('hero-laptop-stage');
if (mount) {
  const base = (window.SITE_BASE || '/').replace(/\/?$/, '/');
  const laptopUrl = `${base}src/laptop.glb`;
  const diskUrl = `${base}src/laptop-disk.glb`;

  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(32, 1, 0.05, 200);
  camera.position.set(0, 0.2, 3.45);

  const renderer = new THREE.WebGLRenderer({
    antialias: true,
    alpha: true,
    powerPreference: 'high-performance',
  });
  renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 1.75));
  renderer.outputColorSpace = THREE.SRGBColorSpace;
  renderer.toneMapping = THREE.NeutralToneMapping;
  renderer.toneMappingExposure = 1.12;
  renderer.setClearColor(0x000000, 0);
  mount.appendChild(renderer.domElement);

  const envScene = new THREE.Scene();
  function addLightformer(intensity, position, scale, rotation, color = '#ffffff') {
    const mesh = new THREE.Mesh(
      new THREE.PlaneGeometry(1, 1),
      new THREE.MeshBasicMaterial({
        color,
        side: THREE.DoubleSide,
        toneMapped: false,
      })
    );
    mesh.material.color.multiplyScalar(intensity);
    mesh.position.set(position[0], position[1], position[2]);
    mesh.scale.set(scale[0], scale[1], scale[2]);
    if (rotation) mesh.rotation.set(rotation[0], rotation[1], rotation[2]);
    envScene.add(mesh);
  }
  addLightformer(1.6, [0, 4.5, 2], [9, 4, 1]);
  addLightformer(1.15, [4.5, 2, 3], [5, 3, 1], [0, -0.8, 0]);
  addLightformer(0.9, [-4, 1.5, -2], [4, 5, 1], [0, 0.7, 0], '#d7ecff');
  addLightformer(0.55, [0, -2.5, 1], [8, 2, 1]);

  const pmrem = new THREE.PMREMGenerator(renderer);
  scene.environment = pmrem.fromScene(envScene, 0.04).texture;
  scene.environmentIntensity = 0.55;
  pmrem.dispose();

  scene.add(new THREE.AmbientLight(0xffffff, 0.55));
  const key = new THREE.DirectionalLight(0xffffff, 1.7);
  key.position.set(3.2, 5.4, 4);
  scene.add(key);
  const fill = new THREE.DirectionalLight(0xeef6ff, 0.75);
  fill.position.set(-3.4, 2.4, 2.2);
  scene.add(fill);

  const rig = new THREE.Group();
  rig.position.set(0, -0.02, 0);
  rig.scale.setScalar(0.84);
  scene.add(rig);

  const spinner = new THREE.Group();
  spinner.rotation.set(0.08, 0.5, 0);
  rig.add(spinner);

  const loader = new GLTFLoader();
  loader.setMeshoptDecoder(MeshoptDecoder);
  const clock = new THREE.Clock();
  let ready = false;
  let iconSprites = [];
  let orbit = null;

  function toGlossy(material, opts) {
    const next = new THREE.MeshPhysicalMaterial({
      map: material.map || null,
      color: new THREE.Color('#ffffff'),
      metalness: opts.metalness,
      roughness: opts.roughness,
      clearcoat: opts.clearcoat,
      clearcoatRoughness: opts.clearcoatRoughness,
      envMapIntensity: opts.env,
    });
    const lift = opts.lift.toFixed(2);
    const gamma = opts.gamma.toFixed(2);
    next.onBeforeCompile = (shader) => {
      shader.fragmentShader = shader.fragmentShader.replace(
        '#include <color_fragment>',
        `#include <color_fragment>
         vec3 tuned = max(diffuseColor.rgb, vec3(0.0));
         float luma = dot(tuned, vec3(0.2126, 0.7152, 0.0722));
         float shadowLift = mix(${lift}, 1.0, smoothstep(0.01, 0.2, luma));
         diffuseColor.rgb = pow(tuned, vec3(${gamma})) * shadowLift;`
      );
    };
    return next;
  }

  function centerModel(model, materialOptions) {
    const box = new THREE.Box3().setFromObject(model);
    const center = box.getCenter(new THREE.Vector3());
    model.position.sub(center);
    model.traverse((child) => {
      if (!child.isMesh) return;
      if (Array.isArray(child.material)) {
        child.material = child.material.map((m) => toGlossy(m, materialOptions));
      } else {
        child.material = toGlossy(child.material, materialOptions);
      }
      child.castShadow = false;
      child.receiveShadow = false;
    });
    return box.getSize(new THREE.Vector3());
  }

  function createAppleTexture() {
    const size = 1024;
    const canvas = document.createElement('canvas');
    canvas.width = size;
    canvas.height = size;
    const ctx = canvas.getContext('2d');
    const cx = size * 0.5;
    const cy = size * 0.56;

    const body = new Path2D();
    body.moveTo(cx, cy - size * 0.3);
    body.bezierCurveTo(cx - size * 0.1, cy - size * 0.42, cx - size * 0.34, cy - size * 0.34, cx - size * 0.38, cy - size * 0.16);
    body.bezierCurveTo(cx - size * 0.46, cy + size * 0.06, cx - size * 0.38, cy + size * 0.26, cx - size * 0.22, cy + size * 0.32);
    body.bezierCurveTo(cx - size * 0.1, cy + size * 0.38, cx + size * 0.06, cy + size * 0.38, cx + size * 0.16, cy + size * 0.3);
    body.bezierCurveTo(cx + size * 0.32, cy + size * 0.18, cx + size * 0.4, cy + size * 0.02, cx + size * 0.34, cy - size * 0.12);
    body.bezierCurveTo(cx + size * 0.26, cy - size * 0.28, cx + size * 0.1, cy - size * 0.36, cx, cy - size * 0.3);
    body.closePath();

    const metal = ctx.createLinearGradient(cx - size * 0.34, cy - size * 0.36, cx + size * 0.36, cy + size * 0.36);
    metal.addColorStop(0, '#ffffff');
    metal.addColorStop(0.34, '#f3f5f8');
    metal.addColorStop(0.52, '#8d93a1');
    metal.addColorStop(0.68, '#d9dee7');
    metal.addColorStop(1, '#ffffff');

    ctx.fillStyle = metal;
    ctx.fill(body);

    ctx.globalCompositeOperation = 'destination-out';
    ctx.beginPath();
    ctx.arc(cx + size * 0.24, cy - size * 0.02, size * 0.15, 0, Math.PI * 2);
    ctx.fill();
    ctx.globalCompositeOperation = 'source-over';

    const leaf = new Path2D();
    leaf.moveTo(cx + size * 0.02, cy - size * 0.28);
    leaf.bezierCurveTo(cx + size * 0.18, cy - size * 0.5, cx + size * 0.38, cy - size * 0.4, cx + size * 0.2, cy - size * 0.24);
    leaf.bezierCurveTo(cx + size * 0.12, cy - size * 0.32, cx + size * 0.05, cy - size * 0.32, cx + size * 0.02, cy - size * 0.28);
    leaf.closePath();
    ctx.fillStyle = metal;
    ctx.fill(leaf);

    ctx.strokeStyle = '#f7f8fb';
    ctx.lineWidth = size * 0.028;
    ctx.lineCap = 'round';
    ctx.beginPath();
    ctx.moveTo(cx, cy - size * 0.3);
    ctx.quadraticCurveTo(cx + size * 0.03, cy - size * 0.4, cx + size * 0.07, cy - size * 0.43);
    ctx.stroke();

    const texture = new THREE.CanvasTexture(canvas);
    texture.colorSpace = THREE.SRGBColorSpace;
    texture.anisotropy = Math.min(16, renderer.capabilities.getMaxAnisotropy());
    texture.needsUpdate = true;
    return texture;
  }

  function roundRect(ctx, x, y, w, h, radius) {
    ctx.beginPath();
    ctx.moveTo(x + radius, y);
    ctx.arcTo(x + w, y, x + w, y + h, radius);
    ctx.arcTo(x + w, y + h, x, y + h, radius);
    ctx.arcTo(x, y + h, x, y, radius);
    ctx.arcTo(x, y, x + w, y, radius);
    ctx.closePath();
  }

  function paintMediaGlyph(ctx, kind) {
    ctx.fillStyle = '#ffffff';
    ctx.strokeStyle = '#ffffff';
    ctx.lineWidth = 16;
    ctx.lineCap = 'round';
    ctx.lineJoin = 'round';

    if (kind === 'chart') {
      ctx.beginPath();
      ctx.moveTo(62, 184);
      ctx.lineTo(110, 128);
      ctx.lineTo(146, 152);
      ctx.lineTo(198, 74);
      ctx.stroke();
      ctx.beginPath();
      ctx.moveTo(166, 70);
      ctx.lineTo(206, 66);
      ctx.lineTo(190, 104);
      ctx.closePath();
      ctx.fill();
      return;
    }

    if (kind === 'target') {
      ctx.lineWidth = 14;
      ctx.beginPath();
      ctx.arc(128, 128, 64, 0, Math.PI * 2);
      ctx.stroke();
      ctx.beginPath();
      ctx.arc(128, 128, 36, 0, Math.PI * 2);
      ctx.stroke();
      ctx.beginPath();
      ctx.arc(128, 128, 12, 0, Math.PI * 2);
      ctx.fill();
      return;
    }

    if (kind === 'megaphone') {
      ctx.beginPath();
      ctx.moveTo(58, 112);
      ctx.lineTo(138, 78);
      ctx.lineTo(138, 178);
      ctx.lineTo(58, 148);
      ctx.closePath();
      ctx.fill();
      roundRect(ctx, 134, 96, 30, 64, 10);
      ctx.fill();
      ctx.beginPath();
      ctx.moveTo(78, 146);
      ctx.lineTo(96, 188);
      ctx.lineTo(118, 146);
      ctx.closePath();
      ctx.fill();
      ctx.lineWidth = 12;
      ctx.beginPath();
      ctx.arc(168, 128, 24, -0.9, 0.9);
      ctx.stroke();
      ctx.beginPath();
      ctx.arc(168, 128, 44, -0.75, 0.75);
      ctx.stroke();
      return;
    }

    if (kind === 'mail') {
      roundRect(ctx, 48, 74, 160, 112, 18);
      ctx.fill();
      ctx.globalCompositeOperation = 'destination-out';
      ctx.lineWidth = 14;
      ctx.beginPath();
      ctx.moveTo(64, 96);
      ctx.lineTo(128, 146);
      ctx.lineTo(192, 96);
      ctx.stroke();
      ctx.globalCompositeOperation = 'source-over';
      return;
    }

    if (kind === 'bulb') {
      ctx.beginPath();
      ctx.arc(128, 108, 50, Math.PI * 0.15, Math.PI * 0.85, true);
      ctx.lineTo(108, 168);
      ctx.lineTo(148, 168);
      ctx.closePath();
      ctx.fill();
      roundRect(ctx, 104, 172, 48, 12, 4);
      ctx.fill();
      roundRect(ctx, 110, 188, 36, 12, 4);
      ctx.fill();
      return;
    }

    if (kind === 'tasks') {
      roundRect(ctx, 64, 52, 128, 152, 18);
      ctx.fill();
      ctx.globalCompositeOperation = 'destination-out';
      ctx.lineWidth = 10;
      [92, 128, 164].forEach((y) => {
        ctx.beginPath();
        ctx.moveTo(86, y);
        ctx.lineTo(96, y + 12);
        ctx.lineTo(116, y - 8);
        ctx.stroke();
        ctx.fillRect(132, y - 2, 40, 12);
      });
      ctx.globalCompositeOperation = 'source-over';
      return;
    }

    if (kind === 'code') {
      ctx.lineWidth = 16;
      ctx.beginPath();
      ctx.moveTo(104, 78);
      ctx.lineTo(68, 128);
      ctx.lineTo(104, 178);
      ctx.stroke();
      ctx.beginPath();
      ctx.moveTo(152, 78);
      ctx.lineTo(188, 128);
      ctx.lineTo(152, 178);
      ctx.stroke();
      ctx.beginPath();
      ctx.moveTo(148, 68);
      ctx.lineTo(112, 188);
      ctx.stroke();
      return;
    }

    if (kind === 'cloud') {
      ctx.beginPath();
      ctx.arc(108, 142, 30, 0, Math.PI * 2);
      ctx.arc(148, 122, 38, 0, Math.PI * 2);
      ctx.arc(184, 146, 26, 0, Math.PI * 2);
      ctx.fill();
      roundRect(ctx, 82, 142, 120, 40, 18);
      ctx.fill();
      return;
    }

    if (kind === 'chat') {
      roundRect(ctx, 48, 58, 160, 118, 28);
      ctx.fill();
      ctx.beginPath();
      ctx.moveTo(82, 176);
      ctx.lineTo(118, 176);
      ctx.lineTo(74, 210);
      ctx.closePath();
      ctx.fill();
      ctx.globalCompositeOperation = 'destination-out';
      [92, 128, 164].forEach((x) => {
        ctx.beginPath();
        ctx.arc(x, 116, 11, 0, Math.PI * 2);
        ctx.fill();
      });
      ctx.globalCompositeOperation = 'source-over';
      return;
    }

    if (kind === 'rocket') {
      ctx.beginPath();
      ctx.moveTo(128, 48);
      ctx.quadraticCurveTo(176, 96, 162, 156);
      ctx.lineTo(128, 140);
      ctx.lineTo(94, 156);
      ctx.quadraticCurveTo(80, 96, 128, 48);
      ctx.fill();
      ctx.beginPath();
      ctx.moveTo(94, 128);
      ctx.lineTo(62, 170);
      ctx.lineTo(104, 154);
      ctx.closePath();
      ctx.fill();
      ctx.beginPath();
      ctx.moveTo(162, 128);
      ctx.lineTo(194, 170);
      ctx.lineTo(152, 154);
      ctx.closePath();
      ctx.fill();
      ctx.globalCompositeOperation = 'destination-out';
      ctx.beginPath();
      ctx.arc(128, 100, 14, 0, Math.PI * 2);
      ctx.fill();
      ctx.globalCompositeOperation = 'source-over';
      return;
    }

    roundRect(ctx, 54, 96, 148, 92, 16);
    ctx.fill();
    ctx.beginPath();
    ctx.moveTo(96, 96);
    ctx.lineTo(96, 78);
    ctx.quadraticCurveTo(128, 58, 160, 78);
    ctx.lineTo(160, 96);
    ctx.closePath();
    ctx.fill();
    ctx.globalCompositeOperation = 'destination-out';
    ctx.fillRect(54, 132, 148, 14);
    ctx.beginPath();
    ctx.arc(128, 140, 12, 0, Math.PI * 2);
    ctx.fill();
    ctx.globalCompositeOperation = 'source-over';
  }

  const MEDIA_ICONS = [
    { id: 'chart', colors: ['#3dffb0', '#0e9f6e'], kind: 'chart', scale: 0.16 },
    { id: 'target', colors: ['#ff5a7a', '#e1063a'], kind: 'target', scale: 0.15 },
    { id: 'megaphone', colors: ['#ffb020', '#ff6a3d'], kind: 'megaphone', scale: 0.145 },
    { id: 'bulb', colors: ['#ffe08a', '#ff9f1c'], kind: 'bulb', scale: 0.14 },
    { id: 'rocket', colors: ['#8b6cff', '#3c78ff'], kind: 'rocket', scale: 0.155 },
    { id: 'mail', colors: ['#67e6ff', '#0aa8e0'], kind: 'mail', scale: 0.15 },
    { id: 'briefcase', colors: ['#3a415c', '#161924'], kind: 'briefcase', scale: 0.145 },
    { id: 'tasks', colors: ['#6aa4ff', '#3c5bff'], kind: 'tasks', scale: 0.14 },
    { id: 'code', colors: ['#5eead4', '#0f766e'], kind: 'code', scale: 0.15 },
    { id: 'cloud', colors: ['#7dd3fc', '#0369a1'], kind: 'cloud', scale: 0.155 },
    { id: 'chat', colors: ['#f9a8d4', '#db2777'], kind: 'chat', scale: 0.145 },
  ];

  // Soft rounded-square. Power below 1 pushes the corners outward,
  // so the closest points stay on the left, right, top, and bottom.
  const ORBIT_POWER = 0.62;
  const ORBIT_SECONDS = 18;

  function orbitAxis(component) {
    return Math.sign(component) * Math.abs(component) ** ORBIT_POWER;
  }

  function createMediaTexture(icon) {
    const size = 256;
    const canvas = document.createElement('canvas');
    canvas.width = size;
    canvas.height = size;
    const ctx = canvas.getContext('2d');
    roundRect(ctx, 10, 10, size - 20, size - 20, 58);
    const fill = ctx.createLinearGradient(20, 16, size - 16, size - 16);
    fill.addColorStop(0, icon.colors[0]);
    fill.addColorStop(1, icon.colors[1]);
    ctx.fillStyle = fill;
    ctx.fill();
    ctx.save();
    ctx.globalCompositeOperation = 'source-atop';
    ctx.fillStyle = 'rgba(255,255,255,0.24)';
    ctx.beginPath();
    ctx.ellipse(128, 62, 78, 28, 0, 0, Math.PI * 2);
    ctx.fill();
    ctx.restore();
    paintMediaGlyph(ctx, icon.kind);

    const texture = new THREE.CanvasTexture(canvas);
    texture.colorSpace = THREE.SRGBColorSpace;
    texture.needsUpdate = true;
    return texture;
  }

  function placeIcon(sprite, icon, index, time) {
    if (!orbit) return;
    const speed = (Math.PI * 2) / ORBIT_SECONDS;
    const angle = time * speed + (index / MEDIA_ICONS.length) * Math.PI * 2;
    const along = orbitAxis(Math.sin(angle));
    const bob = Math.sin(time * 1.7 + index) * orbit.bob;
    sprite.position.set(
      orbitAxis(Math.cos(angle)) * orbit.rx,
      orbit.centerY + along * orbit.ry + bob,
      along * orbit.rz
    );
    const pop = 0.82 + (Math.sin(angle) * 0.5 + 0.5) * 0.34;
    const size = icon.scale * pop;
    sprite.scale.set(size, size, 1);
  }

  function findLidMesh(laptop) {
    let best = null;
    let bestScore = -1;
    laptop.traverse((child) => {
      if (!child.isMesh || !child.geometry) return;
      if (!child.geometry.boundingBox) child.geometry.computeBoundingBox();
      const bb = child.geometry.boundingBox;
      if (!bb) return;
      const size = bb.getSize(new THREE.Vector3());
      const score = size.x * size.y * (1 / Math.max(size.z, 0.001));
      if (score > bestScore) {
        bestScore = score;
        best = child;
      }
    });
    return best;
  }

  function attachAppleMark(laptopGroup, laptop, texture) {
    laptopGroup.updateMatrixWorld(true);
    laptop.updateMatrixWorld(true);

    const mesh = findLidMesh(laptop);
    if (!mesh) return;
    mesh.updateMatrixWorld(true);

    const normal = new THREE.Vector3(-0.9380864642378678, -0.346401191703631, 0).normalize();
    const up = new THREE.Vector3(-0.346401191703631, 0.9380864642378678, 0).normalize();
    const right = new THREE.Vector3(0, 0, 1);

    const localPosition = new THREE.Vector3(-0.3801263831627151, -0.015472771608485592, 0.000885009765625);
    localPosition.addScaledVector(normal, 0.0015);

    const worldScale = new THREE.Vector3();
    const worldQuat = new THREE.Quaternion();
    mesh.matrixWorld.decompose(new THREE.Vector3(), worldQuat, worldScale);
    const position = localPosition.applyMatrix4(mesh.matrixWorld);
    const orientation = new THREE.Euler().setFromRotationMatrix(
      new THREE.Matrix4().makeBasis(
        right.clone().applyQuaternion(worldQuat),
        up.clone().applyQuaternion(worldQuat),
        normal.clone().applyQuaternion(worldQuat)
      )
    );
    const size = new THREE.Vector3(0.16 * worldScale.x, 0.16 * worldScale.y, 0.012 * worldScale.z);
    const geometry = new DecalGeometry(mesh, position, orientation, size);
    geometry.applyMatrix4(laptopGroup.matrixWorld.clone().invert());

    const material = new THREE.MeshPhysicalMaterial({
      map: texture,
      emissiveMap: texture,
      emissive: new THREE.Color('#f7f8fb'),
      emissiveIntensity: 0.12,
      metalness: 0.35,
      roughness: 0.4,
      clearcoat: 0.35,
      clearcoatRoughness: 0.3,
      transparent: true,
      alphaTest: 0.55,
      polygonOffset: true,
      polygonOffsetFactor: -2,
      polygonOffsetUnits: -2,
    });

    const decal = new THREE.Mesh(geometry, material);
    decal.renderOrder = 2;
    decal.name = 'apple-mark';
    laptopGroup.add(decal);
  }

  function frameProduct() {
    rig.updateMatrixWorld(true);
    const box = new THREE.Box3().setFromObject(spinner);
    if (orbit) {
      const pad = (Math.max(...MEDIA_ICONS.map((icon) => icon.scale)) * 1.16) / 2;
      const hx = orbit.rx + pad;
      const hy = orbit.ry + orbit.bob + pad;
      const hz = orbit.rz + pad;
      const point = new THREE.Vector3();
      for (const x of [-hx, hx]) {
        for (const y of [orbit.centerY - hy, orbit.centerY + hy]) {
          for (const z of [-hz, hz]) {
            point.set(x, y, z).applyMatrix4(rig.matrixWorld);
            box.expandByPoint(point);
          }
        }
      }
    }
    if (box.isEmpty()) return;

    const size = box.getSize(new THREE.Vector3());
    const center = box.getCenter(new THREE.Vector3());
    const fovRad = (camera.fov * Math.PI) / 180;
    const fitH = size.y / (2 * Math.tan(fovRad / 2));
    const fitW = size.x / (2 * Math.tan(fovRad / 2)) / Math.max(camera.aspect, 0.001);
    const dist = Math.max(fitH, fitW) * 1.12;

    camera.position.set(center.x, center.y + size.y * 0.02, center.z + dist);
    camera.near = Math.max(dist / 100, 0.05);
    camera.far = dist * 20;
    camera.lookAt(center.x, center.y, center.z);
    camera.updateProjectionMatrix();
  }

  function resize() {
    const w = mount.clientWidth || 480;
    const h = mount.clientHeight || 560;
    camera.aspect = w / h;
    camera.updateProjectionMatrix();
    renderer.setSize(w, h, false);
    if (ready) frameProduct();
  }

  resize();
  window.addEventListener('resize', resize);

  const loaderEl = document.createElement('div');
  loaderEl.className = 'hero-3d-loader';
  loaderEl.setAttribute('aria-hidden', 'true');
  mount.appendChild(loaderEl);

  Promise.all([
    loader.loadAsync(laptopUrl),
    loader.loadAsync(diskUrl),
  ])
    .then(([laptopGltf, diskGltf]) => {
      const laptop = laptopGltf.scene;
      const disk = diskGltf.scene;

      const laptopSize = centerModel(laptop, {
        metalness: 0.16,
        roughness: 0.42,
        clearcoat: 0.18,
        clearcoatRoughness: 0.35,
        env: 0.4,
        lift: 1.02,
        gamma: 0.96,
      });
      const diskSize = centerModel(disk, {
        metalness: 0.28,
        roughness: 0.28,
        clearcoat: 0.4,
        clearcoatRoughness: 0.22,
        env: 0.65,
        lift: 1.06,
        gamma: 0.92,
      });

      const laptopScale = 1.05;
      const diskScale = 1.45;
      const gap = 0.05;
      const diskY = -((diskSize.y * diskScale) / 2 + gap / 2);
      const diskTop = diskY + (diskSize.y * diskScale) / 2;

      // Raise the hinge side 12° so the front lip stays planted on the disk stand.
      const tilt = -THREE.MathUtils.degToRad(12);
      laptop.rotation.z = tilt;
      const half = {
        x: laptopSize.x / 2,
        y: laptopSize.y / 2,
        z: laptopSize.z / 2,
      };
      const cosT = Math.cos(tilt);
      const sinT = Math.sin(tilt);
      let lowest = Infinity;
      let highest = -Infinity;
      let spinRadius = 0;
      for (const x of [-half.x, half.x]) {
        for (const y of [-half.y, half.y]) {
          const xRot = x * cosT - y * sinT;
          const yRot = x * sinT + y * cosT;
          if (yRot < lowest) lowest = yRot;
          if (yRot > highest) highest = yRot;
          for (const z of [-half.z, half.z]) {
            spinRadius = Math.max(spinRadius, Math.hypot(xRot, z));
          }
        }
      }
      const nest = 0.008;
      const laptopBottom = lowest * laptopScale;
      const laptopTop = highest * laptopScale;
      const laptopY = diskTop - nest - laptopBottom;
      const diskHalf = {
        x: (diskSize.x * diskScale) / 2,
        z: (diskSize.z * diskScale) / 2,
      };
      const spriteHalf = Math.max(...MEDIA_ICONS.map((icon) => icon.scale)) / 2;
      const bob = 0.026;
      const clearance = spriteHalf + 0.14 + bob;
      const wide = Math.max(spinRadius * laptopScale, diskHalf.x, diskHalf.z);
      orbit = {
        rx: wide + clearance,
        ry: (laptopTop - laptopBottom) / 2 + clearance,
        rz: wide + clearance,
        centerY: laptopY + (laptopTop + laptopBottom) / 2,
        bob,
      };

      const diskGroup = new THREE.Group();
      diskGroup.position.set(0, diskY, 0);
      diskGroup.scale.setScalar(diskScale);
      diskGroup.add(disk);
      spinner.add(diskGroup);

      const laptopGroup = new THREE.Group();
      laptopGroup.position.set(0, laptopY, 0);
      laptopGroup.scale.setScalar(laptopScale);
      laptopGroup.add(laptop);
      spinner.add(laptopGroup);

      const icons = new THREE.Group();
      icons.name = 'media-icons';
      iconSprites = MEDIA_ICONS.map((icon, index) => {
        const sprite = new THREE.Sprite(new THREE.SpriteMaterial({
          map: createMediaTexture(icon),
          transparent: true,
          depthWrite: false,
          toneMapped: false,
        }));
        sprite.renderOrder = 4;
        placeIcon(sprite, icon, index, 0);
        icons.add(sprite);
        return sprite;
      });
      rig.add(icons);

      rig.updateMatrixWorld(true);
      attachAppleMark(laptopGroup, laptop, createAppleTexture());

      ready = true;
      frameProduct();
      loaderEl.remove();
    })
    .catch((err) => {
      console.error('Hero 3D models failed to load', err);
      loaderEl.classList.add('is-error');
      loaderEl.textContent = '3D preview unavailable';
    });

  function tick() {
    const delta = clock.getDelta();
    const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (ready && !reduce) {
      spinner.rotation.y += delta * 0.38;
      const time = clock.elapsedTime;
      iconSprites.forEach((sprite, index) => {
        placeIcon(sprite, MEDIA_ICONS[index], index, time);
      });
    }
    renderer.render(scene, camera);
    requestAnimationFrame(tick);
  }
  tick();
}

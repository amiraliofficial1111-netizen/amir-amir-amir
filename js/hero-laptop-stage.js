/**
 * Hero 3D stage: laptop on the disk, side icons, flush chrome Apple mark, smooth Y rotation.
 * Expects #hero-laptop-stage mount and window.SITE_BASE.
 */
import * as THREE from 'three';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
import { RoomEnvironment } from 'three/addons/environments/RoomEnvironment.js';
import { MeshoptDecoder } from 'three/addons/libs/meshopt_decoder.module.js';
import { DecalGeometry } from 'three/addons/geometries/DecalGeometry.js';

const mount = document.getElementById('hero-laptop-stage');
if (!mount) {
  // Not on home hero
} else {
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const base = (window.SITE_BASE || '/').replace(/\/?$/, '/');
  const laptopUrl = `${base}src/laptop.glb`;
  const diskUrl = `${base}src/laptop-disk.glb`;
  const appleUrl = `${base}assets/images/apple-logo-chrome.jpg`;

  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(38, 1, 0.05, 200);
  camera.position.set(0, 0.25, 4.2);

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

  const pmrem = new THREE.PMREMGenerator(renderer);
  scene.environment = pmrem.fromScene(new RoomEnvironment(), 0.04).texture;
  scene.environmentIntensity = 0.55;

  scene.add(new THREE.AmbientLight(0xffffff, 0.72));
  const key = new THREE.DirectionalLight(0xffffff, 2.15);
  key.position.set(3.2, 5.4, 4);
  scene.add(key);
  const fill = new THREE.DirectionalLight(0xf3f7ff, 0.85);
  fill.position.set(-3.4, 2.4, 2.2);
  scene.add(fill);
  const rim = new THREE.DirectionalLight(0xffffff, 0.7);
  rim.position.set(-1.2, 3.8, -3.5);
  scene.add(rim);

  const product = new THREE.Group();
  product.position.set(0, -0.02, 0);
  product.rotation.set(0.08, 0.5, 0);
  product.scale.setScalar(0.84);
  scene.add(product);

  const loader = new GLTFLoader();
  loader.setMeshoptDecoder(MeshoptDecoder);
  const textureLoader = new THREE.TextureLoader();
  const clock = new THREE.Clock();
  let ready = false;
  let iconSprites = [];
  let iconLayout = null;

  function toGlossy(material, opts) {
    const next = new THREE.MeshPhysicalMaterial({
      map: material.map || null,
      normalMap: material.normalMap || null,
      color: new THREE.Color('#ffffff'),
      metalness: opts.metalness,
      roughness: opts.roughness,
      normalScale: new THREE.Vector2(0.18, 0.18),
      clearcoat: opts.clearcoat,
      clearcoatRoughness: opts.clearcoatRoughness,
      reflectivity: 0.45,
      ior: 1.45,
      specularIntensity: 0.45,
      envMapIntensity: opts.env,
    });
    const saturation = opts.saturation.toFixed(2);
    const gamma = opts.gamma.toFixed(2);
    const gain = opts.gain.toFixed(2);
    next.onBeforeCompile = (shader) => {
      shader.fragmentShader = shader.fragmentShader.replace(
        '#include <color_fragment>',
        `#include <color_fragment>
         vec3 tuned = max(diffuseColor.rgb, vec3(0.0));
         float luma = dot(tuned, vec3(0.2126, 0.7152, 0.0722));
         vec3 saturated = mix(vec3(luma), tuned, ${saturation});
         diffuseColor.rgb = pow(max(saturated, vec3(0.0)), vec3(${gamma})) * ${gain};`
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

  function createChromeAppleTexture() {
    const size = 2048;
    const canvas = document.createElement('canvas');
    canvas.width = size;
    canvas.height = size;
    const ctx = canvas.getContext('2d');
    ctx.clearRect(0, 0, size, size);

    const cx = size * 0.5;
    const cy = size * 0.54;

    const body = new Path2D();
    body.moveTo(cx, cy - size * 0.3);
    body.bezierCurveTo(cx - size * 0.1, cy - size * 0.42, cx - size * 0.34, cy - size * 0.34, cx - size * 0.38, cy - size * 0.16);
    body.bezierCurveTo(cx - size * 0.46, cy + size * 0.06, cx - size * 0.38, cy + size * 0.26, cx - size * 0.22, cy + size * 0.32);
    body.bezierCurveTo(cx - size * 0.1, cy + size * 0.38, cx + size * 0.06, cy + size * 0.38, cx + size * 0.16, cy + size * 0.3);
    body.bezierCurveTo(cx + size * 0.32, cy + size * 0.18, cx + size * 0.4, cy + size * 0.02, cx + size * 0.34, cy - size * 0.12);
    body.bezierCurveTo(cx + size * 0.26, cy - size * 0.28, cx + size * 0.1, cy - size * 0.36, cx, cy - size * 0.3);
    body.closePath();

    const leaf = new Path2D();
    leaf.moveTo(cx + size * 0.02, cy - size * 0.28);
    leaf.bezierCurveTo(cx + size * 0.18, cy - size * 0.5, cx + size * 0.38, cy - size * 0.4, cx + size * 0.2, cy - size * 0.24);
    leaf.bezierCurveTo(cx + size * 0.12, cy - size * 0.32, cx + size * 0.05, cy - size * 0.32, cx + size * 0.02, cy - size * 0.28);
    leaf.closePath();

    ctx.save();
    ctx.filter = `blur(${size * 0.006}px)`;
    ctx.fillStyle = 'rgba(255,255,255,0.55)';
    ctx.fill(body);
    ctx.fill(leaf);
    ctx.restore();

    const metal = ctx.createLinearGradient(
      cx - size * 0.42,
      cy - size * 0.4,
      cx + size * 0.42,
      cy + size * 0.42
    );
    metal.addColorStop(0.0, '#ffffff');
    metal.addColorStop(0.28, '#f4f6fa');
    metal.addColorStop(0.42, '#c8ced8');
    metal.addColorStop(0.52, '#2a2e36');
    metal.addColorStop(0.62, '#0a0b0d');
    metal.addColorStop(0.78, '#6e7584');
    metal.addColorStop(1.0, '#eef1f6');

    ctx.fillStyle = metal;
    ctx.fill(body);

    ctx.globalCompositeOperation = 'destination-out';
    ctx.beginPath();
    ctx.arc(cx + size * 0.24, cy - size * 0.02, size * 0.15, 0, Math.PI * 2);
    ctx.fill();
    ctx.globalCompositeOperation = 'source-over';

    ctx.fillStyle = metal;
    ctx.fill(leaf);

    ctx.strokeStyle = '#f7f8fb';
    ctx.lineWidth = size * 0.026;
    ctx.lineCap = 'round';
    ctx.beginPath();
    ctx.moveTo(cx, cy - size * 0.3);
    ctx.quadraticCurveTo(cx + size * 0.03, cy - size * 0.4, cx + size * 0.07, cy - size * 0.43);
    ctx.stroke();

    ctx.strokeStyle = 'rgba(255,255,255,0.35)';
    ctx.lineWidth = size * 0.01;
    ctx.stroke(body);
    ctx.stroke(leaf);

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
    { id: 'chart', colors: ['#3dffb0', '#0e9f6e'], kind: 'chart', side: -1, y: 1.22, out: 0.58, scale: 0.15, z: 0.12, lean: 0.42, bob: 0.05, phase: 0.2 },
    { id: 'target', colors: ['#ff5a7a', '#e1063a'], kind: 'target', side: -1, y: 0.52, out: 0.0, scale: 0.23, z: -0.05, lean: 0.08, bob: 0.038, phase: 1.7 },
    { id: 'megaphone', colors: ['#ffb020', '#ff6a3d'], kind: 'megaphone', side: -1, y: -0.38, out: 0.08, scale: 0.19, z: 0.1, lean: -0.14, bob: 0.045, phase: 2.8 },
    { id: 'bulb', colors: ['#ffe08a', '#ff9f1c'], kind: 'bulb', side: -1, y: -1.02, out: 0.54, scale: 0.15, z: -0.08, lean: 0.38, bob: 0.055, phase: 3.6 },
    { id: 'rocket', colors: ['#8b6cff', '#3c78ff'], kind: 'rocket', side: 1, y: 1.22, out: 0.58, scale: 0.15, z: 0.12, lean: 0.42, bob: 0.05, phase: 0.9 },
    { id: 'mail', colors: ['#67e6ff', '#0aa8e0'], kind: 'mail', side: 1, y: 0.52, out: 0.0, scale: 0.23, z: -0.05, lean: 0.08, bob: 0.038, phase: 2.2 },
    { id: 'briefcase', colors: ['#3a415c', '#161924'], kind: 'briefcase', side: 1, y: -0.38, out: 0.08, scale: 0.19, z: 0.1, lean: -0.14, bob: 0.045, phase: 3.1 },
    { id: 'tasks', colors: ['#6aa4ff', '#3c5bff'], kind: 'tasks', side: 1, y: -1.02, out: 0.54, scale: 0.15, z: -0.08, lean: 0.38, bob: 0.055, phase: 4.1 },
  ];

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

  let iconHome = null;

  function placeIcon(sprite, icon, time) {
    if (!iconHome) return;
    const bob = time == null ? 0 : Math.sin(time * 1.15 + icon.phase) * icon.bob;
    sprite.position.set(
      iconHome.center.x + icon.side * (iconHome.reach + icon.out),
      iconHome.center.y + icon.y + bob,
      iconHome.center.z + icon.z
    );
    sprite.material.rotation = -icon.side * icon.lean;
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

    const position = new THREE.Vector3(-0.3801263831627151, -0.015472771608485592, 0.000885009765625);
    position.addScaledVector(normal, 0.0008);

    const basis = new THREE.Matrix4().makeBasis(right, up, normal);
    const orientation = new THREE.Euler().setFromRotationMatrix(basis);
    const size = new THREE.Vector3(0.18, 0.18, 0.022);
    const geometry = new DecalGeometry(mesh, position, orientation, size);

    const material = new THREE.MeshPhysicalMaterial({
      map: texture,
      emissiveMap: texture,
      emissive: new THREE.Color('#f4f7fb'),
      emissiveIntensity: 0.48,
      metalness: 0.96,
      roughness: 0.1,
      clearcoat: 1,
      clearcoatRoughness: 0.05,
      envMapIntensity: 2.6,
      transparent: true,
      alphaTest: 0.32,
      depthWrite: false,
      polygonOffset: true,
      polygonOffsetFactor: -8,
      polygonOffsetUnits: -8,
    });

    const decal = new THREE.Mesh(geometry, material);
    decal.renderOrder = 3;
    decal.name = 'apple-mark';
    laptopGroup.add(decal);
  }

  function loadAppleTexture() {
    return new Promise((resolve) => {
      const procedural = createChromeAppleTexture();
      textureLoader.load(
        appleUrl,
        (tex) => {
          tex.dispose?.();
          resolve(procedural);
        },
        undefined,
        () => resolve(procedural)
      );
    });
  }

  function frameProduct() {
    product.updateMatrixWorld(true);
    const box = new THREE.Box3().setFromObject(product);
    if (iconHome) {
      const edge = iconHome.reach + iconHome.maxOut + iconHome.spriteHalf + 0.14;
      box.expandByPoint(new THREE.Vector3(iconHome.center.x - edge, iconHome.center.y + iconHome.yBottom, iconHome.center.z));
      box.expandByPoint(new THREE.Vector3(iconHome.center.x + edge, iconHome.center.y + iconHome.yTop, iconHome.center.z));
    }
    if (box.isEmpty()) return;

    const size = box.getSize(new THREE.Vector3());
    const center = box.getCenter(new THREE.Vector3());
    const maxDim = Math.max(size.x, size.y, size.z, 0.001);
    const fovRad = (camera.fov * Math.PI) / 180;
    const fitH = maxDim / (2 * Math.tan(fovRad / 2));
    const fitW = fitH / Math.max(camera.aspect, 0.001);
    const dist = Math.max(fitH, fitW) * 1.16;

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
    loadAppleTexture(),
  ])
    .then(([laptopGltf, diskGltf, appleTexture]) => {
      const laptop = laptopGltf.scene;
      const disk = diskGltf.scene;

      const laptopSize = centerModel(laptop, {
        metalness: 0.18,
        roughness: 0.34,
        clearcoat: 0.22,
        clearcoatRoughness: 0.28,
        env: 0.42,
        saturation: 1.42,
        gamma: 0.82,
        gain: 1.18,
      });
      const diskSize = centerModel(disk, {
        metalness: 0.04,
        roughness: 0.24,
        clearcoat: 0.4,
        clearcoatRoughness: 0.18,
        env: 0.5,
        saturation: 1.7,
        gamma: 0.78,
        gain: 1.22,
      });

      const laptopScale = 3.9;
      const k = laptopScale / 1.05;
      const diskScale = 1.45 * k;
      const gap = 0.05 * k;
      const diskY = -((diskSize.y * diskScale) / 2 + gap / 2);
      const diskTop = diskY + (diskSize.y * diskScale) / 2;

      // Raise the hinge / screen side 12°, pivoting so the front lip stays on the disk.
      const tilt = -THREE.MathUtils.degToRad(12);
      laptop.rotation.z = tilt;
      const half = {
        x: laptopSize.x / 2,
        y: laptopSize.y / 2,
        z: laptopSize.z / 2,
      };
      let lowest = Infinity;
      for (const x of [-half.x, half.x]) {
        for (const y of [-half.y, half.y]) {
          const yRot = x * Math.sin(tilt) + y * Math.cos(tilt);
          if (yRot < lowest) lowest = yRot;
        }
      }
      // Barely tuck the front lip so it meets the disk without crossing into it.
      const nest = 0.008 * k;
      const laptopY = diskTop - nest - lowest * laptopScale;

      const diskGroup = new THREE.Group();
      diskGroup.position.set(0, diskY, 0);
      diskGroup.scale.setScalar(diskScale);
      diskGroup.add(disk);
      product.add(diskGroup);

      const laptopGroup = new THREE.Group();
      laptopGroup.position.set(0, laptopY, 0);
      laptopGroup.scale.setScalar(laptopScale);
      laptopGroup.add(laptop);
      product.add(laptopGroup);

      product.updateMatrixWorld(true);
      const iconCenter = new THREE.Vector3();
      laptopGroup.getWorldPosition(iconCenter);
      const worldScale = laptopScale * product.scale.x;
      const cosT = Math.cos(tilt);
      const sinT = Math.sin(tilt);
      const hx = laptopSize.x / 2;
      const hy = laptopSize.y / 2;
      const hz = laptopSize.z / 2;
      let spinRadius = 0;
      for (const x of [-hx, hx]) {
        for (const y of [-hy, hy]) {
          const xRot = x * cosT - y * sinT;
          for (const z of [-hz, hz]) {
            spinRadius = Math.max(spinRadius, Math.hypot(xRot, z));
          }
        }
      }
      spinRadius *= worldScale;
      const iconScale = worldScale / 1.05;
      const maxScale = Math.max(...MEDIA_ICONS.map((icon) => icon.scale));
      const spriteHalf = maxScale * iconScale * 0.5;
      iconHome = {
        center: iconCenter,
        reach: spinRadius + spriteHalf + 0.18,
        spriteHalf,
        maxOut: Math.max(...MEDIA_ICONS.map((icon) => icon.out)),
        yTop: Math.max(...MEDIA_ICONS.map((icon) => icon.y)) + spriteHalf + 0.1,
        yBottom: Math.min(...MEDIA_ICONS.map((icon) => icon.y)) - spriteHalf - 0.1,
      };
      const icons = new THREE.Group();
      icons.name = 'media-icons';
      iconSprites = MEDIA_ICONS.map((icon) => {
        const sprite = new THREE.Sprite(new THREE.SpriteMaterial({
          map: createMediaTexture(icon),
          transparent: true,
          depthWrite: false,
          toneMapped: false,
        }));
        sprite.scale.set(icon.scale * iconScale, icon.scale * iconScale, 1);
        sprite.renderOrder = 4;
        placeIcon(sprite, icon, null);
        icons.add(sprite);
        return sprite;
      });
      scene.add(icons);
      iconLayout = { laptopY, k };

      product.updateMatrixWorld(true);
      attachAppleMark(laptopGroup, laptop, appleTexture);

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
    if (ready && !reducedMotion) {
      product.rotation.y += delta * 0.38;
      if (iconLayout) {
        const time = clock.elapsedTime;
        iconSprites.forEach((sprite, index) => {
          placeIcon(sprite, MEDIA_ICONS[index], time);
        });
      }
    }
    renderer.render(scene, camera);
    requestAnimationFrame(tick);
  }
  tick();
}

/**
 * Hero 3D stage: laptop only, flush chrome Apple mark, smooth Y rotation.
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
  renderer.toneMapping = THREE.ACESFilmicToneMapping;
  renderer.toneMappingExposure = 1.28;
  renderer.setClearColor(0x000000, 0);
  mount.appendChild(renderer.domElement);

  const pmrem = new THREE.PMREMGenerator(renderer);
  scene.environment = pmrem.fromScene(new RoomEnvironment(), 0.04).texture;
  scene.environmentIntensity = 1.55;

  scene.add(new THREE.AmbientLight(0xf4f7fb, 0.22));
  const key = new THREE.DirectionalLight(0xffffff, 5.2);
  key.position.set(3.2, 5.4, 4);
  scene.add(key);
  const fill = new THREE.DirectionalLight(0xdbe7f5, 1.9);
  fill.position.set(-3.4, 2.4, 2.2);
  scene.add(fill);
  const rim = new THREE.DirectionalLight(0xffffff, 2.4);
  rim.position.set(-1.2, 3.8, -3.5);
  scene.add(rim);
  const sparkle = new THREE.DirectionalLight(0xf0f6ff, 1.4);
  sparkle.position.set(2.2, 1.2, 3.6);
  scene.add(sparkle);

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

  function toGlossy(material, opts) {
    const tint = new THREE.Color(opts.tint || '#ffffff');
    const next = new THREE.MeshPhysicalMaterial({
      map: material.map || null,
      normalMap: material.normalMap || null,
      color: tint,
      metalness: opts.metalness,
      roughness: opts.roughness,
      normalScale: new THREE.Vector2(0.22, 0.22),
      clearcoat: opts.clearcoat,
      clearcoatRoughness: opts.clearcoatRoughness,
      reflectivity: opts.reflectivity ?? 1,
      ior: opts.ior ?? 1.5,
      specularIntensity: opts.specularIntensity ?? 1,
      envMapIntensity: opts.env,
      sheen: opts.sheen ?? 0,
      sheenRoughness: opts.sheenRoughness ?? 0.3,
      sheenColor: new THREE.Color(opts.sheenColor || '#ffffff'),
    });
    next.onBeforeCompile = (shader) => {
      shader.fragmentShader = shader.fragmentShader.replace(
        '#include <color_fragment>',
        `#include <color_fragment>
         vec3 tuned = max(diffuseColor.rgb, vec3(0.0));
         float luma = dot(tuned, vec3(0.2126, 0.7152, 0.0722));
         float shadowLift = mix(${opts.lift.toFixed(2)}, 1.0, smoothstep(0.01, 0.22, luma));
         float glossPush = mix(1.0, ${opts.glossPush.toFixed(2)}, smoothstep(0.18, 0.75, luma));
         diffuseColor.rgb = pow(tuned, vec3(${opts.gamma.toFixed(2)})) * shadowLift * glossPush;`
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
    if (box.isEmpty()) return;

    const size = box.getSize(new THREE.Vector3());
    const center = box.getCenter(new THREE.Vector3());
    const maxDim = Math.max(size.x, size.y, size.z, 0.001);
    const fovRad = (camera.fov * Math.PI) / 180;
    const fitH = maxDim / (2 * Math.tan(fovRad / 2));
    const fitW = fitH / Math.max(camera.aspect, 0.001);
    const dist = Math.max(fitH, fitW) * 1.06;

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
    loadAppleTexture(),
  ])
    .then(([laptopGltf, appleTexture]) => {
      const laptop = laptopGltf.scene;

      centerModel(laptop, {
        tint: '#d8dde6',
        metalness: 0.92,
        roughness: 0.045,
        clearcoat: 1,
        clearcoatRoughness: 0.02,
        reflectivity: 1,
        ior: 1.55,
        specularIntensity: 1.15,
        env: 2.35,
        lift: 1.08,
        gamma: 0.92,
        glossPush: 1.12,
        sheen: 0.18,
        sheenRoughness: 0.22,
        sheenColor: '#e8eef8',
      });

      const laptopScale = 3.9;
      const laptopGroup = new THREE.Group();
      laptopGroup.position.set(0, 0, 0);
      laptopGroup.scale.setScalar(laptopScale);
      laptopGroup.add(laptop);
      product.add(laptopGroup);
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
    }
    renderer.render(scene, camera);
    requestAnimationFrame(tick);
  }
  tick();
}

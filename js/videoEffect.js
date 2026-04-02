import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js';

const video = document.getElementById('video');
const canvas = document.getElementById('webgl-canvas');
const renderer = new THREE.WebGLRenderer({ canvas, alpha: true });
renderer.setSize(window.innerWidth, window.innerHeight);
renderer.setPixelRatio(window.devicePixelRatio);

const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(
    45,
    window.innerWidth / window.innerHeight,
    0.1,
    100
);
camera.position.z = 1;

const videoTexture = new THREE.VideoTexture(video);
videoTexture.minFilter = THREE.LinearFilter;
videoTexture.magFilter = THREE.LinearFilter;
videoTexture.format = THREE.RGBFormat;

const uniforms = {
    uTexture: { value: videoTexture },
    uTime: { value: 0 }
};

const vertexShader = `
  varying vec2 vUv;
  uniform float uTime;
  void main() {
    vUv = uv;
    vec3 pos = position;
    float amp = 0.03;
    float freq = 10.0;
    pos.x += sin(pos.y * freq + uTime * 0.01) * amp;
    pos.y += cos(pos.x * freq + uTime * 0.01) * amp;
    gl_Position = projectionMatrix * modelViewMatrix * vec4(pos, 1.0);
  }
`;

const fragmentShader = `
  varying vec2 vUv;
  uniform sampler2D uTexture;
  void main() {
    gl_FragColor = texture2D(uTexture, vUv);
  }
`;

const geometry = new THREE.PlaneGeometry(2, 2);
const material = new THREE.ShaderMaterial({
    uniforms,
    vertexShader,
    fragmentShader
});

const mesh = new THREE.Mesh(geometry, material);
scene.add(mesh);

function animate() {
    requestAnimationFrame(animate);
    uniforms.uTime.value += 1;
    renderer.render(scene, camera);
}

// Démarrage quand la vidéo est prête
video.addEventListener('canplay', () => {
    video.play();
    animate();
});

// Resize
window.addEventListener('resize', () => {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
});

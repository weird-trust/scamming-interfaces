const el = document.querySelector('.doppelganger-bait');
let lastMove = 0;

function onMouseMove (e) {
  x = e.clientX;
  y = e.clientY;
  updateMouse(x, y);
  lastMove = Date.now();

}

function updateMouse (x, y) {
    el.style.transform = `translate(${x}px, ${y}px)`;
}

const updatedNoise = noise

function render (a) {
  if (Date.now() - lastMove > 500) {
    const noiseX = (updatedNoise.simplex3(2, 0, a*0.0004) + 1) / 2;
    const noiseY = (updatedNoise.simplex3(10, 0, a*0.00042) + 1) / 2;
    const x = noiseX * innerWidth;
    const y = noiseY * innerHeight;
    updateMouse(x, y);
    
  }
  
  requestAnimationFrame(render);
}

window.addEventListener('mousemove', onMouseMove);
requestAnimationFrame(render);



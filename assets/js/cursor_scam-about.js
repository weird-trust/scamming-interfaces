let img;
function preload() {
  img = loadImage('assets/img/cursor.png');
}

const mouses = [];
function setup() {
  createCanvas(windowWidth, windowHeight);
  noStroke();
  for (let i = 0; i < 500; i++) {
    mouses.push(new Mouse());
  }
}

const updatedNoise = noise

class Mouse {
  constructor () {
    this.x = 0;
    this.y = 0;
    this.randomX = Math.random() * 100;
    this.randomY = Math.random() * 100;
    this.speed = Math.random() * 0.00015 + 0.00001;
    this.width = Math.random() * 25 + 5;
    this.height = this.width * (img.height / img.width);
  }

 
  
  update () {
    this.x = ((updatedNoise.simplex3(this.randomX, 0, millis() * this.speed) + 1) / 2) * width;
    this.y = ((updatedNoise.simplex3(this.randomY, 0, millis() * this.speed) + 1) / 2) * height;
  }
  
  draw () {
    image(img, this.x, this.y, this.width, this.height);
  }
}


function draw() {
  clear();
  mouses.forEach((mouse) => {
    mouse.update();
    mouse.draw();
  });
}
function windowResized() {
	resizeCanvas(windowWidth, windowHeight);
}


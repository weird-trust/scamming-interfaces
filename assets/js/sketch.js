if (window.matchMedia("(min-width: 768px)").matches) {

  function setup() {
      var cnv = createCanvas(windowWidth, windowHeight);
      cnv.style('position', 'fixed');
      cnv.style('top', '3');
      cnv.style('left', '3');
      cnv.style('z-index', '-1');
  }
    
  function windowResized() {
      resizeCanvas(windowWidth, windowHeight);
  }
  
  function mouseMoved() {
      let wW = windowWidth;
      let wH = windowHeight;
  
      clear();
      let scamX = wW - mouseX;
      let scamY = wH - mouseY;
  
  
  
    //   strokeWeight(0);
    //   line(mouseX, mouseY, scamX, scamY);
  
    //   strokeWeight(0);
    //   let c = color('#333');
    //   fill(c);
    //   var el = ellipse(mouseX, mouseY, 50);
    //   var scamEl = ellipse(scamX, scamY, 50);
  }
  
  }


noise.seed(Math.random());
for (var x = 0; x < canvas.width; x++) {
  for (var y = 0; y < canvas.height; y++) {
    // All noise functions return values in the range of -1 to 1.
    // noise.simplex2 and noise.perlin2 for 2d noise
    var value = noise.simplex2(x / 100, y / 100);
    // ... or noise.simplex3 and noise.perlin3:
    var value = noise.simplex3(x / 100, y / 100, time);

    image[x][y].r = Math.abs(value) * 256; // Or whatever. Open demo.html to see it used with canvas.
  }
}

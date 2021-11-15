const {Engine, Render, Bodies, World, MouseConstraint} = Matter

const divTag = document.querySelector("div.shapes")
const w = window.innerWidth
const h = window.innerHeight

const engine = Engine.create()
const renderer = Render.create({
  element: divTag,
  engine: engine,
  options: {
    height: h,
    width: w,
    background: "#fff",
    wireframes: false,
    pixelRatio: window.devicePixelRatio
  }
})

const createShape = function (x, y) {
  return Bodies.circle(x,y, 20, {
    render: {
      fillStyle: "red"
    }
  })
}

const wallOptions = {
  isStatic: true,
  render: {
    visible: false
  }
}

const ground = Bodies.rectangle(w / 2, h + 50, w + 100, 100, wallOptions)
const ceiling = Bodies.rectangle(w / 2,- 50, w + 100, 100, wallOptions)
const leftWall = Bodies.rectangle(-50, h/2, 100, h+100, wallOptions)
const rightWall = Bodies.rectangle(w+50, h/2, 100, h+100, wallOptions)



World.add(engine.world, [
  ground,
  ceiling,
  leftWall,
  rightWall,
])



Engine.run(engine)
Render.run(renderer)

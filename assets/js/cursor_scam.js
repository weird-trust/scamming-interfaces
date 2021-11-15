let mouse = {x: -1, y: -1};
let cursorScam = {x: -1, y: -1};

if (window.matchMedia('(min-width: 768px)').matches) {
  $(document).mousemove(function (event) {
    let wW = $(window).innerWidth();
    let wH = $(window).innerHeight();

    mouse.x = event.pageX;
    mouse.y = event.pageY;

    cursorScam.x = wW - mouse.x;
    cursorScam.y = wH - mouse.y;

    $('.cursor-scam').css({
      transform: 'translate(' + cursorScam.x + 'px , ' + cursorScam.y + 'px)',
      display: 'block',
    });
  });

  $('a').mouseenter(function () {
    $('.cursor-scam').attr('src', 'assets/img/pointer.png');
  });
  $('a').mouseleave(function () {
    $('.cursor-scam').attr('src', 'assets/img/cursor.png');
  });

}


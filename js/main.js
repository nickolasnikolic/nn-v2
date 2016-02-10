$(document).ready(function(){

  var height = $(window).height();
  var width = $(window).width();

  if( width > 1080 ){
    $('nav a').addClass('hvr-buzz');
  }

  $('.bgSvg').css({
    'height': height + 100,
    'width': width + 100
  });

  var s = Snap('#bgSvg');

  function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }

  function getRandomGrayscale() {
    var letters = '0123456789'.split('');
    var color = '#';
    var colorDuplet = '';
    for (var i = 0; i < 3; i++ ) {

      colorDuplet = letters[Math.floor(Math.random() * 9)] + letters[Math.floor(Math.random() * 9)];

      for(var i = 0; i < 3; i++){
        color += colorDuplet;
      }
    }

    return color;
  }




  for(var i = 3; i > 0; i--){
    var randomValue = Math.random();
    var circle = s.circle(  randomValue * width, randomValue * height, randomValue * height );

    // Now lets create pattern
    var p = s.path("M10-5-10,15M15,0,0,15M0-5-20,15").attr({
      fill: "none",
      stroke: getRandomColor(),
      strokeWidth: 3
    });
    // To create pattern,
    // just specify dimensions in pattern method:
    p = p.pattern(0, 0, 10, 10);
    // Then use it as a fill on big circle

    circle.attr({
      fill: p,
      stroke: '#000',
      strokeWidth: Math.random() * 13,
      opacity: 0
    });
  }

  function makeNewPosition($container) {

    // Get viewport dimensions (remove the dimension of the div)
    $container = ($container || $(window))
    var h = $container.height() - 50;
    var w = $container.width() - 50;

    var nh = Math.floor(Math.random() * h);
    var nw = Math.floor(Math.random() * w);

    return [nh, nw];

  }

  function animateDiv() {
    var $target = $('circle');
    var newq = makeNewPosition($target.parent());
    var oldq = $target.offset();
    var speed = calcSpeed([oldq.top, oldq.left], newq);

    $('circle').each(function() {
      $(this).velocity({
        cx: Math.random() * width,
        cy: Math.random() * height,
        strokeWidth: Math.random() * 1000,
        opacity: Math.random()
      }, speed, function () {
        animateDiv();
      });

    });

  };

  function calcSpeed(prev, next) {

    var x = Math.abs(prev[1] - next[1]);
    var y = Math.abs(prev[0] - next[0]);

    var greatest = x > y ? x : y;

    var speedModifier = 0.1;

    var speed = Math.ceil(greatest / speedModifier);

    return speed;

  }

  animateDiv();
});

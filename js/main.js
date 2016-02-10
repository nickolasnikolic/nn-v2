$(document).ready(function(){

  $('#restartAnimationPortfolio1').click(function(){
    $('#portfolio1').attr('src', $('#portfolio1').attr('src'));
  });

  var height = window.innerHeight;
  var width = window.innerWidth;

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
    var letters = '0123456789ABCDEFG'.split('');
    var color = '#';
    var colorDuplet = '';
    for (var i = 0; i < 3; i++ ) {

      colorDuplet = letters[Math.floor(Math.random() * 16)] + letters[Math.floor(Math.random() * 16)];

      for(var i = 0; i < 3; i++){
        color += colorDuplet;
      }
    }
    console.log(color);
    return color;
  }

  for(var i = 15; i > 0; i--){
    var randomValue = Math.random();
    var circle = s.circle(  randomValue * width, randomValue * height, randomValue * height );



    circle.attr({
      fill: getRandomGrayscale(),
      opacity: randomValue / 100
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
        opacity: Math.random() / 10
      }, speed, function () {
        animateDiv();
      });
    });

  };

  function calcSpeed(prev, next) {

    var x = Math.abs(prev[1] - next[1]);
    var y = Math.abs(prev[0] - next[0]);

    var greatest = x > y ? x : y;

    var speedModifier = 0.3;

    var speed = Math.ceil(greatest / speedModifier);

    return speed;

  }

  animateDiv();
});

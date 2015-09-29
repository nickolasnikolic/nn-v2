$(document).ready(function(){

  $('#restartAnimationPortfolio1').click(function(){
    $('#portfolio1').attr('src', $('#portfolio1').attr('src'));
  });

  var height = window.innerHeight;
  var width = window.innerWidth;

  $('.bgSvg').css({
    'height': height,
    'width': width
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

  for(var i = 0; i < 30; i++){
    var randomValue = Math.random();
    var circle = s.circle(  randomValue * width, randomValue * height, randomValue * i * i );



    circle.attr({
      fill: getRandomColor(),
      opacity: randomValue / 3
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
      $(this).animate({
        cx: Math.random() * width, //newq[0],
        cy: Math.random() * height //newq[1]
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

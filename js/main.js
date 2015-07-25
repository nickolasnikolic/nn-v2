$(document).ready(function(){

  $('article').attr('data-sr', 'enter left, scale down 20% over 1.2s');
  //$('section').not(1).attr('data-sr', 'move');
  window.sr = new scrollReveal();
  $.scrollIt({
    upKey: 38,             // key code to navigate to the next section
    downKey: 40,           // key code to navigate to the previous section
    easing: 'linear',      // the easing function for animation
    scrollTime: 600,       // how long (in ms) the animation takes
    activeClass: 'active', // class given to the active nav element
    onPageChange: null,    // function(pageIndex) that is called when page is changed
    topOffset: 0           // offste (in px) for fixed top navigation
  });
  $('.portfolio > div').slick();
  var s = skrollr.init();
});

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

  var s = skrollr.init();

  (function getSpidey(){
    console.log('running spidey');
    var holder = [];
    $.getJSON('api/spidey')
      .success(function(result){
        _.mapObject(result, function(value){

          holder.push(value);

        });

        $( '#spinner i' ).removeClass('fa-5x');

        var count = 0;
        (function runQue(){
          console.log('running runQue');
          $('#spinnerText').text('crawled: ' + holder[count++].title + ' awaiting...');
          if(count == holder.length - 1){
            count = 0
          }
          setTimeout(runQue, 150);
        })()


      });
  })()
});

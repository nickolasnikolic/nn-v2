$(document).ready(function(){
  /*
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
  */

  $('#restartAnimationPortfolio1').click(function(){
    $('#portfolio1').attr('src', $('#portfolio1').attr('src'));
  });

  //var s = skrollr.init();
});

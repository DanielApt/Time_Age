$(function() {
  //initialise video
  var BV = new $.BigVideo();
  BV.init();
  BV.show('http://av.vimeo.com/68441/738/26610212.mp4?token2=1401031501_9c8f4048e8ee8e3ec326a1ade8f1ddcb&aksessionid=d2ae273f252f8170&ns=4', {ambient:true});

  $('#test .content p').hide().each(function(i){
    $(this).delay(i*3000).slideDown('slow');
  });

  //smoothly scroll to tags
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
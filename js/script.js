$(function() {
  //initialise video
  var BV = new $.BigVideo();
  BV.init();
  BV.show('http://vjs.zencdn.net/v/oceans.mp4');

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
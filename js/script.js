$(function() {
  //initialise video
  var BV = new $.BigVideo();
  BV.init();
  BV.show('http://vjs.zencdn.net/v/oceans.mp4', {ambient:true});

    $('#test').waypoint(function() {
        $(this).find('.content p').each(function(i) {
            $(this).delay(i * 3000).slideDown('slow');
        });
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
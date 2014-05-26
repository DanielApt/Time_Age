$(function() {
    //---------VARIABLES
    var d;//stores the date / time

    var BV = new $.BigVideo();//video
    BV.init();
    BV.show('http://vjs.zencdn.net/v/oceans.mp4', {
        ambient: true
    });

    $('#instructions').waypoint(function(direction) {
        if (direction == 'down') {
            $(this).find('.content p').hide().each(function(i) {
                $(this).delay(i * 3000).slideDown('slow');
            });
        }
    });

    $('#start-test').click(function(){
        d = new Date();
        $('#starting-time').val(d.getTime());
    });

    var count = 1;
    $('#test-btn').click(function(){
        //fill the dot which the user has just clicked for
      $('.dot:nth-child(' + count + ')').addClass('dot-fill');

      //store the time
      d = new Date();
      $('#attempt-'+count).val(d.getTime());
      count++;
    });

    //smoothly scroll to tags
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
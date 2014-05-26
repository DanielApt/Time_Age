$(function() {
    //---------VARIABLES
    var d;//stores the date / time

    var BV = new $.BigVideo();//video
    BV.init();
    BV.show('http://vjs.zencdn.net/v/oceans.mp4', {
        ambient: true
    });

    var ageGroups = ['Baby', 'Toddler', 'Young Child', 'Pre-Teen', 'Teenager', 'Twenty-Something', 'Thirty-Something', 'Fourty-Something', 'Fifty-Something', 'Retirement Worthy', 'Old Age Pensioner'];

    $('#instructions').waypoint(function(direction) {
        if (direction == 'down') {
            $(this).find('.content p').hide().each(function(i) {
                $(this).delay(i * 100).slideDown('slow');
            });
        }
    });

    $('#start-test').click(function(){
        d = new Date();
        $('#starting-time').val(d.getTime());
    });

    var count = 0;
    $('#test-btn').click(function(){
        count++;
        //fill the dot which the user has just clicked for
      $('.dot:nth-child(' + count + ')').addClass('dot-fill');

      //store the time
      d = new Date();
      $('#attempt-'+count).val(d.getTime());

      if(count === 6){
        finishTest();
      }
    });

    function finishTest() {
        var accuracy;
        var ageGroup;//the age group the user will be, e.g. ('Parent, Baby, ')
        console.log('submitting test...');
        $.ajax({
            url:'result.php',
            type:'post',
            dataType:'json',
            data: $('form').serialize(),
            success:function(data){
                accuracy = data.accuracy;
                ageGroup = ageGroups[Math.floor((accuracy/2) * ageGroups.length)];
                alert(ageGroup);
            }
        });

        $('html, body').delay(1000).animate({
            scrollTop: $("#result").offset().top
        }, 2000, function() {
            $('#result h1').slideDown('slow');
            $('#result p').delay(3000).slideDown('slow');
        });
    }

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
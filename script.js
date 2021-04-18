$(document).ready(function(){
    var docWidth = $('body').width(),
        $wrap = $('#wrap'),
        $images = $('#wrap .hb'),
        slidesWidth = $wrap.width();
    
    $(window).on('resize', function(){
      docWidth = $('body').width();
      slidesWidth = $wrap.width();
    })
    
    $(document).mousemove(function(e) {
      var mouseX = e.pageX,
          offset = mouseX / docWidth * slidesWidth - mouseX / 2;
      
      $images.css({
        '-webkit-transform': 'translate3d(' + -offset + 'px,0,0)',
                'transform': 'translate3d(' + -offset + 'px,0,0)'
      });
    });

    $('.bg-slider').bgSwitcher({
      images: ['wp-content/themes/apricot/img/top.jpg','wp-content/themes/apricot/img/top2.jpg','wp-content/themes/apricot/img/top3.jpg','wp-content/themes/apricot/img/top4.jpg'], 
   　 interval: 5000,
   　 loop: true,
   　 shuffle: true,
   　 effect: "fade", // fade,blind,clip,slide,drop,hide
   　 duration: 1000,
   　 easing: "swing" // linear,swing
      });


      // スクロール時のエフェクト
      $(window).scroll(function() {
        function scroll_effect(target_class) {
          var current_position = $("html,body").scrollTop() + 200;
          var target_position = $(target_class).offset().top;

          if(current_position > target_position) {
            $(target_class + " .subtitle h2").addClass("wobble");
            $(target_class + " .image").addClass("rotate");
            $(target_class + "_content").addClass("slideInLeft");
            if(target_class === ".news") {
              $(".anzu").addClass("shake");
            }
          }
        }

        scroll_effect(".introduction");
        scroll_effect(".rice_introduction");
        scroll_effect(".news");
        scroll_effect(".coming");
    });
});



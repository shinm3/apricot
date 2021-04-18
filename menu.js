$(function(){
    $(window).on("load", function() {
        $(".sideber").addClass("slideInLeft")
        $(".menu_detailes").addClass("slideInUnder")
    });

    var menu = $(".subtitle h2 span").text();
    $('.sideber ul li').each(function() {
      if($(this).children("a").text() === menu) {
        $(this).addClass("current_menu");
      }
    })

});
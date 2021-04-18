$(function(){
    $('.wanko').click(function(){
        var wanko_id = $(this).attr('id');
        if ($(".wanko").hasClass("wanko_efect")) {
            $(".wanko").removeClass("wanko_efect");
        }

        if (wanko_id === "beru") {
          $("#name").text("べる");
          $("#sex").text("女の子");
          $("#birth").text("2015年10月15日");
          $("#temper").text("パパ大好き");
        }　else if (wanko_id === "tuku") {
          $("#name").text("つくし");
          $("#sex").text("女の子");
          $("#birth").text("2014年9月24日");
          $("#temper").text("みんな大好き");
        } else {
          $("#name").text("じん");
          $("#sex").text("男の子");
          $("#birth").text("2011年10月17日");
          $("#temper").text("人間大好き");
        }
        var w = $(window).width();
        if(w <= 650) {
          $(".back_ground").css("background-image","url(/wp-content/themes/apricot/img/" + wanko_id + "_sp.jpg)");
        } else {
          $(".back_ground").css("background-image","url(/wp-content/themes/apricot/img/" + wanko_id + ".jpg)");
        }
        $(".ditail").addClass("visibil").addClass("slideInLeft");
        $("#" + wanko_id).addClass("wanko_efect");
        return false;
    });
});
/*Footer Website Count*/
$(document).ready(function () {
  var start = 1;
  var views = $(".website-view-number").html();
  var num = parseInt(views);
  $(window).on("scroll", function () {
    var a = $(window).scrollTop() + $(window).height();
    if (start == 1 && a >= $(".website-view-number").offset().top) {
      start = 0;
      $(".website-view-number")
        .css("opacity", "0")
        .animate({ opacity: 1 }, { duration: 1000 });

      var delay_time = 5000 / num;
      var cur_delay_time = delay_time;

      for (let i = 0; i <= num; i++) {
        setTimeout(function () {
          $(".website-view-number").html(i);
        }, cur_delay_time);
        cur_delay_time += delay_time;
      }
    }
  });
});

/* Hide loader */
window.onload = function codeAddress() {
  $(".loader").css("opacity", "1").animate({ opacity: 0 }, 500);
  setTimeout(function () {
    $(".loader-back").css("opacity", "1").animate({ opacity: 0 }, 500);
  }, 400);
  setTimeout(function () {
    $(".loader-back").hide();
  }, 1000);
  $(".body-cont").css("opacity", "0").animate({ opacity: 1 }, 400);
};

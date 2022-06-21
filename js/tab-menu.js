var elements = document.getElementsByClassName("nav-item");
var final_height;
$('.nav-tabs-box').ready(function () {
  var fin;
  setTimeout(function () {
    fin = $(".tab-content").height() + 50;
  }, 3);
  setTimeout(function () {
    $(".nav-tabs-box").css("height", fin + "px");
  }, 5);
});

window.addEventListener("scroll", function () {
  if ($(window).scrollTop() > 80) {
    $(".nav-bar-back").css("box-shadow", "0px 8px 6px -6px #cccccc");
  } else {
    $(".nav-bar-back").css("box-shadow", "0px 0px");
  }
});

var myFunction = function () {
  var cur = $(".nav-tabs-box").height();
  var fin;
  setTimeout(function () {
    fin = $(".tab-content").height() + 50;
    $(".nav-tabs-box").css("height", fin + "px");
  }, 3);
  
  if($(this).parent().attr('class')=='nav nav-pills nav-pills-danger nav-pills-icons')
  {
    setTimeout(function () {
      $("html, body").stop().animate({
        scrollTop: (0)
      }, 500, 'swing');
    }, 5);
  };
};

for (var i = 0; i < elements.length; i++) {
  elements[i].addEventListener("click", myFunction, false);
}

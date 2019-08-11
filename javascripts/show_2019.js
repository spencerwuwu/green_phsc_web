function set_p_h() {
  var bw = 415;

  $("#lf0").css("height", 410 * $("#lf0").width() / bw);
  $("#lf1").css("height", 265 * $("#lf1").width() / bw);
  $("#lf2").css("height", 560 * $("#lf2").width() / bw);

  $("#lf3").css("height", 265 * $("#lf3").width() / bw);
  $("#lf4").css("height", 265 * $("#lf4").width() / bw);
  $("#lf5").css("height", 265 * $("#lf5").width() / bw);

  $("#lf6").css("height", 560 * $("#lf6").width() / bw);
  $("#lf7").css("height", 410 * $("#lf7").width() / bw);
  $("#lf8").css("height", 300 * $("#lf8").width() / bw);

  $("#lf9").css("height", 295 * $("#lf9").width() / bw);
  $("#lf10").css("height", 330 * $("#lf10").width() / bw);
  $("#lf11").css("height", 440 * $("#lf11").width() / bw);

  $("#lf12").css("height", 300 * $("#lf12").width() / bw);
  $("#lf13").css("height", 560 * $("#lf13").width() / bw);
  $("#lf14").css("height", 265 * $("#lf14").width() / bw);
}

$(document).ready(function () {
  set_p_h();
});

$( window ).resize(function() {
  set_p_h();
});

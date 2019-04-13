function set_height() {
  $("#goldImg").css("height", $("#goldDes").height() + $("#goldTopic").height() + 20);
}
$(document).ready(function () {
  set_height();
  $(".image-container").css("height", $("#goldImg").height());
});

$( window ).resize(function() {
  set_height();
  $(".image-container").css("height", $("#goldImg").height());
});


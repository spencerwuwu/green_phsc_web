function set_height() {
  //$("#goldDes").css("height", 0);
  //$("#goldDes").css("height", $("#goldImg").height() - $("#goldTopic").height());
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

$(".image-container").lightGallery();
$(".more-image-container").lightGallery();

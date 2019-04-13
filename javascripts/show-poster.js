$(document).ready(function () {
  $(".image-container").css("height", $("#goldDes").width() / 4 * 3);
  $(".image-container > img").css("width", "auto");
  $(".image-container > img").css("height", "100%");
  $(".image-container > img").css("margin", "0 25%");
});

$( window ).resize(function() {
  $(".image-container").css("height", $("#goldDes").width() / 4 * 3);
});

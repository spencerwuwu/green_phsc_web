function set_height() {
  y_height = $("#youtube").width() / 969 * 545;
  w_height = $(window).height() - $("#mainMenu").height();
  height = w_height < y_height ? w_height : y_height;
  $("#youtube").css("height", height); 
}

set_height();

$( window ).resize(function() {
  set_height();
});

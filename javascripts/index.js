
function set_height() {
  var screen_height = $(window).height() - $("#mainMenu").height();
  $("#indexCenter").css("height", screen_height * 0.5);
  $("#lightGallery").css("height", screen_height * 0.5);
}

/*
$.getJSON("test.json", function(json) {
  document.write( json2html.transform(data,transform) );
});
*/
var data = [{"src": "images/aestetic-taipei.jpg"}, {"src": "images/aesthetic-cats.jpg"}, {"src": "images/aesthetic-moon.jpg"}, {"src": "images/aesthetic-paint.jpg"}, {"src": "images/aesthetic-sakura-wallpaper.jpg"}, {"src": "images/doodle-images.jpg"}, {"src": "images/flower-creature.jpg"}, {"src": "images/marijuana-smoke-headphones.jpg"}];
var transform = {'<>':'div','data-src':'${src}','html':[
    {'<>':'img','src':'${src}'}
]};

set_height();


$('#lightGallery').html(json2html.transform(data,transform));
$("#lightGallery").lightGallery();
$("#lightGallery").slick({
  dots: false,
  infinite: true,
  speed: 12000,
  slidesToShow: 1,
  centerMode: true,
  arrows: false,
  autoplay: true,
  variableWidth: true,
  autoplaySpeed: 10
});

$( window ).resize(function() {
  set_height();
});

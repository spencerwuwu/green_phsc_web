

var transform = {'<>':'img','src':'${src}'};
var transform = {'<>':'a','href':'${src}','html':[
                    {'<>':'img','src':'${src}'}
                ]};


var data = [];
$('#lightgallery').html(json2html.transform(data,transform));
$("#lightgallery").lightGallery();
/*
$.getJSON("test.json", function(json) {
  document.write( json2html.transform(data,transform) );
});
*/

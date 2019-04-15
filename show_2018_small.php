<?php include("header.php"); ?>

<div class="contest-header blue-bg">
  2018 綠意漫延 綠能原創四格漫畫競賽 </br>
  Renewable Energy Comic Competition 2018
</div>
<img src="images/bluebox.png" style="position: relative; width: 100%; display: inline-block;"/>
<div id="content-container">
<!-- Content -->

  <div class="my-content">
    <div class="show-two-wrapper">

      <div class="show-two-content" id="goldImg">
        <div class="image-container">
        <div class="content" data-src="/images/2018/金賞_風力發電機！.jpg">
        <img src="/images/2018/金賞_風力發電機！.jpg">
        </div>
        </div>
      </div>
      <div class="show-two-content">
        <div class="my-iconheader-wrapper">
          <img src="/images/golden.png"/>
          <div class="my-iconheader medium text" id="goldTopic">
            金賞
          </div>
        </div>
        <div class="img-des" id="goldDes">
          <div class="righttab">
            <p>
  風力發電機！<br/>
            </p>
            <p>
  胡楚涓<br/>
            </p>
            </p>
          </div>
          <div class="mini text">
            <p>
在新竹騎17公里海岸線時可以看到風力發電機，真的很大很壯觀，但它不是大型電風扇喔！
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="my-content">
    <div class="show-two-wrapper">
      <div class="show-two-content">
        <div class="image-container">
        <div class="content" data-src="/images/2018/銀賞_后羿的新武器.jpg">
          <img src="/images/2018/銀賞_后羿的新武器.jpg">
        </div>
        </div>

        <div class="my-iconheader-wrapper">
          <img src="/images/silver.png"/>
          <div class="my-iconheader medium text">
            銀賞
          </div>
        </div>

        <div class="img-des">
          <div class="righttab">
            <p>
      后羿的新武器<br/>
            </p>
            <p>
      辛宥融<br/>
            </p>
            </p>
          </div>
          <div class="mini text">
            <p>
說到太陽能，就讓我想起了跟太陽相關的寓言故事 「后羿射日」。其中主角后羿利用弓箭射下了九顆太陽，而我想利用這個故事結合再生能源原理，帶出新奇有趣的創作，於是將武器改為了太陽能板，原本強烈的日照現在卻利用了太陽能轉換為電力應用，將太陽們擊退！
            </p>
          </div>
        </div>
      </div>

      <div class="show-two-content">
        <div class="image-container">
        <div class="content" data-src="/images/2018/銅賞_像太陽一樣發電.jpg">
          <img src="/images/2018/銅賞_像太陽一樣發電.jpg">
        </div>
        </div>

        <div class="my-iconheader-wrapper">
          <img src="/images/copper.png"/>
          <div class="my-iconheader medium text">
            銅賞
          </div>
        </div>

        <div class="img-des">
          <div class="righttab">
            <p>
      像太陽一樣發電<br/>
            </p>
            <p>
      <br/>
            </p>
            </p>
          </div>
          <div class="mini text">
            <p>
太陽能發電板透過收集太陽的能量轉換為電能，而這裡似乎也有一位能夠「發電」的女孩......。
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="my-content">

    <div class="center-wrapper">
      <div class="my-iconheader-center large text">
        <img src="images/green.png" height="50px;"/>更多入圍作品
      </div>
    </div>

    <div class="show-three-wrapper">

      <div class="show-three-content-large" id="large1" >
      </div>
      <div class="show-three-content-large" id="large2" >
      </div>
      <div class="show-three-content-large" id="large3" >
      </div>

      <div class="show-three-content-small" id="small1">
      </div>
      <div class="show-three-content-small" id="small2">
      </div>


    </div>
  </div>

<script>

var transform = {'<>':'div','class':'more-image-container','html':[
    {'<>':'img','src':'${img}','data-src':'${img}','data-sub-html':'#${name}'},
    {'<>':'div','style':'display:none;','id':'${name}','html':[
      {'<>':'h4','html':'${name}'},
      {'<>':'h4','html':'${author}'},
      {'<>':'span','html':'${des}'},
    ]}
]};
$.getScript('/javascripts/2018/small-data.js', function() {
  $('#large1').html(json2html.transform(data1,transform));
  $('#large2').html(json2html.transform(data2,transform));
  $('#large3').html(json2html.transform(data3,transform));

  $('#small1').html(json2html.transform(data4,transform));
  $('#small2').html(json2html.transform(data5,transform));
  $(".image-container").lightGallery({
    thumbnail: false,
    controls: false
  });
  $(".more-image-container").lightGallery({
    mousewheel: false,
    enableDrag: false,
    enableSwipe: false,
    thumbnail: false,
    controls: false
  });
});
</script>

</div>

  <!-- End of Content -->
<?php
   $footer = file_get_contents('footer.html');
   echo $footer;
?>
<?php
   $ending = file_get_contents('ending.html');
   echo $ending;
?>


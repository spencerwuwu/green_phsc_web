<?php include("header.php"); ?>

<div class="contest-header blue-bg">
  2015 再生能源海報logo創作、攝影競賽 </br>
  Renewable Energy Logo & Photography Competition 2015
</div>
<img src="images/bluebox.png" style="position: relative; width: 100%; display: inline-block;"/>
<div id="content-container">
<!-- Content -->

  <div class="my-content">
    <div class="show-two-wrapper">

      <div class="show-two-content" id="goldImg">
        <div class="image-container">
        <img src="/images/2015/第一名_葉淑芬【夜明協晝取】.jpg" data-src="/images/2015/第一名_葉淑芬【夜明協晝取】.jpg">
        </div>
      </div>
      <div class="show-two-content">
        <div class="my-iconheader-wrapper">
          <img src="/images/golden.png"/>
          <div class="my-iconheader medium text" id="goldTopic">
            金賞
          </div>
        </div>
        <div id="goldDes">
          <div class="righttab">
            <p>
  夜明協晝取<br/>
            </p>
            <p>
  葉淑芬<br/>
            </p>
            </p>
          </div>
          <div class="mini text">
            <p>
大安森林公園站是「臺北最美捷運站」，以「森林轉運—都會與公園的對話」為車站設計主題構想，以光電玻璃來打造節能減炭的綠色環保，以「引進陽光、綠意」之地下車站進行設計，讓白天的太陽能轉換為夜間的能源需求，達到能源的和諧共處。
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
          <img src="/images/2015/第二名_陳幸慧【看見美麗未來】.jpg" data-src="/images/2015/第二名_陳幸慧【看見美麗未來】.jpg">
        </div>

        <div class="my-iconheader-wrapper">
          <img src="/images/silver.png"/>
          <div class="my-iconheader medium text">
            銀賞
          </div>
        </div>

        <div>
          <div class="righttab">
            <p>
      看見美麗未來<br/>
            </p>
            <p>
      陳幸慧<br/>
            </p>
            </p>
          </div>
          <div class="mini text">
            <p>
隔熱、採光、自潔、發電兼具的建材一體型太陽光電系統將成為未來建物明日之星，讓我們可以看見美麗未來。
            </p>
          </div>
        </div>
      </div>

      <div class="show-two-content">
        <div class="image-container">
          <img src="/images/2015/第三名_鄒淑鳳【高美風采】.jpg" data-src="/images/2015/第三名_鄒淑鳳【高美風采】.jpg">
        </div>

        <div class="my-iconheader-wrapper">
          <img src="/images/copper.png"/>
          <div class="my-iconheader medium text">
            銅賞
          </div>
        </div>

        <div>
          <div class="righttab">
            <p>
      高美風采<br/>
            </p>
            <p>
      鄒淑鳳<br/>
            </p>
            </p>
          </div>
          <div class="mini text">
            <p>
高美濕地風力發電機搭配美麗的彩霞，呈現出一幅美麗的畫面
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
    {'<>':'img','src':'${img}_s','data-src':'${img}_s','data-sub-html':'#${name}',},
    {'<>':'div','style':'display:none;','id':'${name}','html':[
      {'<>':'h4','html':'${name}'},
      {'<>':'h4','html':'${author}'},
      {'<>':'span','html':'${des}'},
    ]}
]};
$.getScript('/javascripts/2015/photo-data.js', function() {
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
    thumbnail: false,
    controls: false
  });
});
</script>

  <script src="javascripts/show.js"></script>
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



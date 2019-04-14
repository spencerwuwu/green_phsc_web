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
        <div class="image-twin-container">
          <div class="image-content">
            <div class="image-twin" data-src="/images/2015/第一名_李依玲【無限再生】.jpg">
              <img class="high" src="/images/2015/第一名_李依玲【無限再生】.jpg">
            </div>
            <div class="image-twin" data-src="/images/2015/第一名_李依玲【無限再生】元素.jpg">
              <img class="high" src="/images/2015/第一名_李依玲【無限再生】元素.jpg">
            </div>
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
        <div id="goldDes">
          <div class="righttab">
            <p>
  無限再生<br/>
            </p>
            <p>
  李依玲<br/>
            </p>
            </p>
          </div>
          <div class="mini text">
            <p>
    將數學的無限符號結合沙漏的概念，帶出能源再生的概念。
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="my-content">
    <div class="show-two-wrapper">
      <div class="show-two-content">
        <div class="image-twin-container">
          <div class="image-content">
            <div class="image-twin" data-src="/images/2015/第二名_簡國全【超能力】.jpg">
              <img class="high" src="/images/2015/第二名_簡國全【超能力】.jpg">
            </div>
            <div class="image-twin" data-src="/images/2015/第二名_簡國全【超能力】元素.jpg">
            <img class="wide" src="/images/2015/第二名_簡國全【超能力】元素.jpg">
            </div>
          </div>
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
      超能力<br/>
            </p>
            <p>
      簡國全<br/>
            </p>
            </p>
          </div>
          <div class="mini text">
            <p>
再生能源就像超人般擁有源源不絕的能量，就讓它以無汙染產生的電力守護著地球環境吧!以簡單的造型來形塑每一個再生能源logo設計，每個造型左上右下各有兩條黃色弧形線條，代表每個再生能源正再發電中。
            </p>
          </div>
        </div>
      </div>

      <div class="show-two-content">
        <div class="image-twin-container">
          <div class="image-content">
            <div class="image-twin" data-src="/images/2015/第三名_陳榆欣【再生希望，擁護能源】.jpg">
              <img class="high" src="/images/2015/第三名_陳榆欣【再生希望，擁護能源】.jpg">
            </div>
            <div class="image-twin" data-src="/images/2015/第三名_陳榆欣【再生希望，擁護能源】元素.jpg">
              <img class="wide" src="/images/2015/第三名_陳榆欣【再生希望，擁護能源】元素.jpg">
            </div>
          </div>
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
      再生希望，擁護能源<br/>
            </p>
            <p>
      陳榆欣<br/>
            </p>
            </p>
          </div>
          <div class="mini text">
            <p>
海報:珍惜再生能源的可貴，發展出取之不盡，用之不竭的希望；獻出我們微薄的力量，用雙手擁護與愛惜現有的無盡能源。而海報視覺的設計則與logo的概念結合，清楚且明確的標示再生能源種類，提升識讀性。Logo:簡易的色彩搭配與亮眼舒適的色系，在圖案方面適當的融入葉片，表現出新鮮活力的環保意象。
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="javascripts/show.js"></script>

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
$.getScript('/javascripts/2015/poster-data.js', function() {
  $('#large1').html(json2html.transform(data1,transform));
  $('#large2').html(json2html.transform(data2,transform));
  $('#large3').html(json2html.transform(data3,transform));

  $('#small1').html(json2html.transform(data4,transform));
  $('#small2').html(json2html.transform(data5,transform));
  $(".image-content").lightGallery({
  });
  $(".more-image-container").lightGallery({
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


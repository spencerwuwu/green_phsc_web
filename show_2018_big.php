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
        <div class="content" data-src="/images/2018/金賞_北風與太陽2018.jpg">
        <img src="/images/2018/金賞_北風與太陽2018.jpg">
        </div>
        </div>
      </div>
      <div class="show-two-content">
        <div class="my-iconheader-wrapper">
          <img src="/images/golden.png"/>
          <div class="my-iconheader medium text" id="goldTopic">
            金賞- 社會組
          </div>
        </div>
        <div class="img-des" id="goldDes">
          <div class="righttab">
            <p>
  北風與太陽2018<br/>
            </p>
            <p>
  翁瀅絢<br/>
            </p>
            </p>
          </div>
          <div class="mini text">
            <p>
  「北風與太陽」是個古老的寓言故事，如果把場景放到現代，會變成怎樣的一場競爭呢？運用現代科技將兩者的特殊能力轉換為電力，有了數據佐證，相信勝者可以贏得有憑有據、輸者也能敗得心服口服吧？但我想最後的勝利應該是屬於旅人。透過儲能系統將自然界的力量轉變為家電所需的動能，從此烈日酷晒或狂風呼嘯都不再是令人頭痛的問題；扭轉立場，主導能量流動的人類才是現代北風與太陽之爭最後的贏家！
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
        <div class="content" data-src="/images/2018/銀賞_風力發電-大風車.jpg">
          <img src="/images/2018/銀賞_風力發電-大風車.jpg">
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
      風力發電-大風車<br/>
            </p>
            <p>
      陳禹光<br/>
            </p>
            </p>
          </div>
          <div class="mini text">
            <p>
      為了有電，忙碌的小老鼠每天都努力地踩著滾輪來發電，me兔看到了這個情況想出了一個好點子!!!!!可以發電又很環保的方式!!!
            </p>
          </div>
        </div>
      </div>

      <div class="show-two-content">
        <div class="image-container">
        <div class="content" data-src="/images/2018/銅賞_我的能源....jpg">
          <img src="/images/2018/銅賞_我的能源....jpg">
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
      我的能源…<br/>
            </p>
            <p>
      周俊宏<br/>
            </p>
            </p>
          </div>
          <div class="mini text">
            <p>
      我所選的主題是綠科技的再生能源科普知識去創作,因4格漫畫需在短短的4個格子裡,表現出所要呈現的知識,再加入一點趣味!所以我將前面三格,帶入目前可再生能源的工具,並敘述如何產生再生能源的方式,最後一格我用反差趣味的，凸顯現代人在苦悶的生活裡,因一個簡單的小確幸,卻讓生活裡產生一些『動力』,使生活變的更有趣味。
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
    {'<>':'img','src':'${img}_s','data-src':'${img}','data-sub-html':'#${name}'},
    {'<>':'div','style':'display:none;','id':'${name}','html':[
      {'<>':'h4','html':'${name}'},
      {'<>':'h4','html':'${author}'},
      {'<>':'span','html':'${des}'},
    ]}
]};
$.getScript('/javascripts/2018/2018-big-data.js', function() {
  $('#large1').html(json2html.transform(data1,transform));
  $('#large2').html(json2html.transform(data2,transform));
  $('#large3').html(json2html.transform(data3,transform));

  $('#small1').html(json2html.transform(data4,transform));
  $('#small2').html(json2html.transform(data5,transform));
  $(".image-container").lightGallery({
    mousewheel: false,
    enableDrag: false,
    enableSwipe: false,
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

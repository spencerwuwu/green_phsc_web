<?php include("header.php"); ?>

<div id="body-container">
<div id="lightGallery" style="margin-top: 30px;">
</div>

<div id="content-container">
  <div class="my-content"></div>

  <div class="my-content">
    <div class="center-wrapper large text">
      <div class="small-wrapper center-wrapper">
        <p style="text-align: center;">
        關於本比賽
        </p>
      </div>
    </div>
    <div class="center-wrapper large text">
      <div class="small-wrapper center-wrapper">
        <p style="text-align: center;">
  為提高民眾對於再生能源資訊的關注度，並強化再生能源認識與連結，舉辦再生能源攝影／兒童劇本創作競賽。<br/>
  藉由大眾的雙眼，捕捉散落於全臺的再生能源景象。同時盼望用兒童劇本，將艱深的再生能源議題，轉換為軟性生活化的題材，廣徵創作好手之創意，撰寫出再生能源主題之劇本，讓生硬的議題能更貼近民眾生活，進而產生共鳴。<br/>
  同時期望大眾在參加競賽的過程中，能主動認識再生能源相關議題及發掘生活中所看到的再生能源設備。<br/>
        </p>
    </div>
    </div>
  </div>

  <div class="my-content">
    <div class="center-wrapper">
      <div class="two-button-container large-only">
        <a href="/photo_contest.php" class="ui button big green-bg">攝影比賽</a>
        <a href="/script_contest.php" class="ui button big yellow-bg">劇本比賽</a>
      </div>
      <div class="two-button-container small-only">
        <a href="/photo_contest.php" class="ui button green-button">攝影比賽</a>
        <a href="/script_contest.php" class="ui button yellow-button">劇本比賽</a>
      </div>
    </div>
  </div>

</div>


<script src="javascripts/index.js"></script>

<?php
   $footer = file_get_contents('footer.html');
   echo $footer;
?>
</div>

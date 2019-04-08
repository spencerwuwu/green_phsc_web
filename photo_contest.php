<?php include("header.php"); ?>
<!-- Content -->
<div id="content-container">
  <div class="my-header">關於攝影比賽</div><br>

  <!-- Top buttons -->
  <div class="ui three column grid">
    <div class="column">
      <a href="#method" class="fluid ui button">參加辦法</a>
    </div>
    <div class="column">
      <a href="#rules" class="fluid ui button">作品規範</a>
    </div>
    <div class="column">
      <a href="#prize" class="fluid ui button">評選獎項</a>
    </div>
  </div>
  <script src="javascripts/scrollTo.js"></script>

  <!-- 參賽辦法 -->
  <div class="my-content">
    <div class="my-subheader" id="method">
      參賽辦法
    </div>
    <br>
    <p class="color-lighter">
    1. 不限年齡，需具有中華民國民身分證之國民或中華民國外僑居留證之外籍人士。
    </p>
    <p class="color-lighter">
    2. 每位參賽者總上限投稿件數為10件作品，須為尚未發表、且未參加其他競賽之

    <p class="color-lighter">
    3. 參賽者須於規定之徵件期間內上傳參賽作品。
    </p>
  </div>


  <!-- 作品規範 -->
  <div class="my-content">
    <div class="my-subheader" id="rules">
      作品規範
    </div>
    <br>
    <p class="color-lighter">
    1. 本賽初選以Instagram上傳報名，無預設作品檔案大小。唯參賽作品入圍後，須提供檔案大小1.5MB以上20MB以下與Instagram頁面相同之作品，入圍後繳交檔案格式為JPEG或JPG，且單邊不得小於3000 pixels。
    </p>
    <p class="color-lighter">
    2. 投稿作品以未曾公開發表者為限。公開發表者定義：平面出版、公開展覽、投稿過至線上販售之圖庫或參加其他攝影比賽公開發表者。但發表於Facebook、個人部落格、網路論壇者不在此限。
    </p>
    <p class="color-lighter">
    3. 參賽作品可適度調整亮度、對比、色調、銳利度、飽和度、裁切、拉直、
點入塵、轉為單色調或黑白等。（為確保符合第一點之作品規範，
使用會壓縮檔案畫質之修圖軟體，例如：Instagram內建編修照片功

    </p>
    <p class="color-lighter">
 使用軟體合成、疊圖、無中生有加工（如：邊框、留邊、附加文字，
及簽名檔等）；相機重曝功能不在此限。唯主辦單位有疑議時需提
原始檔案格式（EXIF資訊）證明，主辦單位得全權判定作品所採用
後製是否可接受。
    </p>
    <p class="color-lighter">
 張作品不得以重製、裁切、翻轉作品等方式重複投稿。
    </p>
  </div>



  <!-- 評選獎項 -->
  <div class="my-content">
    <div class="my-subheader" id="prize">
      評選獎項
    </div>
    <p class="color-lighter">
    .....
    </p>
  </div>


  <!-- 我要報名! -->
  <div class="my-content">
    <div class="ui big button" data-iframe="true" id="open-website" data-src="https://docs.google.com/forms/d/e/1FAIpQLSdWUhs-qbP-_ccVaISyKZifnJ8mDCa8oHxA_JjNEstPB3bomA/viewform">
      我要報名!
    </div>
  </div>
  <script>
  $('#open-website').lightGallery({selector: 'this'});
  </script>


  <div class="my-content">
  </div>



</div>

<?php
   $footer = file_get_contents('footer.html');
   echo $footer;
?>

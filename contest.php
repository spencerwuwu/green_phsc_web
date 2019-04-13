<?php include("header.php"); ?>

<div id="body-container">

  <div class="my-content">
    <img width="100%" src="images/cover.png" />
  </div>


  <div class="my-content">
    <div class="my-centerheader large text" id="method">
      能源轉型 綠能先行
    </div>
    <br>
    <div class="center-wrapper">
      <div class="small-wrapper" style="text-align: center; display:inline-block;">
        <p>
能源局從2015年開始，舉辦再生能源相關之網路競賽。邀請民眾一同發掘散落全臺的再生能源景象和發揮想像力創作出再生能源的LOGO、標語及四格漫畫等方式，讓更多人從不同角度來認識再生能源。
        </p>
        <p>
2019年「綠攝影劇」創作競賽，除了從你我角度捕捉到不同的再生能源風貌，也由劇本創作達人將再生能源揉入兒童劇，透過與兒童述說的口吻，撰寫出一部部吸引孩童的表演。
        </p>
        <p>
邀請您拿起相機/紙筆，一同認識並支持再生能源。
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

  <div class="my-content">
  </div>

<?php
   $footer = file_get_contents('footer.html');
   echo $footer;
?>
</div>
<?php
   $ending = file_get_contents('ending.html');
   echo $ending;
?>

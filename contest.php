<?php include("header.php"); ?>

<div id="body-container">

  <div class="my-content">
    <img width="100%" src="images/cover.png" />
  </div>


  <div class="my-content">
    <div class="my-centerheader large text" id="method">
關於本比賽
    </div>
    <br>
    <div class="center-wrapper">
      <div class="small-wrapper" style="text-align: center; display:inline-block;">
        <p>
為提高民眾對於再生能源資訊的關注度，並強化再生能源認識與連結，特舉辦此再生能源攝影／兒童劇劇本創作競賽。藉由大眾的雙眼，捕捉散落於全臺的再生能源景象；同時廣徵創作達人，盼望用兒童劇本，將艱深的再生能源議題，轉換為軟性生活化的題材，讓再生能源能更貼近民眾生活，進而產生共鳴。
        </p>
        <p>
期望大眾在參加競賽的過程中，能主動發掘生活中所看到的再生能源設備，認識再生能源相關議題，進而認同再生能源之理念！

        </p>

    </div>
    </div>
  </div>

  <div class="my-content">
    <div class="center-wrapper">
      <div class="two-button-container large-only">
        <a href="/photo_contest.php" class="ui button big green-bg">攝影競賽</a>
        <a href="/script_contest.php" class="ui button big yellow-bg">劇本競賽</a>
      </div>
      <div class="two-button-container small-only">
        <a href="/photo_contest.php" class="ui button green-bg">攝影競賽</a>
        <a href="/script_contest.php" class="ui button yellow-bg">劇本競賽</a>
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

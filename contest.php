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
      <div class="small-wrapper" style="text-align: center;">
        <p>
再生能源，是驅動未來經濟的新動能。世界各國也努力著朝再生能源使用邁進，
        </p>
        <p>
所以各個國家都積極建設適合在地氣候及地理環境的再生能源，以建立符合綠色經濟發展的環境。
        </p>
        <p>
在臺灣，自產能源相對匱乏，多為倚賴海外進口化石燃料供電。
        </p>
        <p>
為降低對化石能源的依賴、落實減碳目標，並發展自主能源產業，政府刻積極推動我國再生能源發展，使我國達成「能源自主」之目標

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

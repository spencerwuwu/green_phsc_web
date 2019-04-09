<?php include("header.php"); ?>

<div id="lightGallery" style="margin-top: 30px;">
</div>

<div id="content-container">
  <div class="my-content"></div>

  <div class="my-content">
    <div class="center-wrapper">
      <p class="large text">
        關於本比賽
      </p>
      <p class="large text">
        .....
      </p>
    </div>
  </div>

  <div class="my-content">
    <div class="center-wrapper">
      <div class="two-button-container">
        <a href="/photo_contest.php" class="ui button">攝影比賽</a>
        <a href="/script_contest.php" class="ui button">劇本比賽</a>
      </div>
    </div>
  </div>

</div>


<script src="javascripts/index.js"></script>

<?php
   $footer = file_get_contents('footer.html');
   echo $footer;
?>

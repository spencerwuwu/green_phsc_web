<?php include("header.php"); ?>

<div id="body-container">
<!--
<div id="lightGallery" style="margin-top: 30px;">
</div>
-->

<iframe id="youtube" width="100%" src="https://www.youtube.com/embed/dIMwxr0Tfxg?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <div class="my-content">
  </div>
  <div class="my-content">
    <div class="center-wrapper">
    <div class="small-wrapper">
    <img src="/images/index-text.png" width="100%"/>
</div>
</div>
  </div>

  <div class="my-content">
    <div class="center-wrapper">
      <div class="two-button-container">
        <a href="/contest.php" class="ui button big gray-bg">2019 綠攝影劇創作比賽</a>
      </div>
    </div>
  </div>

  <div class="my-content">
  </div>
  <div class="my-content">
  </div>
  <div class="my-content">
  </div>


<script src="javascripts/index.js"></script>

  <img src="/images/index-footer.png" width="100%" style="margin-bottom: -6px;"/>
<?php
   $footer = file_get_contents('footer.html');
   echo $footer;
?>
</div>
<?php
   $ending = file_get_contents('ending.html');
   echo $ending;
?>

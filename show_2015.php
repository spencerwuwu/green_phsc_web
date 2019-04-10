<?php include("header.php"); ?>
<div id="body-container">
<!-- Content -->
  <div class="my-content">
    <div class="my-centerheader medium text" id="method">
      2019 綠色影劇 _ 綠能攝影 / 兒童劇本創作競賽<br/>
      Renewable Energy Photography / Script Writing Competition 2019
    </div>

  <div class="my-content">
    <div class="ui grid container">
      <div class="ten wide column">
        <img class="ui fluid image" src="/images/flower-creature.jpg">
      </div>
      <div class="six width column">
        <div class="my-subheader">
          金賞
        </div>
      </div>
    </div>
  </div>

<!-- End of Content -->
</div>
<?php
   $footer = file_get_contents('footer.html');
   echo $footer;
?>
<?php
   $ending = file_get_contents('ending.html');
   echo $ending;
?>

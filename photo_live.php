<?php include("header.php"); ?>

<div id="body-container">
<!-- Content -->
<div id="content-container">

  <!-- IG Feeds -->
  <div class="my-centerheader large text">
    即時賽況
  </div>

  <div class="my-content">
    <div class="center-wrapper">
    <div class="small-wrapper large-only">
<!-- InstaWidget -->
<a href="https://instawidget.net/v/tag/%E7%B6%A0%E8%83%BD%E6%94%9D%E5%BD%B1" id="link-4bcd501f7ec97fb21477d9331de42db24af3ccf44c8384482cedda9b7b9ba009">#綠能攝影</a>
<script src="https://instawidget.net/js/instawidget.js?u=4bcd501f7ec97fb21477d9331de42db24af3ccf44c8384482cedda9b7b9ba009&width=768px"></script>
    </div>  
    <div class="tiny-wrapper small-only">
<!-- InstaWidget -->
<a href="https://instawidget.net/v/tag/%E7%B6%A0%E8%83%BD%E6%94%9D%E5%BD%B1" id="link-450662fb56708dd82b9a55c5873ae4387d1d6e6bdc5a13e4aefd8f8cb2730ef5">#綠能攝影</a>
<script src="https://instawidget.net/js/instawidget.js?u=450662fb56708dd82b9a55c5873ae4387d1d6e6bdc5a13e4aefd8f8cb2730ef5&width=300px"></script>
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

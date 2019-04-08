<?php include("header.php"); ?>

<div id="indexCenter">
    <div class="ui center aligned basic segment">
      <h1>
        2019 <br>
        綠能攝影／兒童劇本創作競賽
      </h1>

      <div class="ui center aligned basic segment">
        <p>
          130年來累積了豐富且珍貴的攝影資產、並擁有頂尖的攝影師們持續發表觸動人心的影像，帶給大眾嶄新的視界。</br>
          現在，邀請您與我們分享鏡頭下的精采視野與鏡頭背後的故事！
        </p>
        <a href="photo_contest.html" class="ui button">
          <i class="camera icon"></i>
          報名攝影比賽
        </a>
        <div class="ui horizontal divider">
          Or
        </div>
        <div class="middle aligned column">
          <a href="script_contest.html" class="ui button">
            <i class="edit outline icon"></i>
            報名劇本比賽
          </a>
        </div>
      </div>

    </div>
</div>

<div id="lightGallery">
</div>

<script src="javascripts/index.js"></script>

<?php
   $footer = file_get_contents('footer.html');
   echo $footer;
?>

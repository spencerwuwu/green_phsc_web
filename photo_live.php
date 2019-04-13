<?php include("header.php"); ?>

<div id="body-container">
<!-- Content -->
<div id="content-container">

  <!-- IG Feeds -->
  <div class="my-header">
    即時賽況
  </div>
  <div class="my-content">
    <br/>

    <div class="ui three column doubling stackable grid">
      <div class="column">
        <div class="ui centered card">
          <div class="content">
            <div class="right floated meta">14h</div>
            <img class="ui avatar image" src="images/elliot.jpg"> Elliot
          </div>
          <div class="image">
            <img src="images/flower-creature.jpg">
          </div>
          <div class="content">
            <span class="right floated">
              <i class="heart outline like icon"></i>
              17 likes
            </span>
            <i class="comment icon"></i>
            3 comments
          </div>
        </div>
      </div>

      <div class="column">
        <div class="ui centered card">
          <div class="content">
            <div class="right floated meta">16h</div>
            <img class="ui avatar image" src="images/elliot.jpg"> Elliot
          </div>
          <div class="image">
            <img src="images/aesthetic-sakura-wallpaper.jpg">
          </div>
          <div class="content">
            <span class="right floated">
              <i class="heart outline like icon"></i>
              17 likes
            </span>
            <i class="comment icon"></i>
            3 comments
          </div>
        </div>
      </div>

      <div class="column">
        <div class="ui centered card">
          <div class="content">
            <div class="right floated meta">19h</div>
            <img class="ui avatar image" src="images/elliot.jpg"> Elliot
          </div>
          <div class="image">
            <img src="images/aestetic-taipei.jpg">
          </div>
          <div class="content">
            <span class="right floated">
              <i class="heart outline like icon"></i>
              17 likes
            </span>
            <i class="comment icon"></i>
            3 comments
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="my-content">
<div id="instafeed"></div>
  </div>


<script type="text/javascript" src="/javascripts/instafeed.min.js"></script>

<script type="text/javascript">
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'streetphotography',
        clientId: '511e452620a24eb19c1d92d0bdddd1f1'
    });
    feed.run();
</script>


</div>


<!-- End of Content -->


<?php
   $footer = file_get_contents('footer.html');
   echo $footer;
?>
</div>
<?php
   $ending = file_get_contents('ending.html');
   echo $ending;
?>

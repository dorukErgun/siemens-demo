<?php include ("../components/db_config.php"); ?>
<!DOCTYPE html>
<html>

    <head>
        <?php include("../components/metadata.php") ?>
        <title>User Board</title>
        <style>
        body{
            background-image: url(../images/bg.png);
            margin-top: 10px;
        }
        
        </style>
    </head>

    <body>

    <div class="ui three stackable cards" style="height: 100%">
        <div class="card" style="background-color: #016936">
    
    <div class="content">
      <div class="header">Send a Request</div>
      <div class="description">
        Matthew is an interior designer living in New York.
      </div>
    </div>
    
  </div>
  <div class="card"  style="background-color: #008080">
    <div class="content">
      <div class="header">Send a Permission Request</div>
      <div class="description">
        Matthew is an interior designer living in New York.
      </div>
    </div>
    
  </div>
  <div class="card">
    <div class="content">
      <div class="header">Indicate a Danger</div>
      <div class="description">
        Matthew is an interior designer living in New York.
      </div>
    </div>
    <div class="extra content">
      <span class="right floated">
        Joined in 2013
      </span>
      <span>
        <i class="user icon"></i>
        75 Friends
      </span>
    </div>
  </div>
        </div>

        <?php include("../components/footer.php") ?>

    </body>
        
</html>
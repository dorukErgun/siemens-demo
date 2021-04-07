<?php include ("../components/db_config.php"); ?>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <?php include("../components/metadata.php") ?>
  <title>Login</title>

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    <form class="ui large form" action="script.php" method="post">
      <input type="hidden" name="action" value="login"> 
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" placeholder="Username">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="pwd" placeholder="Password">
          </div>
        </div>
        <button type="submit" value="Login" class="ui fluid large teal submit button">Login</button>
      </div>

      <div class="ui error message"></div>

    </form>

  </div>
</div>


    <?php include("../components/footer.php") ?> 
    </body>
</html>
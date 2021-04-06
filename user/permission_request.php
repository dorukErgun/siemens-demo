<?php include ("../components/db_config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
  <!-- Standard Meta -->
  <?php include("../components/metadata.php") ?>

  <!-- Site Properties -->
  <title>Login Example - Semantic</title>


    <style type="text/css">
        body {
        background-color: #DADADA;
            background-image: url(../images/bg.png);
            margin-top: 10px;
        }
        body > .grid {
        height: 100%;
        }
        .image {
        margin-top: -100px;
        }
        .column {
        max-width: 70%;
        }
    </style>

    
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui image header">
    <i class="comment alternate outline icon"></i>
      <div class="content">
        Fill the Below Form to Contant Your Manager About a Permission Request
      </div>
    </h2>

    <form class="ui form" action="script.php" method="post">
            <input type="hidden" name="action" value="add_permission_request"> 
            
        <div class="field">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First Name">
        </div>
        <div class="field">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last Name">
        </div>
        <div class="field">
            <label>Starting Date</label>
            <input type="date" name="starting_date" placeholder="Starting Date">
        </div>
        <div class="field">
            <label>Ending Date</label>
            <input type="date" name="ending_date" placeholder="Ending Date">
        </div>
        <div class="field">
            <label>Comments</label>
            <input type="text" name="comments" placeholder="Comments">
        </div>
        <a class="ui button" href="index.php">Go Back</a>
        <button id="close" class="ui button" type="submit">Submit</button>
    </form>


  </div>
</div>



<?php include("../components/footer.php") ?>
</body>
</html>
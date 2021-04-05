<?php include ("security.php"); ?>
<?php include ("../components/db_config.php"); ?>
<!DOCTYPE html>
<html>

    <head>
        <?php include("../components/metadata.php") ?>
        <title>Requests</title>
        <link rel="stylesheet" href="../css/edit_and_delete.css">
    </head>

    <body>

        <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM requests WHERE id=$id";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>

        <form class="ui form" action="script.php" method="post">
            <input type="hidden" name="action" value="update_request"> 
            <input type="hidden" name="id" value="<?php echo($id);?>"> 
                
            <div class="field">
                <label>First Name</label>
                <input type="text" name="fname" placeholder="First Name" value="<?php echo($row['fname']);?>">
            </div>
            <div class="field">
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Last Name" value="<?php echo($row['lname']);?>">
            </div>
            <div class="field">
                <label>Request</label>
                <input type="text" name="request" placeholder="Request" value="<?php echo($row['request']);?>">
            </div>
            <button id="close" class="ui button" type="submit">Submit</button>
        </form>
        
    </body>
</html>
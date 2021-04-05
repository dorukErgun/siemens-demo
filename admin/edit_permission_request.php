<?php include ("security.php"); ?>
<?php include ("../components/db_config.php"); ?>
<!DOCTYPE html>
<html>

    <head>
        <?php include("../components/metadata.php") ?>
        <title>Permission Requests</title>
        <link rel="stylesheet" href="../css/edit_and_delete.css">
    </head>

    <body>

        <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM permission_requests WHERE id=$id";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>

        <form class="ui form" action="script.php" method="post">
            <input type="hidden" name="action" value="update_permission_request"> 
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
                <label>Starting Date</label>
                <input type="date" name="starting_date" placeholder="Starting Date" value="<?php echo($row['starting_date']);?>">
            </div>
            <div class="field">
                <label>Ending Date</label>
                <input type="date" name="ending_date" placeholder="Ending Date" value="<?php echo($row['ending_date']);?>">
            </div>
            <div class="field">
                <label>Comments</label>
                <input type="text" name="comments" placeholder="Comments" value="<?php echo($row['comments']);?>">
            </div>
            <button id="close" class="ui button" type="submit">Submit</button>
        </form>
        
    </body>
</html>
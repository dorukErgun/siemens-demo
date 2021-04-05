<?php include ("security.php"); ?>
<?php include ("../components/db_config.php"); ?>
<!DOCTYPE html>
<html>

    <head>
        <?php include("../components/metadata.php") ?>
        <title>Delete Request</title>

        
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
            <input type="hidden" name="action" value="delete_request"> 
            <input type="hidden" name="id" value="<?php echo($id);?>"> 
                
            <div class="field">
                <label>Are you sure you want to delete <?php echo($row['fname']); echo " "; echo($row['lname']);  ?>'s request?</label>
                <input type="hidden" name="del" value="true"> 
            </div>
            <button id="close" class="ui button" type="submit">Delete</button>
        </form>
    </body>
</html>
<?php include ("security.php"); ?>
<?php include ("../components/db_config.php"); ?>
<!DOCTYPE html>
<html>

    <head>
        <?php include("../components/metadata.php") ?>
        <title>Requests</title>
    </head>

    <body>
      
        <?php include("../components/sidebar.php") ?>
        <?php include("../components/menu.php") ?>

        <div class="pusher">
            <div class="main-content">
            <?php
                //Reading permisson requests db.
                $query_for_permissions = "SELECT * FROM permission_requests";
                $result_for_permissions = mysqli_query($db, $query_for_permissions);
                $total_for_permissions = mysqli_num_rows($result_for_permissions);
                //$row_for_permissions = mysqli_fetch_assoc($result_for_permissions);

                //Reading requests db.
                $query_for_requests = "SELECT * FROM requests";
                $result_for_requests = mysqli_query($db, $query_for_requests);
                $total_for_requests = mysqli_num_rows($result_for_requests);
                //$row_for_requests = mysqli_fetch_assoc($result_for_requests);

                //Reading requests db.
                $query_for_dangers = "SELECT * FROM dangers";
                $result_for_dangers = mysqli_query($db, $query_for_dangers);
                $total_for_dangers = mysqli_num_rows($result_for_dangers);
                $row_for_dangers = mysqli_fetch_assoc($result_for_dangers);
            ?> 

            <div class="table-holder">
            <h1>Active requests are listed as below.</h1>
                <table id="main-table" class="ui celled striped table" style="width:100%">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Comments</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                        while ($row = mysqli_fetch_assoc($result_for_requests)) { ?>
                            <tr>
                                <td><?php echo($row['dte']);?></td>
                                <td><?php echo($row['fname']); echo " "; echo($row['lname']);?></td>
                                <td><?php echo($row['request']);?></td>
                                <td>
                                    <div class="ui buttons">
                                        <button class="ui positive button edit" value="<?php echo($row['id']);?>">Edit</button>
                                        <div class="or"></div>
                                        <button class="ui button delete" value="<?php echo($row['id']);?>">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        <?php	
                        }
                    ?>
                    </tbody>

                    <tfoot>
                    </tfoot>
                </table>
            </div>


            </div>
        </div>

        <div class="ui modal edit">
            <div class="header">
                Edit Request
            </div>
            <div class="content">
                <iframe id="edit_frame" class="edit_frame" src="" frameborder="0" height="420px" width="100%"></iframe>
                <div class="description">
            </div>
            </div>
            <div class="actions">
                <div class="ui black deny button" id="close1">
                Close
                </div>
            </div>
        </div>

        <div class="ui modal delete">
            <div class="header">
                Delete Request
            </div>
            <div class="content">
                <iframe id="delete_frame" class="delete_frame" src="" frameborder="0" height="100px" width="100%"></iframe>
                <div class="description">
            </div>
            </div>
            <div class="actions">
                <div class="ui black deny button" id="close2">
                Close
                </div>
            </div>
        </div>


        <?php include("../components/footer.php") ?>  
        <script>
            $(document).ready( function () {
                $('#main-table').DataTable();
            });
        </script>  
        <script>
            $('.edit').click(function(){
                var id = $(this).attr('value');
                var new_src = 'edit_request.php?id=' + id;
                console.log(new_src);
                $('.edit_frame').attr('src', new_src);
                $('.ui.modal.edit').modal('show');
            });
        </script>
        <script>
            $('.delete').click(function(){
                var id = $(this).attr('value');
                var new_src = 'delete_request.php?id=' + id;
                console.log(new_src);
                $('.delete_frame').attr('src', new_src);
                $('.ui.modal.delete').modal('show');
            });
        </script>  
        <script>
        $('#close1').click(function(){
            window.location.reload(true);
            return false;
        });
        $('#close2').click(function(){
            window.location.reload(true);
            return false;
        });
        </script>  
        <script src="../scripts/sidebar.js" ></script>
    </body>
</html>
<?php 
    session_start();
    include ("../components/db_config.php"); 

    $action = $_POST['action'];
    if(!isset($action)){
        $action = $_GET['action'];
    }

    if(!isset($action)){
        header("location: login.php");
    }

    switch($action){
        case 'login': 
            //login process
            $user = "admin";
            $password = "admin";

            $username = $_POST['username'];
            $pwd = $_POST['pwd'];

            if($username == $user && $pwd == $password){
                session_regenerate_id();
                $_SESSION['logged'] = true;
                header("location: dashboard.php");
            }else{
                header("location: login.php");
            }

        break;

        case 'logout':
            session_destroy();
            header("location: login.php");
        break;

        case 'update_permission_request':
            // take all form values
            $id = $_POST['id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $starting_date = $_POST['starting_date'];
            $ending_date = $_POST['ending_date'];
            $comments = $_POST['comments'];

            // write them in database
            $sql = "UPDATE permission_requests SET 
            fname = '$fname',
            lname = '$lname',
            starting_date = '$starting_date',
            ending_date = '$ending_date',
            comments = '$comments' WHERE id=$id
            ";
            mysqli_query($db, $sql);
            header("location: edit_succesfully.php");
        break;
    
        case 'delete_permission_request':
            $id = $_POST['id'];
            $sql = "DELETE FROM permission_requests WHERE id=$id";
            mysqli_query($db, $sql);
            header("location: delete_succesfully.php");
        break;

        case 'update_request':
            // take all form values
            $id = $_POST['id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $request = $_POST['request'];

            // write them in database
            $sql = "UPDATE requests SET 
            fname = '$fname',
            lname = '$lname',
            request = '$request' WHERE id=$id
            ";
            mysqli_query($db, $sql);
            header("location: edit_succesfully.php");
        break;
    
        case 'delete_request':
            $id = $_POST['id'];
            $sql = "DELETE FROM requests WHERE id=$id";
            mysqli_query($db, $sql);
            header("location: delete_succesfully.php");
        break;

        case 'delete_permission_request':
            $id = $_POST['id'];
            $sql = "DELETE FROM permission_requests WHERE id=$id";
            mysqli_query($db, $sql);
            header("location: delete_succesfully.php");
        break;

        case 'update_danger':
            // take all form values
            $id = $_POST['id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $danger = $_POST['danger'];

            // write them in database
            $sql = "UPDATE dangers SET 
            fname = '$fname',
            lname = '$lname',
            danger = '$danger' WHERE id=$id
            ";
            mysqli_query($db, $sql);
            header("location: edit_succesfully.php");
        break;
    
        case 'delete_danger':
            $id = $_POST['id'];
            $sql = "DELETE FROM dangers WHERE id=$id";
            mysqli_query($db, $sql);
            header("location: delete_succesfully.php");
        break;
    }
    
?>
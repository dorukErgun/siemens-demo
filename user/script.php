<?php 
    include ("../components/db_config.php"); 

    $action = $_POST['action'];
    if(!isset($action)){
        $action = $_GET['action'];
    }

    if(!isset($action)){
        header("location: index.php");
    }

    switch($action){
        case 'add_request': 
            // take all form values
            $dte = date('Y-m-d');
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $request = $_POST['request'];

            // write them in database
            $sql = "INSERT INTO requests SET 
            dte = '$dte',
            fname = '$fname',
            lname = '$lname',
            request = '$request'
            ";
            mysqli_query($db, $sql);
            header("location: index.php");
        break;

        case 'add_danger': 
            // take all form values
            $dte = date('Y-m-d');
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $danger = $_POST['danger'];

            // write them in database
            $sql = "INSERT INTO dangers SET 
            dte = '$dte',
            fname = '$fname',
            lname = '$lname',
            danger = '$danger'
            ";
            mysqli_query($db, $sql);
            header("location: index.php");
        break;

        case 'add_permission_request': 
            // take all form values
            $dte = date('Y-m-d');
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $starting_date = $_POST['starting_date'];
            $ending_date = $_POST['ending_date'];
            $comments = $_POST['comments'];

            // write them in database
            $sql = "INSERT INTO permission_requests SET 
            dte = '$dte',
            fname = '$fname',
            lname = '$lname',
            starting_date = '$starting_date',
            ending_date = '$ending_date',
            comments = '$comments'
            ";
            mysqli_query($db, $sql);
            header("location: index.php");
        break;
    }
    
?>
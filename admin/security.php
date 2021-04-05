<?php
	session_start();

	if($_SESSION['logged'] == false){
		header("location: login.php");
    }
    
?>
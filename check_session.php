<?php
   session_start();

     if(! isset($_SESSION['islogin'])){
	    //echo 'Forbidden access !<br>';
		header("location:login.php");
		exit;
	 }
?>
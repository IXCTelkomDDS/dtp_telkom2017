<?php
   session_start();

     if(! isset($_SESSION['islogin'])){
	    echo 'Forbidden access !<br>';
		echo '<a href="../login.php">Please login first !</a>';
		exit;
	 }
?>
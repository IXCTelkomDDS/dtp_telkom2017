<?php
	include "koneksi_db.php";
	session_start();

	if(isset($_POST["Submit"])) {

    	$query = "SELECT * FROM user_pic WHERE user_type = 'User P.I.C' AND username = '".$_POST["username"]."' AND password = '".$_POST["password"]."'";
    	$result = mysqli_query($connect, $query);

    	if(mysqli_num_rows($result) > 0) {
	        $_SESSION["username"] = $_POST["username"];
    	    header('location:halaman-upload.php');
	    } else {
	        header('location:halaman-login.php');
	    }
	}
	
	//}
	
	
	/*$data = mysqli_fetch_array($result);
    	    $_COOKIES['islogin'] = TRUE;
    	    $_COOKIES['username'] = $data['username'];
    	    $_COOKIES['password'] = $data['password'];
    	    $_COOKIES['user_type'] = $data['user_type'];
    	    
    	        //echo 'Login Successfull.<br>';
    	        echo '<a href="halaman-upload.php"></a>';
    	} else {
    	        echo 'Login Failed.<br>';
    	        echo '<a href="halaman-login.php"></a>'; 
    	}*/
    	    
	
?>
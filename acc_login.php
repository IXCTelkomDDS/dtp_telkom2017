<?php
	include "koneksi_db.php";
	session_start();
	
	    $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
	
	if(isset($_POST['Submit'])) {
	    $query = "SELECT * FROM user_pic WHERE user_type = 'User P.I.C' AND username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
    	$result = mysqli_query($connect, $query);
        $found = mysqli_num_rows($result);
    	
    	if($found == 1) {
    	    $data = mysqli_fetch_array($result);
    	    
    	    if(!empty($_POST["remember"])) {
    	        $_SESSION['islogin'] = TRUE;
    	        $_SESSION['username'] = $data['username'];
    	        $_SESSION['password'] = $data['password'];
    	        
              /*setcookie ("username", $_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
              setcookie ("password", $_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));*/
          }
    	
    	    /*$_COOKIE['islogin'] = TRUE;
    	    $_COOKIE['username'] = $data['username'];
    	    $_COOKIE['password'] = $data['password'];*/
    	    
    	    $_SESSION["status"] = "Login";
    	    header('location: halaman-upload.php');
    	} else {
    	    header('location: halaman-login.php');
    	}
	}
    	
    
    	    
    	    /*if(!empty($_POST['remember'])) {
    	        setcookie('username', $_POST['username'], time()+(10 * 365 * 24 * 60 * 60));
    	        setcookie('password', $_POST['password'], time()+(10 * 365 * 24 * 60 * 60));
    	    } else {
    	        if(isset($_COOKIE['username'])) {
    	            setcookie('username', '');
    	        }
    	        if(isset($_COOKIE['password'])) {
    	            setcookie('password', '');
    	        }
    	    }
    	} else {
    	    $message = "Invalid Login";
    	}
	}*/
	
?>
<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

     include "koneksi_db.php";

?>

<!DOCTYPE html>
<html data-wf-page="59fd0c1ae534be0001f52c87" data-wf-site="59fd0c1ae534be0001f52c86">

<head>
  
  <title>Sign Up User P.I.C</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">

        <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
          <span class="login100-form-title-1">
            Form Sign Up Responsible of P.I.C
          </span>
        </div>

        <form class="login100-form validate-form" role="form" method="post" enctype="multipart/form-data" action="act_signup.php">

          <div class="wrap-input100 validate-input m-b-26">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" placeholder="Enter Username" required="">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Enter Password" required="">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-select validate-input m-b-18">
          	<span class="label-input100">Lab</span>
				<select name="lab_pic" required="" class="text-field w-select">
					<option value="">-- Pilih Lab --</option>
					<option value="IXC">Lab IXC</option>
					<option value="BAN">Lab BAN</option>
					<option value="BCN">Lab BCN</option>
					<option value="CNP">Lab CNP</option>
					<option value="FMC">Lab FMC</option>
					<option value="ISR">Lab ISR</option>
					<option value="SOB">Lab SOB</option>
				</select>
			</span>
		  </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" value="Sign Up" name="Submit2">
              Sign Up
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>
<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>
 
<?php

  include "koneksi_db.php";


	  //query update user_pic
	if(isset($_POST['SignUp'])) {

      $username     = $_POST['username'];
      $password     = $_POST['password'];
      $name_pic 	= $_POST['name_pic'];
      $phone    	= $_POST['phone'];
      $email	    = $_POST['email'];
      $lab_pic      = $_POST['lab_pic'];
      $user_type    = $_POST['user_type'];
   
	    $sql = "INSERT INTO user_pic (id_pic, username, password, name_pic, phone, email, lab_pic, user_type) VALUES (null, '$username', '$password', '$name_pic', '$phone', '$email', '$lab_pic', '$user_type')";
        $query = mysqli_query($connect, $sql);
		
        if($query) { ?>
          <script>
            alert('Add Successful');
            location.href='login.php';
          </script>

        <?php } else { ?>
          <script>
            alert('Add Failed');
            location.href='signup.php';
          </script>

      <?php } ?>    

  <?php } 

?>

<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>

	<title>Sign Up</title>

	<!-- Favicon -->
		<link rel="shortcut icon" href="images/DDS-telkom.png">

		<!-- Web Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Raleway:700,400,300" rel="stylesheet" type="text/css">

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Table CSS -->
		<link href="css/table.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">

		<!-- Pop up css --> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<!-- Custom css --> 
		<link href="css/main_login.css" rel="stylesheet">
	
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap" style="margin-top: 20px; margin-bottom: 20px;">
			<div class="vertical-align-middle">
				<div class="auth-box" style="width: 500px; height: 800px;">
					<div class="left" style="width: 500px;">
						<div class="content" style="padding-bottom: 30px;">
								<p class="lead" style="font-weight: bold; font-size: 30px; margin-top: 30px;">Sign Up to your account</p>

								<br>

							<form class="form-auth-small" role="form" method="post" enctype="multipart/form-data" action="">

								<div class="form-group">
									<label class="control-label" style="margin-right: 500px;">Name</label>
									<input type="text" class="form-control" required="" name="name_pic" placeholder="Your Name">
								</div>

								<div class="form-group">
									<label class="control-label" style="margin-right: 500px;">Username</label>
									<input type="text" class="form-control" required="" name="username" placeholder="Username">
								</div>

								<div class="form-group">
									<label class="control-label" style="margin-right: 500px;">Password</label>
									<input type="password" class="form-control" required="" name="password" placeholder="Password">
								</div>

								<div class="form-group">
									<label class="control-label" style="margin-right: 500px;">Phone</label>
									<input type="text" class="form-control" required="" name="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Your Phone">
								</div>

								<div class="form-group">
									<label class="control-label" style="margin-right: 500px;">Email</label>
									<input type="text" class="form-control" required="" name="email" placeholder="example@gmail.com">
								</div>

								<div class="form-group">
									<label class="control-label" style="margin-right: 370px;">P.I.C Lab</label>
									<select name="lab_pic" required="" class="form-control">
										<option value="">-- Choose the Lab --</option>
										<option value="IXC">IXC Lab</option>
										<option value="BAN">BAN Lab</option>
										<option value="BCN">BCN Lab</option>
										<option value="CNP">CNP Lab</option>
										<option value="FMC">FMC Lab</option>
										<option value="ISR">ISR Lab</option>
										<option value="SOB">SOB Lab</option>
									</select>
								</div>

								<div class="form-group">
									<label class="control-label" style="margin-right: 370px;">Usertype</label>
									<select name="user_type" required="" class="form-control">
										<option value="">-- Choose the usertype --</option>
										<option value="User P.I.C">User P.I.C</option>
										<option value="Manager P.I.C">Manager P.I.C</option>
									</select>
								</div>

								<button type="submit" name="SignUp" value="Sign Up" class="btn btn-primary btn-lg btn-block" style="font-weight: bold; font-size: 18px;">SIGNUP</button>

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
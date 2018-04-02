<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>
 
<?php

  include "koneksi_db.php";
  include "header.php";


	  //query update user_pic
	if(isset($_POST['Update'])) {

      $username     = $_POST['username'];
      $password     = $_POST['password'];
      $name 	    = $_POST['name'];
      $phone    	= $_POST['phone'];
      $email	    = $_POST['email'];
      $lab_pic      = $_POST['lab_pic'];
      $user_type    = $_POST['user_type'];
      $photo        = $_POST['photo'];

		if(move_uploaded_file($_FILES['photo']['tmp_name'],'photo/'.$_FILES['photo']['name'])) {
	    	$user_photo=$_FILES['photo']['name'];
		} else {
		    $user_photo=$_POST['user_photo'];
		}
	    
	    $sql = "INSERT INTO user_pic (id_pic, username, password, name, phone, email, lab_pic, user_type) VALUES (null, '$username', '$password', '$name', '$phone', '$email', '$lab_pic', '$user_type')";
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

	<title>Add User P.I.C</title>

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header navbar navbar-fixed-top" style="background-color: #D3D3D3; height: 100px;">
			<div class="container">
				<div class="row">
					<div class="col-md-2">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="index.php"><img id="logo" src="images/DDS-telkom.png" width="60" alt="Worthy"></a>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-10">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-left" style="padding-left: 10px;">
												<li><a href="index.php" style="font-weight: bold;">Home</a></li>
												<li><a href="research-result.php" style="font-weight: bold;">Research Result</a></li>
												<li><a href="" style="font-weight: bold;">Edit User</a></li>
												<li><a href="prototype.php" style="font-weight: bold;;">Prototype</a></li>
												<li><a href="#contact" style="font-weight: bold;">Contact Us</a></li>
											</ul>

											<ul class="nav navbar-nav navbar-right">
												<!-- logo -->
												<div class="logo smooth-scroll">
													<a href="index.php"><img id="logo" src="images/logo-telkom.png" width="90" alt="Worthy"></a>
												</div>

											</ul>
										</div>

								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->


		<div class="space"></div>
		
		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix" data-animation-effect="fadeIn" style="background-color: white;">
			<div align="center" class="container">
				<div class="row">

				<h1 id="submission" class="title text-center" style="font-weight: bold; margin-top: 10px;">Add User P.I.C</h1>
				<div class="space"></div>

				<!-- Form Upload -->
			<div class="wrap-login100 p-l-110 p-r-110 p-t-10 p-b-10" style="background-color: #D3D3D3;">

				<form class="login100-form validate-form flex-sb flex-w" role="form" method="post" enctype="multipart/form-data" action="">
					
					<div class="p-t-10 p-b-9">
						<span class="txt1" style="font-weight: bold; font-size: 14px;">Name</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" style="height: 30px; font-size: 14px;" type="text" name="name" id="name" Placeholder="Your Name" required="">
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-10 p-b-9">
						<span class="txt1" style="font-weight: bold; font-size: 14px;">Username</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" style="height: 30px; font-size: 14px;" type="text" name="username" id="username" Placeholder="Username" required="">
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-10 p-b-9">
						<span class="txt1" style="font-weight: bold; font-size: 14px;">Password</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" style="height: 30px; font-size: 14px;" type="password" name="password" id="password" Placeholder="Password" required="">
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-10 p-b-9">
						<span class="txt1" style="font-weight: bold; font-size: 14px;">Phone</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" style="height: 30px; font-size: 14px;" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" name="phone" id="phone" Placeholder="Your Phone" required="">
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-10 p-b-9">
						<span class="txt1" style="font-weight: bold; font-size: 14px;">Email</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" style="height: 30px; font-size: 14px;" type="text" name="email" id="email" Placeholder="Your Email" required="">
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-10 p-b-9">
						<span class="txt1" style="font-weight: bold; font-size: 14px;">Lab P.I.C</span>
					</div>
					<div class="wrap-input100 validate-input">
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
								<span class="focus-input100"></span>
					</div>

					<div class="p-t-10 p-b-9">
						<span class="txt1" style="font-weight: bold; font-size: 14px;">Usertype</span>
					</div>
					<div class="wrap-input100 validate-input">
						<select name="user_type" required="" class="text-field w-select">
							<option value="">-- Pilih Usertype --</option>
							<option value="User P.I.C">User P.I.C</option>
							<option value="Manager P.I.C">Manager P.I.C</option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-10 p-b-9">
						<span class="txt1" style="font-weight: bold; font-size: 14px;">Photo</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input readonly="" class="input100" style="height: 30px; font-size: 14px;" type="file" name="photo" id="photo" required="">
						<span class="focus-input100"></span>
					</div>

					<div style="padding-top: 10px; padding-bottom: 20px;" class="container-login100-form-btn m-t-17">
						<button class="btn btn-primary btn-lg btn-block" type="submit" value="Upload" name="Update" style="font-weight: bold; height: 40px;"> EDIT </button>
					</div>

				</form>
			</div>
			<!-- End Form Upload -->

		</div>
	</div>
</div>
		<!-- section end -->

</body>

</html>
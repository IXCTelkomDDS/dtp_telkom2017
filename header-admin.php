<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

	session_start();

	include "../koneksi_db.php";
	include "../check_session_admin.php";

	$sql_pic = "SELECT * FROM user_pic WHERE user_type = 'Admin DTP' GROUP BY id_pic";
	$result_pic = mysqli_query($connect, $sql_pic);

?>


<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/linearicons/style.css">
	<link rel="stylesheet" href="vendor/chartist/css/chartist-custom.css">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="css/main.css">

	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="css/demo.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!-- ICONS -->
	<link rel="icon" type="image/png" sizes="96x96" href="images/DDS-telkom.png">

	<!-- bootstrap pagination -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- Pop up css --> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" style="margin-right: 60px;">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><?php echo $_SESSION['username'];?></span><i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="" data-toggle="modal" data-target="#myModal3" onclick="showDetails3(this);"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>


						<!-- displaying pop up that will show details -->
						<!-- modal -->
						<div class="modal fade" id="myModal3" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title" id="myModalLabel3">Profile of User P.I.C</h4>
						            </div>

								<div class="modal-body">
								    <!-- display data in pop up -->

								    <?php while($data_pic = mysqli_fetch_array($result_pic)) { ?>

								    <?php if($data_pic['username'] == $_SESSION['username']) { ?>

								    <br>

								    <p align="center">Name       : <?php echo $data_pic['name_pic'];?></p>
								    <p align="center">Phone      : <?php echo $data_pic['phone'];?></p>
								    <p align="center">Email      : <?php echo $data_pic['email'];?></p>
								    <p align="center">Lab P.I.C  : <?php echo $data_pic['lab_pic'];?></p>	

								    <br>

								    <div class="text-center"><a href="update_user.php?id=<?php echo $data_pic['id_pic'];?>" class="btn btn-primary">Edit Profile</a></div>

								    <?php } ?>

								    <?php } ?>

						        </div>

						   		</div>
						    </div>
						</div>
						<!-- End Modal -->


								<li><a href="index.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="home_admin.php" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>P.I.C DTP IRS</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="user-pic.php" class="">User P.I.C</a></li>
									<li><a href="manager-pic.php" class="">Manager P.I.C</a></li>
									<li><a href="admin-dtp.php" class="">Admin DTP</a></li>
								</ul>
							</div>
						</li>

						<li>
							<a href="#subPages2" data-toggle="collapse"><i class="lnr lnr-file-empty"></i> <span>Documents Lab IRS</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="review.php" class="">Review</a></li>
									<li><a href="standardization.php" class="">Doc. Standardization</a></li>
									<li><a href="#subPages3" data-toggle="collapse" class="collapsed"> <span>Prototype</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
										<div id="subPages3" class="collapse ">
										<ul class="nav">
											<li><a href="prototype.php" class="">Prototype</a></li>
											<li><a href="featured.php" class="">Featured</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
						
						<li><a href="log-admin.php" class=""><i class="lnr lnr-alarm"></i> <span>Log Activity Admin</span></a></li>
						
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->



<!-- pop up details -->
<script type="text/javascript">
    function showDetails3(button) {
        $.ajax({
            success: function(response) {
            }
        });
    }
</script>
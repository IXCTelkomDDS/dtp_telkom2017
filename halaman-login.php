<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php
    session_start();

  include "koneksi_db.php";
  include "header.php";
?>

   <title>Halaman Login</title>

<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="#" class="w-nav-brand"><img src="images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="w-nav-menu">
<a href="index.html" id="home" class="navlink w-nav-link">Home</a>
<a href="#daftar-kajian" id="daftar-kajian" class="navlink w-nav-link">Daftar Kajian</a>
<a href="halaman-upload.php" id="doc.submission" class="navlink w-nav-link">Doc. Submission</a>

<!-- <a href="chart.php" id="Lab Statistics" class="navlink w-nav-link">Lab Statistics</a> -->
<a href="#End-Section" class="navlink w-nav-link">Customer Care</a>
</nav>
     <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div id="daftar-kajian" class="flex-wrapper">
      
    <div class="main-content">
      <h1 class="heading-2 mobile">Form Login Responsible of P.I.C</h1>
      <div class="container-7 w-container">

        <div class="form-block w-form">
          
			<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="acc_login.php" id="wf-form-Input-Form" name="form-upload" data-name="Input Form">
			    
			    <div class="imgcontainer">
                	<img src="images/login2.png" class="avatar">
                </div>
		  
				<label for="username" class="field-label" style="width:300px; color:black;">Username</label>
					<input type="text" class="text-field w-input" autofocus="true" name="username" data-name="username" placeholder="Enter Username" id="username" required="">
					
				<label for="password" class="field-label" style="width:300px; color:black;">Password</label>
					<input type="password" class="text-field w-input" autofocus="true" name="password" data-name="password" placeholder="Enter Password" id="password" required="">
			
			<div>
				<input style="width:100px;" type="submit" value="Login" name="Submit" data-wait="Please wait..." class="button w-button">
				&nbsp; &nbsp;
				<a href="halaman-signup.php"><input type="button" style="width:110px;" value="Sign Up" class="button w-button"></a>
			</div>
		
			</form>
			
		</div>

</div>
 
    </div>

      </div>
    </div>
    </div>
    
<?php
    include "footer.php";
?>

<style>
.imgcontainer {
    text-align: center;
	margin: 24px 0 12px 0;
	position: relative;
}

.avatar {
	width: 100px;
	height: 100px;
	border-radius: 50%;
}
</style>
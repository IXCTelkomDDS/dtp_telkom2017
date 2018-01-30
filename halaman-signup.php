<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>



<?php

  include "koneksi_db.php";

  include "header.php";

?>



   <title>Halaman Sign Up</title>



<body>

  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">

    <div class="container-7 w-container"><a href="#" class="w-nav-brand"><img src="images/logo-telkom.png" width="80.5"></a>

      <nav role="navigation" class="w-nav-menu">

<a href="index.html" id="home" class="navlink w-nav-link">Home</a>

<a href="halaman-view.php" id="daftar-kajian" class="navlink w-nav-link">Daftar Kajian</a>

<a href="halaman-login.php" id="doc.submission" class="navlink w-nav-link">Doc. Submission</a>



<!-- pop up login-->

<!-- <button class="navlink w-nav-link" data-toggle="modal" data-target="#myModal2" onclick="showform(this);" style="background-color:#f90;">Lab.</button> -->

<a href="#End-Section" class="navlink w-nav-link">Customer Care</a>

</nav>

     <div class="w-nav-button">

        <div class="w-icon-nav-menu"></div>

      </div>

    </div>

  </div>

  <div id="daftar-kajian" class="flex-wrapper">

      

    <div class="main-content">

      <h1 class="heading-2 mobile">Form Sign Up Responsible of P.I.C</h1>

      <div class="container-11 w-container">



        <div class="form-block w-form">

          

			<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="act_signup.php" id="wf-form-Input-Form" name="form-upload" data-name="Input Form">

			    

			    <div class="imgcontainer">

                	<img src="images/login2.png" class="avatar">

                </div>

		  

				<label for="username" class="field-label" style="width:300px; color:black;">Username</label>

					<input type="text" class="text-field w-input" autofocus="true" name="username" data-name="username" placeholder="Enter Username" id="username" required="">

					

				<label for="password" class="field-label" style="width:300px; color:black;">Password</label>

					<input type="password" class="text-field w-input" autofocus="true" name="password" data-name="password" placeholder="Enter Password" id="password" required="">

					

				<label for="Lab" class="field-label-4" style="width:300px; color:black;">Lab</label>

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

					

				<label for="user_type" class="field-label" style="width:300px; color:black;">Usertype</label>

					<input readonly type="user_type" class="text-field w-input" autofocus="true" name="user_type" data-name="user_type" value="User P.I.C" placeholder="User P.I.C" id="user_type" required="">

			

			<div>

				<input style="width:100px;" type="submit" value="Sign Up" name="Submit2" data-wait="Please wait..." class="button w-button">

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

	margin: 20px 0 10px 0;

	position: relative;

}



.avatar {

	width: 100px;

	height: 100px;

	border-radius: 50%;

}

</style>
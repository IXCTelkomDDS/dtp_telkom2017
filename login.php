<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>
 
<?php

  include "koneksi_db.php"; 

  $username = $_POST['username'];
  $password = $_POST['password'];

    if(isset($_POST['Login'])) {
      $query = "SELECT * FROM user_pic WHERE user_type = 'User P.I.C' AND username = '$username' AND password = '$password'";
      $result = mysqli_query($connect, $query);
      $found = mysqli_num_rows($result);
      
      if($found == 1) {

         session_start();

          $data = mysqli_fetch_array($result);

              $_SESSION['username'] = $data['username'];
              $_SESSION['password'] = $data['password'];
              $_SESSION['lab_pic'] = $data['lab_pic'];

          if ($_SESSION['Login DTP'] = TRUE) {
          header('location: user_pic/index.php');
      } else {
          header('location: login.php');
      }
    }
  }  


?>

<!DOCTYPE html>
<html data-wf-page="59fd0c1ae534be0001f52c87" data-wf-site="59fd0c1ae534be0001f52c86">

<head>
  <title>Login User P.I.C</title>

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
    <div class="container-login100" style="background-image: url(images/logo-login.jpg);">

      <span style="font-size: 30px; color: white; margin-left: 20px; font-weight: bold">
        <marquee align="center" scrollamount="10"> Selamat Datang Di Web Digital Touch Point IRS </marquee>
      </span>

      <span style="font-size: 20px; color: white; margin-left: 30px; font-weight: bold">
       Berikut merupakan statistik upload dokumen dari masing-masing lab :
            <br>

        <?php
            $sql   = "SELECT JENIS_LAB_UPLOAD, count(JENIS_FILE_UPLOAD) AS total FROM upload_dtp GROUP BY JENIS_LAB_UPLOAD";
            $query = mysqli_query($connect, $sql);
                while($temp = mysqli_fetch_array($query)) {
                    $count_lab=$temp['JENIS_LAB_UPLOAD'];   
                    $sql_total = "SELECT JENIS_LAB_UPLOAD, count(*) AS total FROM upload_dtp WHERE JENIS_LAB_UPLOAD='$count_lab'";        
                    $query_total = mysqli_query($connect, $sql_total);
                        while($data = mysqli_fetch_array($query_total)) {
                           $total = $data['total'];                 
                        }             

        ?>

          <?php echo $count_lab; ?> :
          <?php echo "<font color='yellow'> $total </font>" ?>

          &nbsp;

        <?php 
          }  
        ?>      

        <br>
        <br>
        Bagi P.I.C yang bertanggung jawab, harap segera melakukan
        <br>
        Sign Up untuk dapat melakukan upload dokumen.
        <br>
        Terima kasih :)
        <br>
        <br>

          </span>


      <div class="wrap-login100">

      <div>
        <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
          <span class="login100-form-title-1">
            Form Login Responsible of P.I.C
          </span>
        </div>

        <form class="login100-form validate-form" role="form" method="post" enctype="multipart/form-data" action="">

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" placeholder="Enter username">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Enter password">
            <span class="focus-input100"></span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" value="Login DTP" name="Login">
              Login
            </button>
            <!-- &nbsp;
            <a href="signup.php">
            <button class="login100-form-btn" type="button" value="Sign Up" name="SignUp">
              Sign Up
            </button>
            </a> -->
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

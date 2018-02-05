<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

     include "koneksi_db.php";

    if(isset($_POST['SignUp'])) {
      $username     = $_POST['username'];
      $password     = $_POST['password'];
      //$MD5          = md5[$password]; //merubah variabel $ubah ke MD5
      $lab_pic      = $_POST['lab_pic'];
      //$user_type    = $_POST['User P I C'];

        //pemeriksaan input selesai, bila benar langsung jalankan perintah selanjutnya
        $sql = "INSERT INTO user_pic VALUES ('', '$username', '$password', '$lab_pic', 'User P.I.C')";
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

  <?php } ?>
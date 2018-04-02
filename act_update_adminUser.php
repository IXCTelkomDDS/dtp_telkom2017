<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

  include "koneksi_db.php";

    if(isset($_POST['Update Admin'])) {

      $id_pic   = $_POST['id_pic'];
      $name_pic     = $_POST['name_pic'];
      $username     = $_POST['username'];
      $password     = $_POST['password'];
      $phone      = $_POST['phone'];
      $email      = $_POST['email'];
      $lab_pic      = $_POST['lab_pic'];
      $user_type    = $_POST['user_type'];

        //pemeriksaan input selesai, bila benar langsung jalankan perintah selanjutnya
        $sql2 = "UPDATE user_pic SET name_pic = '$name_pic', username = '$username', password = '$password', phone = '$phone', email = '$email', lab_pic = '$lab_pic', user_type = '$user_type' WHERE id_pic = '$id_pic'";
        $query2 = mysqli_query($connect, $sql2);
  
        if($query2) { ?>
          <script>
            alert('Update Successful');
            location.href='admin/home.php';
          </script>

        <?php } else { ?>
          <script>
            alert('Update Failed');
            location.href='admin/update_user.php';
          </script>

      <?php } ?> 

  <?php } ?>
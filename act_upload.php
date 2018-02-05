

<?php

  include "koneksi_db.php";

if(isset($_POST['Submit'])) {
    $allowed_ext  = array('pdf', ''); //untuk tipe file
    $file_name    = $_FILES['NAMA_FILE_UPLOAD']['name'];
    //$file_ext   = strtolower(end(explode('.', $file_name)));
        $file_ext   = pathinfo($_FILES['NAMA_FILE_UPLOAD']['name'],PATHINFO_EXTENSION);
    //$file_size    = $_FILES['NAMA_FILE_UPLOAD']['size'];
    $file_tmp   = $_FILES['NAMA_FILE_UPLOAD']['tmp_name'];
    //$max_size     = 5000000; //5 MB

      $tgl_upload     = date("Y-m-d");
      $judul        = $_POST['JUDUL_UPLOAD'];
      $jenis_file     = $_POST['JENIS_FILE_UPLOAD'];
      $jenis_lab      = $_POST['JENIS_LAB_UPLOAD'];
      $deskripsi      = $_POST['DESKRIPSI_UPLOAD'];
      $nama_file      = $_POST['NAMA_FILE_UPLOAD'];
      $url          = $_POST['URL'];

      if(in_array($file_ext, $allowed_ext) === true){
        //if($file_size < 1000000){
          $nama_file = $file_name;
            move_uploaded_file($file_tmp, 'uploads/'.$nama_file);

            $sql = "INSERT INTO upload_dtp VALUES('', '$tgl_upload', '$judul', '$jenis_file', '$jenis_lab', '$deskripsi', '$nama_file', '$url')";
            $query = mysqli_query($connect,$sql);     

            if($query) { ?>
              <script>
                alert('Add Successful');
                location.href='user_pic/halaman-view.php';
              </script>
            <?php } else { ?>
              <script>
                alert('Add Failed');
                location.href='user_pic/halaman-upload.php';
              </script>
            <?php } ?>
    
    <?php } ?>
  <?php }

  else if(isset($_POST['Submit2'])) {

    $tgl_upload     = date("Y-m-d");
    $judul        = $_POST['JUDUL_UPLOAD'];
    $jenis_file     = $_POST['JENIS_FILE_UPLOAD'];
    $jenis_lab      = $_POST['JENIS_LAB_UPLOAD'];
    $deskripsi      = $_POST['DESKRIPSI_UPLOAD'];
    $nama_file      = $_POST['NAMA_FILE_UPLOAD'];
    $url          = $_POST['URL'];

      if($url != '') {
        $sql2 = "INSERT INTO upload_dtp VALUES('', '$tgl_upload', '$judul', '$jenis_file', '$jenis_lab', '$deskripsi', '$nama_file', '$url')";
        $query2 = mysqli_query($connect,$sql2);

            if($query2) { ?>
                <script>
                alert('Add Successful');
                location.href='user_pic/halaman-prototype.php';
              </script>
            <?php } else { ?>
                <script>
                alert('Add Failed');
                location.href='act_upload.php';
              </script>
            <?php } ?>    

      <?php } else { ?>
          <script>
          alert('Add Failed');
          location.href='user_pic/halaman-upload.php';
        </script>       

      <?php } ?>

    <?php } ?>
<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

  include "koneksi_db.php";

    if(isset($_POST['Submit'])) {

    $allowed_ext  = array('pdf', ''); //untuk tipe file
    $file_name    = $_FILES['NAMA_FILE_UPLOAD']['name'];
    $file_ext   = strtolower(end(explode('.', $file_name)));
    //$file_ext   = pathinfo($_FILES['NAMA_FILE_UPLOAD']['name'],PATHINFO_EXTENSION);
    //$file_size    = $_FILES['NAMA_FILE_UPLOAD']['size'];
    $file_tmp   = $_FILES['NAMA_FILE_UPLOAD']['tmp_name'];
    //$max_size     = 5000000; //5 MB

      $id_upload      = $_POST['ID_UPLOAD'];
      $tgl_upload     = date("Y-m-d");
      $judul        = $_POST['JUDUL_UPLOAD'];
      $jenis_file     = $_POST['JENIS_FILE_UPLOAD'];
      $jenis_lab      = $_POST['JENIS_LAB_UPLOAD'];
      $deskripsi      = $_POST['DESKRIPSI_UPLOAD'];
      //$nama_file      = $_POST['NAMA_FILE_UPLOAD'];
      //$url          = $_POST['URL'];

      //if($file_size > 0) {

      // Cek apakah user ingin mengubah fileya atau tidak
  if(isset($_POST['ubah_file'])) { // Jika user menceklis checkbox yang ada di form ubah, lakukan :
      // Ambil data foto yang dipilih dari form
        $file_name    = $_FILES['NAMA_FILE_UPLOAD']['name'];
        $file_tmp     = $_FILES['NAMA_FILE_UPLOAD']['tmp_name'];

        $filebaru = $file_name;
  
        // Set path folder tempat menyimpan fileya
        $path = "uploads/".$filebaru;

      if(in_array($file_ext, $allowed_ext) === true){
        //if($file_size < 1000000){
          $nama_file = $file_name;
            move_uploaded_file($file_tmp, 'uploads/'.$nama_file);

            $sql = "UPDATE upload_dtp SET TGL_UPLOAD = '$tgl_upload', JUDUL_UPLOAD = '$judul', JENIS_FILE_UPLOAD = '$jenis_file', JENIS_LAB_UPLOAD = '$jenis_lab', DESKRIPSI_UPLOAD = '$deskripsi', NAMA_FILE_UPLOAD = '$filebaru' WHERE ID_UPLOAD = '$id_upload'";
            $query = mysqli_query($connect,$sql);     

            if($query) { ?>
              <script>
                alert('Update Successful');
                location.href='user_pic/halaman-view.php';
              </script>
            <?php } else { ?>
              <script>
                alert('Update Failed');
                location.href='user_pic/halaman-edit.php';
              </script>
            <?php } ?>
    
    <?php } ?>
  <?php } else {
    $sql = "UPDATE upload_dtp SET TGL_UPLOAD = '$tgl_upload', JUDUL_UPLOAD = '$judul', JENIS_FILE_UPLOAD = '$jenis_file', JENIS_LAB_UPLOAD = '$jenis_lab', DESKRIPSI_UPLOAD = '$deskripsi' WHERE ID_UPLOAD = '$id_upload'";
    $query = mysqli_query($connect,$sql);     

            if($query) { ?>
              <script>
                alert('Update Successful');
                location.href='user_pic/halaman-view.php';
              </script>
            <?php } else { ?>
              <script>
                alert('Update Failed');
                location.href='user_pic/halaman-edit.php';
              </script>
            <?php } ?>

    ?>
<?php } ?>

<?php }

  else if(isset($_POST['Submit2'])) {

    $id_upload      = $_POST['ID_UPLOAD'];
    $tgl_upload     = date("Y-m-d");
    $judul        = $_POST['JUDUL_UPLOAD'];
    $jenis_file     = $_POST['JENIS_FILE_UPLOAD'];
    $jenis_lab      = $_POST['JENIS_LAB_UPLOAD'];
    $deskripsi      = $_POST['DESKRIPSI_UPLOAD'];
    //$nama_file      = $_POST['NAMA_FILE_UPLOAD'];
    $url          = $_POST['URL'];

        $sql2 = "UPDATE upload_dtp SET TGL_UPLOAD = '$tgl_upload', JUDUL_UPLOAD = '$judul', JENIS_FILE_UPLOAD = '$jenis_file', JENIS_LAB_UPLOAD = '$jenis_lab', DESKRIPSI_UPLOAD = '$deskripsi', URL = '$url' WHERE ID_UPLOAD = '$id_upload'";
        $query2 = mysqli_query($connect,$sql2);

            if($query2) { ?>
                <script>
                alert('Update Successful');
                location.href='user_pic/halaman-prototype.php';
              </script>
            <?php } else { ?>
                <script>
                alert('Update Failed');
                location.href='user_pic/halaman-edit.php';
              </script>
            <?php } ?>    

      <?php } else { ?>
          <script>
          alert('Update Failed');
          location.href='user_pic/halaman-edit.php';
        </script>       

    <?php } ?>
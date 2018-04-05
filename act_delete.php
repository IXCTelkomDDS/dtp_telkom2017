<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

include "koneksi_db.php";

   if($_GET) {
     $query = "DELETE FROM upload_dtp WHERE ID_UPLOAD = '$_GET[id]'";
     $delete = mysqli_query($connect, $query);

      	if($delete) { ?>
            <script>
                alert('Delete Successful');
                location.href='user_pic/halaman-view.php';
            </script>
        <?php } else { ?>
            <script>
                alert('Delete Failed');
                location.href='user_pic/halaman-view.php';
            </script>
        <?php } ?>

    <?php } ?>
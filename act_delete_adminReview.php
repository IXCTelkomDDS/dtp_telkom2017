<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

include "koneksi_db.php";

   if($_GET) {
     $query = "DELETE FROM upload_dtp WHERE ID_UPLOAD = '$_GET[id]'";
     $delete = mysqli_query($connect, $query);

      	if($delete) { ?>
            <script>
                alert('Delete Successful');
                location.href='admin/review.php';
            </script>
        <?php } else { ?>
            <script>
                alert('Delete Failed');
                location.href='admin/review.php';
            </script>
        <?php } ?>

    <?php } ?>


<?php
    if($_GET) {
     $query2 = "DELETE FROM upload_dtp WHERE ID_UPLOAD = '$_GET[id2]'";
     $delete2 = mysqli_query($connect, $query2);

        if($delete) { ?>
            <script>
                alert('Delete Successful');
                location.href='admin/standardization.php';
            </script>
        <?php } else { ?>
            <script>
                alert('Delete Failed');
                location.href='admin/standardization.php';
            </script>
        <?php } ?>

<?php } ?>


<?php
    if($_GET) {
     $query3 = "DELETE FROM upload_dtp WHERE ID_UPLOAD = '$_GET[id3]'";
     $delete3 = mysqli_query($connect, $query3);

        if($delete3) { ?>
            <script>
                alert('Delete Successful');
                location.href='admin/prototype.php';
            </script>
        <?php } else { ?>
            <script>
                alert('Delete Failed');
                location.href='admin/prototype.php';
            </script>
        <?php } ?>

    <?php } ?>
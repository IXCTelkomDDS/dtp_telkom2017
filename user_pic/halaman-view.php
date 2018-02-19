<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

session_start();

  include "../koneksi_db.php";
  include "../header.php";
  include "../pagination1.php";
  include "../check_session.php";

	//mengatur variabel reload dan sql
	if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']<>""){
		//if search found
		$keyword = $_REQUEST['keyword'];
		$reload = "halaman-view.php?pagination=true&keyword=$keyword";
		$sql = "SELECT ID_UPLOAD, TGL_UPLOAD, JUDUL_UPLOAD, JENIS_FILE_UPLOAD, JENIS_LAB_UPLOAD, DESKRIPSI_UPLOAD, NAMA_FILE_UPLOAD FROM upload_dtp WHERE JENIS_FILE_UPLOAD != 'Prototype' AND JENIS_FILE_UPLOAD LIKE '%$keyword%' || JENIS_LAB_UPLOAD LIKE '%$keyword%' || JUDUL_UPLOAD LIKE '%$keyword%' || DESKRIPSI_UPLOAD LIKE '%$keyword%' || NAMA_FILE_UPLOAD LIKE '%$keyword%' ORDER BY ID_UPLOAD ASC";
		$result = mysqli_query($connect, $sql);
	} else {
		//if search not found
		$reload = "halaman-view.php?pagination=true";
		$sql = "SELECT ID_UPLOAD, TGL_UPLOAD, JUDUL_UPLOAD, JENIS_FILE_UPLOAD, JENIS_LAB_UPLOAD, DESKRIPSI_UPLOAD, NAMA_FILE_UPLOAD FROM upload_dtp WHERE JENIS_FILE_UPLOAD != 'Prototype' ORDER BY ID_UPLOAD ASC";
		$result = mysqli_query($connect, $sql);
	}

?>

   <title>Halaman View</title>

<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="#" class="w-nav-brand"><img src="../images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="w-nav-menu" style="font-weight: bold">
<a href="index.php" id="home" class="navlink w-nav-link">Home</a>
<a href="#daftar-kajian" id="daftar-kajian" class="navlink w-nav-link">Daftar Kajian</a>
<a href="halaman-upload.php" id="doc.submission" class="navlink w-nav-link">Doc. Submission</a>
<a href="chart.php" id="Lab Statistics" class="navlink w-nav-link">Lab Statistics</a>
<a href="#End-Section" class="navlink w-nav-link">Customer Care</a>
</nav>

     <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>

  <div id="daftar-kajian" class="flex-wrapper">
    <div class="main-content">
      <h1 class="heading-2 mobile">View Kajian &amp; Dokumen Standar</h1>
      <div class="container-11 w-container">

            <br>

            <div class="row">
                <div class="col-lg-7">
                    <!--muncul jika ada pencarian (tombol reset pencarian)-->
                    <?php
						if($_REQUEST['keyword']<>""){
                    ?>
                        <a class="btn btn-default btn-outline" href="halaman-view.php">Reset Search</a>
                    <?php
                    }
                    ?>
                </div>

                <div class="col-lg-5 text-right">
                    <form method="post" action="halaman-view.php">
                        <div class="form-group input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="Search" value="<?php echo $_REQUEST['keyword'];?>">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <?php
            	include "data-view.php";
            ?>

      </div>
    </div>
    </div>

<?php
    include "../footer.php";
?>

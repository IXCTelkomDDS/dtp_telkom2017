<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php
  include "../koneksi_db.php";
  include "../header.php";
  include "../pagination1.php";

		$reload = "ban-unggulan.php?pagination=true";
		$sql = "SELECT * FROM upload_dtp WHERE JENIS_FILE_UPLOAD = 'Prototype' AND JENIS_LAB_UPLOAD = 'BAN' AND UNGGULAN = 'Unggulan' ORDER BY ID_UPLOAD ASC";
		$result = mysqli_query($connect, $sql);

    //pagination config start
    $rpp = 5; //jml record per halaman
    $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
    $tcount = mysqli_num_rows($result);
    $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; //total page, last page number
    $count = 0;
    $i = ($page-1)*$rpp;
    $no_urut = ($page-1)*$rpp;
    //pagination config end

?>

  <title>BAN Produk Unggulan</title>
  
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="#" class="w-nav-brand"><img src="../images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="w-nav-menu" style="font-weight: bold"><a href="../index.php" id="home" class="navlink w-nav-link">Home</a><a href="iot-page.php" id="about" class="navlink w-nav-link">About BAN</a><a href="#daftar-kajian" id="about" class="navlink w-nav-link">Daftar Produk Unggulan</a><a href="#End-Section" class="navlink w-nav-link">Customer Care</a></nav>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div id="daftar-kajian" class="flex-wrapper">
    
    <div class="main-content">
      <h1 class="heading-2 mobile">Daftar Produk Unggulan Lab Broadband Access Network</h1>
      <div class="container-11 w-container">
 

          <?php 
            include "data-unggulan.php";
          ?>


      </div>
    </div>
    </div>

<?php
    include "../footer.php";
?>

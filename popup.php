<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php
  include "koneksi_db.php";
  include "header.php";
  
?>

<title>IOT Kajian</title>
  
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="#" class="w-nav-brand"><img src="images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="w-nav-menu"><a href="index.html" id="home" class="navlink w-nav-link">Home</a><a href="iot-page.html" id="about" class="navlink w-nav-link">About ISR</a><a href="#daftar-kajian" id="about" class="navlink w-nav-link">Daftar Kajian</a><a href="#End-Section" class="navlink w-nav-link">Customer Care</a></nav>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div id="daftar-kajian" class="flex-wrapper">
    
    <div class="main-content">
      <h1 class="heading-2 mobile">Daftar Kajian Lab<br>Infrastructure Service<br>Research</h1>
      <div class="container-11 w-container">
        <div class="div-block-9">
            
            <div class="popup">
  <div id="box">
   <a class="close" href="#">X</a>
    
    
   <div class="boxdetail">
    <h1>Detil Mahasiswa Nim <em class="nimstudent">111</em></h1>
    <label>Nama : <em class="namastudent"></em></label>
    <label>Tempat Lahir : <em class="tempatstudent"></em></label>
    <label>Tanggal Lahir : <em class="tanggalstudent"></em></label>
   </div>
  </div>
   
 </div>
  
 <?php 
  $mahasiswanim = array(1105004,1105096);
 ?>
  
 <div id="listmahasiswa">
  <h1>Daftar Mahasiswa</h1>
  <p>Berikut adalah daftar NIM Mahasiwa, silahkan klik untuk melihat detilnya</p>
   
  <?php foreach($mahasiswanim as $record):?>
   <a href="#" name="<?php echo $record;?>" class="linknim"><?php echo $record;?></a>
  <?php endforeach;?>
   
 </div>

        </div>
      </div>
    </div>
  </div>
 
 
 <?php
    include "footer.php";
 ?>
<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php
  include "koneksi_db.php";
  include "header.php";
	  
	$sql="SELECT * FROM user_pic GROUP BY id_pic ASC";
	$result=mysqli_query($connect, $sql);
?>

  <title>Halaman P.I.C</title>
  
<body class="body-3">
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="#" class="w-nav-brand"><img src="images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="w-nav-menu">
<a href="index.html" id="home" class="navlink w-nav-link">Home</a>
<a href="halaman-view.php" id="about" class="navlink w-nav-link">Daftar Kajian</a>
<a href="halaman-prototype.php" id="home" class="navlink w-nav-link">Prototype</a>
<a href="chart.php" id="Lab Statistics" class="navlink w-nav-link">Lab Statistics</a>
<a href="#End-Section" class="navlink w-nav-link">Customer Care</a>
</nav>
     <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div id="pic" class="flex-wrapper">
      
    <div class="main-content">
      <h1 class="heading-2 mobile">Details of the responsible P.I.C</h1>
      <div class="container-11 w-container">
          
          <div class="table-responsive">
           
        <table class="table table-bordered">

    <tr>
      <th><div align="center">NO.</div></th>
	  <th><div align="center">NAMA</div></th>
	  <th><div align="center">LAB</div></th>
	  <th><div align="center">NO. TELP</div></th>
   </tr>
   
   <?php
		while($data = mysqli_fetch_array($result)) { //data di extract menggunakan "fetch array", kemudian ditampung di result menjadi data, setelah itu ditampilkan di tabel// ?>
   
   <tr>
      <td><div align="center"><?php echo ++$no_urut;?></div></td>
	  <td><div align="center"><?php echo $data['nama_pic'];?></div></td>
	  <td><div align="center"><?php echo $data['lab_pic'];?></div></td>
	  <td><div align="center"><?php echo $data['no_tel_pic'];?></div></td>
    </tr>
   
   <?php } ?>
 
 </table>
 
    </div>

      </div>
    </div>
    </div>

<?php
    include "footer.php";
?>
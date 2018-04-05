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
		$reload = "halaman-prototype.php?pagination=true&keyword=$keyword";
		$sql2 = "SELECT ID_UPLOAD, TGL_UPLOAD, JUDUL_UPLOAD, JENIS_FILE_UPLOAD, JENIS_LAB_UPLOAD, DESKRIPSI_UPLOAD, URL FROM upload_dtp WHERE JENIS_FILE_UPLOAD = 'Prototype' AND JENIS_LAB_UPLOAD LIKE '%$keyword%' || JUDUL_UPLOAD LIKE '%$keyword%' || DESKRIPSI_UPLOAD LIKE '%$keyword%' || URL LIKE '%$keyword%' ORDER BY ID_UPLOAD ASC";
		$result2 = mysqli_query($connect, $sql2);
	} else {
		//if search not found
		$reload = "halaman-prototype.php?pagination=true";
		$sql2 = "SELECT * FROM upload_dtp WHERE JENIS_FILE_UPLOAD = 'Prototype' ORDER BY ID_UPLOAD ASC";
		$result2 = mysqli_query($connect, $sql2);
	}

	//pagination config start
	  $rpp = 5; //jml record per halaman
	  $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
	  $tcount = mysqli_num_rows($result2);
	  $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; //total page, last page number
	  $count = 0;
	  $i = ($page-1)*$rpp;
    $no_urut = ($page-1)*$rpp;
  //pagination config end
?>

   <title>Halaman Prototype</title>

<body class="body-3">
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="#" class="w-nav-brand"><img src="../images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="w-nav-menu" style="font-weight: bold">
<a href="index.php" id="home" class="navlink w-nav-link">Home</a>
<a href="halaman-view.php" id="home" class="navlink w-nav-link">Daftar Kajian</a>
<a href="halaman-upload.php" id="doc.submission" class="navlink w-nav-link">Doc. Submission</a>
<a href="#prototype" id="prototype" class="navlink w-nav-link">Prototype</a>
<a href="#End-Section" class="navlink w-nav-link">Customer Care</a>
</nav>
         
     <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>

  <div id="prototype" class="flex-wrapper">
    <div class="main-content">
      <h1 class="heading-2 mobile">View Prototype</h1>
      <div class="container-11 w-container">         

            <br>          

            <div class="row">
                <div class="col-lg-7">
                    <!--muncul jika ada pencarian (tombol reset pencarian)-->
                    <?php
						if($_REQUEST['keyword']<>""){
                    ?>
                        <a class="btn btn-default btn-outline" href="halaman-prototype.php">Reset Search</a>
                    <?php
                    }
                    ?>
                </div>

                <div class="col-lg-5 text-right">
                    <form method="post" action="halaman-prototype.php">
                        <div class="form-group input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="Search" value="<?php echo $_REQUEST['keyword'];?>">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>       

        <div class="table-responsive"> 

        <table class="table table-bordered">

    <tr>
      <th><div align="center">NO.</div></th>
  	  <th><div align="center">JUDUL</div></th>
  	  <th><div align="center">TGL. UPLOAD</div></th>
  	  <th><div align="center">JENIS DOKUMEN</div></th>
  	  <th><div align="center">LAB</div></th>
  	  <th><div align="center">DESKRIPSI</div></th>
  	  <th><div align="center">URL</div></th>
      <th><div align="center">ACTION</div></th>
   </tr>

   <?php
		while(($count<$rpp) && ($i<$tcount)){
			mysqli_data_seek($result2, $i);
			$data = mysqli_fetch_array($result2); //data di extract menggunakan "fetch array", kemudian ditampung di result menjadi data, setelah itu ditampilkan di tabel// ?>
   
   <tr>
      <td><div align="center"><?php echo ++$no_urut;?></div></td>
  	  <td><div align="center"><?php echo $data['JUDUL_UPLOAD'];?></div></td>
  	  <td><div align="center"><?php echo $data['TGL_UPLOAD'];?></div></td>
  	  <td><div align="center"><?php echo $data['JENIS_FILE_UPLOAD'];?></div></td>
  	  <td><div align="center"><?php echo $data['JENIS_LAB_UPLOAD'];?></div></td>
  	  <td><div align="center"><?php echo $data['DESKRIPSI_UPLOAD'];?></div></td>
  	  <td><div align="center"><?php echo '<a target="_blank" class="link-4" href = " '.$data['URL'].'">'.$data['URL'].'<a>';?></td>

        <?php

      if(($data['JENIS_LAB_UPLOAD'] == $_SESSION['lab_pic']) || ($_SESSION['username'] == 'admin')) { //jika lab pic = lab upload or username = admin ?>

    <td width="95px"><div align="center">
        <a href="halaman-edit.php?id=<?php echo $data['ID_UPLOAD'];?>" style="color:blue">Edit</a>
          &nbsp;
        <a href="../act_delete2.php?id2=<?php echo $data['ID_UPLOAD'];?>" style="color:blue">Delete</a>
    </div></td>

      <?php } else if($data['JENIS_LAB_UPLOAD'] != $_SESSION['lab_pic']) { ?>

    <td width="95px"><div align="center">
        <a href="#" style="color:blue">Edit</a>
          &nbsp;
        <a href="#" style="color:blue">Delete</a>
    </div></td>

      <?php } ?>

   </tr>
   
   <?php 
		$i++;
		$count++;
    }
	?>
 
 </table>

    </div>

		<div align="center"><?php echo paginate_one($reload, $page, $tpages);?></div>

      </div>
    </div>
    </div>

<?php
    include "../footer.php";
?>
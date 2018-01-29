<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

  include "koneksi_db.php";
  include "header.php";
  include "pagination1.php";
	  
	//mengatur variabel reload dan sql
	if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']<>""){
		//if search found
		$keyword = $_REQUEST['keyword'];
		$reload = "halaman-view.php?pagination=true&keyword=$keyword";
		$sql = "SELECT ID_UPLOAD, TGL_UPLOAD, JUDUL_UPLOAD, JENIS_FILE_UPLOAD, JENIS_LAB_UPLOAD, DESKRIPSI_UPLOAD, NAMA_FILE_UPLOAD FROM upload_dtp WHERE JENIS_FILE_UPLOAD != 'Prototype' AND JENIS_FILE_UPLOAD LIKE '%$keyword%' || JENIS_LAB_UPLOAD LIKE '%$keyword%' || JUDUL_UPLOAD LIKE '%$keyword%' ORDER BY ID_UPLOAD ASC";
		$result = mysqli_query($connect, $sql);
	} else {
		//if search not found
		$reload = "halaman-view.php?pagination=true";
		$sql = "SELECT ID_UPLOAD, TGL_UPLOAD, JUDUL_UPLOAD, JENIS_FILE_UPLOAD, JENIS_LAB_UPLOAD, DESKRIPSI_UPLOAD, NAMA_FILE_UPLOAD FROM upload_dtp WHERE JENIS_FILE_UPLOAD != 'Prototype' ORDER BY ID_UPLOAD ASC";
		$result = mysqli_query($connect, $sql);
	}

	//pagination config start
	  $rpp = 5; //jml record per halaman
	  $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
	  $tcount = mysqli_num_rows($result);
	  $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; //total page, last page number
	  $count = 0;
	  //$i = ($page * $rpp) - 1;
	  $i = ($page-1)*$rpp;
      $no_urut = ($page-1)*$rpp;
	  //pagination config end
?>

   <title>Halaman View</title>

<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="#" class="w-nav-brand"><img src="images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="w-nav-menu">
<a href="index.html" id="home" class="navlink w-nav-link">Home</a>
<a href="#daftar-kajian" id="daftar-kajian" class="navlink w-nav-link">Daftar Kajian</a>
<a href="halaman-upload.php" id="doc.submission" class="navlink w-nav-link">Doc. Submission</a>

<!-- pop up login-->
<!-- <button class="navlink w-nav-link" data-toggle="modal" data-target="#myModal2" onclick="showform(this);" style="background-color:#f90;">Lab.</button> -->

<a href="halaman-login.php" id="doc.submission" class="navlink w-nav-link">Lab</a>

<!-- <a href="chart.php" id="Lab Statistics" class="navlink w-nav-link">Lab Statistics</a> -->
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
                            <input type="text" name="keyword" class="form-control" placeholder="Jenis Dokumen Or Lab" value="<?php echo $_REQUEST['keyword'];?>">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="table-responsive">
           
        <table class="table table-bordered">

    <thead>
    <tr>
      <th><div align="center">NO.</div></th>
	  <th><div align="center">JUDUL</div></th>
	  <th><div align="center">TGL. UPLOAD</div></th>
	  <th><div align="center">JENIS DOKUMEN</div></th>
	  <th><div align="center">LAB</div></th>
	  <th><div align="center">DESKRIPSI</div></th>
	  <th><div align="center">FILE</div></th>
   </tr>
   </thead>
   
   <?php
		while(($count<$rpp) && ($i<$tcount)){
			mysqli_data_seek($result,$i);
			$data = mysqli_fetch_array($result); //data di extract menggunakan "fetch array", kemudian ditampung di result menjadi data, setelah itu ditampilkan di tabel// ?>
   
   <tbody>
   <tr>
      <td><div align="center"><?php echo ++$no_urut;?></div></td>
	  <td><div align="center"><?php echo $data['JUDUL_UPLOAD'];?></div></td>
	  <td><div align="center"><?php echo $data['TGL_UPLOAD'];?></div></td>
	  <td><div align="center"><?php echo $data['JENIS_FILE_UPLOAD'];?></div></td>
	  <td><div align="center"><?php echo $data['JENIS_LAB_UPLOAD'];?></div></td>
	  <td><div align="center"><?php echo $data['DESKRIPSI_UPLOAD'];?></div></td>
	
	 <?php
	     
	  $dir = "uploads/"; // Directory where files are stored
        
		if ($dir_list = opendir($dir)) {
			while($file = readdir($dir_list)) {
		}

       // if($data['STATUS_FILE_UPLOAD'] == 'Public') {
            
            if($file!='.' && $file!='..' && $data['NAMA_FILE_UPLOAD']<>""){ ?>
			
				<td><div align="center"><?php echo '<a href = " '.$dir.''.$data['NAMA_FILE_UPLOAD'].'">'.$data['NAMA_FILE_UPLOAD'].'<a>'?></div></td>
				
					<?php } else { ?>
					
					<!-- displaying detail button -->
            
            <td>
                <!-- setting id upload and attaching on click listener -->
                <div align="center"><button class="btn btn-default" data-toggle="modal" data-target="#myModal" onclick="showDetails(this);">Details</button></div>
            </td>
					    
		<!-- displaying pop up that will show details -->
		
		<!-- modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    
		    <div class="modal-dialog">
		        <div class="modal-content">
		            
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                
		                <h4 class="modal-title" id="myModalLabel">Details of Responsible P.I.C</h4>
		            </div>
					    
				<div class="modal-body">
				    <!-- display data in pop up -->
				    <p>1. Nama : Moch. Suhariyanto (Manager of IXC) </p>
				    <p>No. Telp : 08122415799 </p>
				    
				    <br>
				    
				    <p>2. Nama : Fidar Adjie Laksono (Manager of BCN) </p>
				    <p>No. Telp : 08122138272 </p>
				    
				    <br>
				    
				    <p>3. Nama : I Gede Astawa (Manager of BAN) </p>
				    <p>No. Telp : 082129974691 </p>
				    
				    <br>
				    
				    <p>4. Nama : David Gunawan (Manager of CNP) </p>
				    <p>No. Telp : 081312135693 </p>
				    
				    <br>
				    
				    <p>5. Nama : Mochammad Sovan (Manager of SOB) </p>
				    <p>No. Telp : 082260000286 </p>
				    
				    <br>
				    
				    <p>6. Nama : Sri Ponco Kisworo (Manager of ISR) </p>
				    <p>No. Telp : 085220681676 </p>
				    
				    <br>
				    
				    <p>7. Nama : Hazim Ahmadi (Manager of FMC) </p>
				    <p>No. Telp : 08122355175 </p>
				</div>
				
		       </div>
		    </div>
		</div>
                
				<?php } ?>
		
		<?php } ?>
			
    </tr>
    </tbody>
    
   
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
    include "footer.php";
?>

                    
    <!-- modal pop up login -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
		    
		    <div class="modal-dialog">
		        <div class="modal-content">
		            
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                
		                <div align="center"><h4 class="modal-title" id="myModalLabel2">Login for Responsible P.I.C</h4></div>
		            </div>
		            
				    <!-- display data in pop up -->
				    <div class="modal-body">
				        
				        <form action="acc_login.php">
                			<div align="center" style="padding: 15px 20px;"><img src="images/login2.png" class="avatar" style="width:150px;"></div>
                			<div align="center"><input required="" class="text-field w-input" type="text" name="username" placeholder="Enter Username" style="width:200px;"></div>
                		    <div align="center"><input required="" class="text-field w-input" type="password" name="password" placeholder="Enter Password" style="width:200px;"></div>
                			<div align="center" style="padding: 5px 10px;"><button type="submit" name="login_button" id="login_button" value="submit_login" class="btn btn-primary" style="width:100px;">Login</button></div>
                			<div align="center" style="padding: 5px 10px;"><input type="checkbox"> Remember me
                			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                			<a href="#">Forgot Password?</a></div>
                			<div align="center" style="padding: 5px 10px;"><a href="halaman-signup.php">Sign Up</a></div>
                	    </form>
                	    
                	    <!-- <div align="center" style="padding: 10px 15px;"><button class="btn btn-default" data-toggle="modal" data-target="#myModal3" onclick="showform2(this);">Sign Up</button> -->
                		</div>
                	    
                	</div>

				</div>
			</div>
		</div>
<!-- end modal pop up login -->

<!-- pop up details -->
<script type="text/javascript">
    function showDetails(button) {
        
        $.ajax({
            success: function(response) {
            }
        });
    }
        
    function showform(button) {
        
        $.ajax({
            success: function(response) {
            }
        });
    }
    
    $(document).ready(function) {
        $('#login_button').click(function) {
            var username = $('#username').val();
            var password = $('#password').val();
            
            if(username != '' && password != '') {
                $.ajax({
                    url:"acc_login.php",
                    method:"POST",
                    data:{username:username, password:password},
                    success:function(data){
                        if(data == 'No') {
                            alert("Wrong Data");
                        } else {
                            $('#myModal2').hide();
                            location.reload();
                        }
                    }
                });
            }
        }
    }

</script>
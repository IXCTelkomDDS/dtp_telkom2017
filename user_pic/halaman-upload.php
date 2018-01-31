<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php
    
    session_start();

  include "../header.php";
  include "../koneksi_db.php";
  
  if(isset($_POST['Submit'])) {
		$allowed_ext	= array('pdf', ''); //untuk tipe file
		$file_name		= $_FILES['NAMA_FILE_UPLOAD']['name'];
		//$file_ext		= strtolower(end(explode('.', $file_name)));
       	$file_ext		= pathinfo($_FILES['NAMA_FILE_UPLOAD']['name'],PATHINFO_EXTENSION);
		//$file_size		= $_FILES['NAMA_FILE_UPLOAD']['size'];
		$file_tmp		= $_FILES['NAMA_FILE_UPLOAD']['tmp_name'];
		//$max_size	    = 5000000; //5 MB

			$tgl_upload			= date("Y-m-d");
			$judul				= $_POST['JUDUL_UPLOAD'];
			$jenis_file			= $_POST['JENIS_FILE_UPLOAD'];
			$jenis_lab			= $_POST['JENIS_LAB_UPLOAD'];
			$deskripsi			= $_POST['DESKRIPSI_UPLOAD'];
			$nama_file			= $_POST['NAMA_FILE_UPLOAD'];
			$url    			= $_POST['URL'];

			if(in_array($file_ext, $allowed_ext) === true){
				//if($file_size < 1000000){
					$nama_file = $file_name;
						move_uploaded_file($file_tmp, 'uploads/'.$nama_file);

						$sql = "INSERT INTO upload_dtp VALUES('', '$tgl_upload', '$judul', '$jenis_file', '$jenis_lab', '$deskripsi', '$nama_file', '$url')";
						$query = mysqli_query($connect,$sql);			

						if($query) { ?>
							<script>
								alert('Add Successful');
								location.href='halaman-view.php';
							</script>
						<?php } else { ?>
							<script>
								alert('Add Failed');
								location.href='halaman-upload.php';
							</script>
						<?php } ?>
		
		<?php } ?>
	<?php }

	else if(isset($_POST['Submit2'])) {

		$tgl_upload			= date("Y-m-d");
		$judul				= $_POST['JUDUL_UPLOAD'];
		$jenis_file			= $_POST['JENIS_FILE_UPLOAD'];
		$jenis_lab			= $_POST['JENIS_LAB_UPLOAD'];
		$deskripsi			= $_POST['DESKRIPSI_UPLOAD'];
		$nama_file			= $_POST['NAMA_FILE_UPLOAD'];
		$url    			= $_POST['URL'];

			if($url != '') {
				$sql2 = "INSERT INTO upload_dtp VALUES('', '$tgl_upload', '$judul', '$jenis_file', '$jenis_lab', '$deskripsi', '$nama_file', '$url')";
				$query2 = mysqli_query($connect,$sql2);

						if($query2) { ?>
						    <script>
								alert('Add Successful');
								location.href='halaman-prototype.php';
							</script>
						<?php } else { ?>
						    <script>
								alert('Add Failed');
								location.href='halaman-upload.php';
							</script>
						<?php } ?>		

			<?php } else { ?>
			    <script>
					alert('Add Failed');
					location.href='halaman-upload.php';
				</script>				

			<?php } ?>

?>
		
		<script src="../js/jquery.js"></script>
		<script>
		
		<!-- js field File -->
		
			$(document).ready(function(){
    		$("#file_info").css("display","none"); //Menghilangkan file_info2 ketika pertama kali dijalankan
        		$(".detail").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        			if ($("input[name='JENIS_FILE_UPLOAD']:checked").val() != "Prototype") { //Jika radio button selain "Prototype" dipilih maka tampilkan file_info2
            			$("#file_info").slideDown("fast"); //Efek Slide Down (Menampilkan file_info2)
        			} else {
            			$("#file_info").slideUp("fast");  //Efek Slide Up (Menghilangkan file_info2)
        			}
					if ($("input[name='JENIS_FILE_UPLOAD']:checked").val() == "Prototype" ) { //Jika radio button selain "Prototype" dipilih maka tampilkan file_info2
            			$("#file_info2").slideDown("fast"); //Efek Slide Down (Menampilkan file_info2)
        			} else {
            			$("#file_info2").slideUp("fast");  //Efek Slide Up (Menghilangkan file_info2)
        			}
     			});
     		});
			
			<!-- end js field File -->
			
			<!-- js tombol Upload -->
			
			$(document).ready(function(){
    		$("#upload").css("display","none"); //Menghilangkan tombol upload ketika pertama kali dijalankan
        		$(".detail").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        			if ($("input[name='JENIS_FILE_UPLOAD']:checked").val() != "Prototype" ) { //Jika radio button selain "Prototype" dipilih maka tampilkan file_info2
            			$("#upload").slideDown("fast"); //Efek Slide Down (Menampilkan file_info2)
        			} else {
            			$("#upload").slideUp("fast");  //Efek Slide Up (Menghilangkan file_info2)
        			}
					if ($("input[name='JENIS_FILE_UPLOAD']:checked").val() == "Prototype" ) { //Jika radio button selain "Prototype" dipilih maka tampilkan file_info2
            			$("#upload2").slideDown("fast"); //Efek Slide Down (Menampilkan file_info2)
        			} else {
            			$("#upload2").slideUp("fast");  //Efek Slide Up (Menghilangkan file_info2)
        			}
     			});
     		});

			<!-- end js tombol Upload -->
			
		</script>
		
	<title>Halaman Upload</title>
  
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="#" class="w-nav-brand"><img src="../images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="nav-menu w-nav-menu">
<a id="home" href="index.php" class="navlink w-nav-link">Home</a>
<a href="halaman-view.php" class="navlink w-nav-link">Daftar Kajian</a>
<a href="#Kajian" id="home" class="navlink w-nav-link">Doc. Submission</a>
<a href="chart.php" id="Lab Statistics" class="navlink w-nav-link">Lab Statistics</a>
<a href="#End-Section" class="navlink w-nav-link">Customer Contact</a>
</nav>
    </div>
  </div>
  <div id="Kajian" class="section-14">
    <div class="container-13 w-container">
      <h2 class="heading-2 mobile upload">Upload Kajian &amp; Dokumen Standard</h2>
      <div class="div-block-12">
	  
        <div class="form-block w-form">
          
			<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="" id="wf-form-Input-Form" name="form-upload" data-name="Input Form">
		  
				<label for="Judul" class="field-label">Judul Kajian</label>
					<input type="text" class="text-field w-input" maxlength="256" autofocus="true" name="JUDUL_UPLOAD" data-name="Judul" placeholder="Judul Kajian/Document Standard" id="Judul" required="">
					
				<label for="Jenis-Kajian-2" class="field-label-2">Jenis Dokumen</label>
				<div style="color:white">
					<input type="radio" name="JENIS_FILE_UPLOAD" value="Kajian" class="detail" required="">  Kajian &nbsp;
					<input type="radio" name="JENIS_FILE_UPLOAD" value="Dokumen Standar" class="detail" required=""> Dokumen Standar &nbsp;
					<input type="radio" name="JENIS_FILE_UPLOAD" value="Prototype" class="detail" required=""> Prototype
				</div>
				
				<br>
		
				<label for="Lab" class="field-label-4">Lab</label>
					<select name="JENIS_LAB_UPLOAD" required="" class="text-field w-select">
						<option value="">-- Pilih Lab --</option>
						<option value="IXC">Lab IXC</option>
						<option value="BAN">Lab BAN</option>
						<option value="BCN">Lab BCN</option>
						<option value="CNP">Lab CNP</option>
						<option value="FMC">Lab FMC</option>
						<option value="ISR">Lab ISR</option>
						<option value="SOB">Lab SOB</option>
					</select>
			
				<label for="Desc" class="field-label-5">Deskripsi Dokumen</label>
					<textarea rows="3" onkeypress ="return textonly(event)" class="text-field w-input" name="DESKRIPSI_UPLOAD" data-name="Deskripsi" placeholder="Deskripsi Tentang Kajian/Dokumen Standard Lab" id="Desc" required=""></textarea>
			
			<div id="file_info" style="display:none" >
				<label for="File" class="field-label-5" >File (Jenis File harus pdf)</label>
					<input type="file" name="NAMA_FILE_UPLOAD" class="form-control" data-name="File" id="File">
			</div>

			<div id="file_info2" style="display:none" >
				<label for="File" class="field-label-5">URL</label>
					<input type="text" class="text-field w-input" maxlength="256" name="URL" data-name="URL" placeholder="URL" id="url">
			</div>
			
			<br>
			
			<div id="upload" style="display:none" >
				<input type="submit" value="Upload File" name="Submit" data-wait="Please wait..." class="button w-button">
			</div>
			
			<div id="upload2" style="display:none" >
				<input onclick="Warn2();" type="submit" value="Upload URL" name="Submit2" data-wait="Please wait..." class="button w-button">
			</div>
		
			</form>
			
		</div>
			
         
        </div>
		
      </div>
    </div>
  </div>
 
 <?php
	include "footer.php";
 ?>
 
 
        <script>
			
			function Warn2() {
               var URL=document.getElementById('url');
					
					if(URL.value==''){
						alert ("Please fill the URL");
						return false;
					}
						return true;
            }
			
        </script>
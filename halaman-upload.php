<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php
  include "koneksi_db.php";
  include "header.php";
  
?>
		
		<script src="js/jquery.js"></script>
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
     		
     		/*$(document).ready(function(){
    		$("#upload").css("display","none"); //Menghilangkan tombol upload ketika pertama kali dijalankan
        		$(".detail2").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        			if ($("input[name='JENIS_FILE_UPLOAD']:checked").val() == "Kajian Private" ) { //Jika radio button selain "Prototype" dipilih maka tampilkan file_info2
            			$("#upload3").slideDown("fast"); //Efek Slide Down (Menampilkan file_info2)
        			} else {
            			$("#upload3").slideUp("fast");  //Efek Slide Up (Menghilangkan file_info2)
        			}
     			});
     		});
     		
     		$(document).ready(function(){
    		$("#upload").css("display","none"); //Menghilangkan tombol upload ketika pertama kali dijalankan
        		$(".detail3").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
        			if ($("input[name='JENIS_FILE_UPLOAD']:checked").val() == "Dokumen Standar Private" ) { //Jika radio button selain "Prototype" dipilih maka tampilkan file_info2
            			$("#upload4").slideDown("fast"); //Efek Slide Down (Menampilkan file_info2)
        			} else {
            			$("#upload4").slideUp("fast");  //Efek Slide Up (Menghilangkan file_info2)
        			}
     			});
     		});*/
     		
			<!-- end js tombol Upload -->
			
		</script>

		
	<title>Halaman Upload</title>
  
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div id="Home" class="section-12"><a href="index.html" class="brand w-nav-brand"><img src="images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="nav-menu w-nav-menu">
<a id="home" href="index.html" class="navlink w-nav-link">Home</a>
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
          
			<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="act_upload_dtp.php" id="wf-form-Input-Form" name="form-upload" data-name="Input Form">
		  
				<label for="Judul" class="field-label">Judul Kajian</label>
					<input type="text" class="text-field w-input" maxlength="256" autofocus="true" name="JUDUL_UPLOAD" data-name="Judul" placeholder="Judul Kajian/Document Standard" id="Judul" required="">
					
				<label for="Jenis-Kajian-2" class="field-label-2">Jenis Dokumen</label>
				<div style="color:white">
					<input type="radio" name="JENIS_FILE_UPLOAD" value="Kajian" class="detail" required="">  Kajian &nbsp;
					<input type="radio" name="JENIS_FILE_UPLOAD" value="Dokumen Standar" class="detail" required=""> Dokumen Standar &nbsp;
					<input type="radio" name="JENIS_FILE_UPLOAD" value="Prototype" class="detail" required=""> Prototype
					<!-- <input type="radio" name="JENIS_FILE_UPLOAD" value="Kajian Private" class="detail2" required="">  Kajian Private &nbsp;
					<input type="radio" name="JENIS_FILE_UPLOAD" value="Dokumen Standar Private" class="detail2" required=""> Dokumen Standar Private -->
				</div>
				
				<br>
				
				<!-- <label for="Jenis-Kajian-2" class="field-label-2">Status Dokumen</label>
				<div style="color:white">
					<input type="radio" name="STATUS_FILE_UPLOAD" value="Private" class="detail2" required=""> Private &nbsp;
					<input type="radio" name="STATUS_FILE_UPLOAD" value="Public" class="detail2" required=""> Public
				</div> -->
		
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
			
			<!-- <div id="upload3" style="display:none" >
				<input type="submit" value="Upload Dokumen" name="Submit3" data-wait="Please wait..." class="button w-button">
			</div>
			
			<div id="upload4" style="display:none" >
				<input type="submit" value="Upload Dokumen" name="Submit4" data-wait="Please wait..." class="button w-button">
			</div> -->
		
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

            /*function Warn() {
				var NAMA_FILE_UPLOAD=document.getElementById('File');
					
					if(NAMA_FILE_UPLOAD.value==''){
						alert ("Please fill the File");
						return false;
					}
						return true;
            }*/
			
			function Warn2() {
               var URL=document.getElementById('url');
					
					if(URL.value==''){
						alert ("Please fill the URL");
						return false;
					}
						return true;
            }
			
      </script>
<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

session_start();

  include "../header.php";
  include "../koneksi_db.php";
  include "../check_session.php";

  $query = "SELECT * FROM upload_dtp WHERE ID_UPLOAD = '$_GET[id]'";
  $result = mysqli_query($connect, $query);
  $data = mysqli_fetch_array($result);

?>
    
      
  <title>Halaman Upload</title>
  
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="#" class="w-nav-brand"><img src="../images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="nav-menu w-nav-menu" style="font-weight: bold">
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
      <h2 class="heading-2 mobile upload">Update Kajian &amp; Dokumen Standard</h2>
      <div class="div-block-12">
    
        <div class="form-block w-form">
          
      <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="../act_update.php" id="wf-form-Input-Form" name="form-upload" data-name="Input Form">
      
        <label for="Judul" class="field-label">Judul Kajian</label>
          <input type="text" class="text-field w-input" maxlength="256" autofocus="true" name="JUDUL_UPLOAD" data-name="Judul" placeholder="Judul Kajian/Document Standard" id="Judul" required="" value="<?php echo $data['JUDUL_UPLOAD'];?>">
          
        <label for="Jenis-Kajian-2" class="field-label-2">Jenis Dokumen</label>
        <div style="color:white">
          <input type="radio" name="JENIS_FILE_UPLOAD" value="Kajian" class="detail" required="" <?php echo $data['JENIS_FILE_UPLOAD']=='Kajian'?'checked="checked"':'';?>> Kajian &nbsp;
          <input type="radio" name="JENIS_FILE_UPLOAD" value="Dokumen Standar" class="detail" required="" <?php echo $data['JENIS_FILE_UPLOAD']=='Dokumen Standar'?'checked="checked"':'';?>> Dokumen Standar &nbsp;
          <input type="radio" name="JENIS_FILE_UPLOAD" value="Prototype" class="detail" required="" <?php echo $data['JENIS_FILE_UPLOAD']=='Prototype'?'checked="checked"':'';?>> Prototype
        </div>

        <br>

        <?php
          if($_SESSION['username'] == 'admin') { ?>
            <label for="Lab" class="field-label-4">Lab</label>
              <select name="JENIS_LAB_UPLOAD" required="" class="text-field w-select">
                <option value="">-- Pilih Lab --</option>
                <option value="IXC" <?php echo $data['JENIS_LAB_UPLOAD']=='IXC'?'selected="selected"':'';?>>Lab IXC</option>
                <option value="BAN" <?php echo $data['JENIS_LAB_UPLOAD']=='BAN'?'selected="selected"':'';?>>Lab BAN</option>
                <option value="BCN" <?php echo $data['JENIS_LAB_UPLOAD']=='BCN'?'selected="selected"':'';?>>Lab BCN</option>
                <option value="CNP" <?php echo $data['JENIS_LAB_UPLOAD']=='CNP'?'selected="selected"':'';?>>Lab CNP</option>
                <option value="FMC" <?php echo $data['JENIS_LAB_UPLOAD']=='FMC'?'selected="selected"':'';?>>Lab FMC</option>
                <option value="ISR" <?php echo $data['JENIS_LAB_UPLOAD']=='ISR'?'selected="selected"':'';?>>Lab ISR</option>
                <option value="SOB" <?php echo $data['JENIS_LAB_UPLOAD']=='SOB'?'selected="selected"':'';?>>Lab SOB</option>
              </select>
        
        <?php } else if ($_SESSION['username'] != 'admin') { ?>

        <label for="Judul" class="field-label">Lab</label>
          <input readonly="" type="text" class="text-field w-input" maxlength="256" autofocus="true" name="JENIS_LAB_UPLOAD" data-name="Lab" id="Lab" required="" value="<?php echo $data['JENIS_LAB_UPLOAD'];?>">

      <?php } ?>
      
        <label for="Desc" class="field-label-5">Deskripsi Dokumen</label>
          <textarea rows="3" onkeypress ="return textonly(event)" class="text-field w-input" name="DESKRIPSI_UPLOAD" data-name="Deskripsi" placeholder="Deskripsi Tentang Kajian/Dokumen Standard Lab" id="Desc" required=""><?php echo $data['DESKRIPSI_UPLOAD'];?></textarea>
      
      <?php if ($data['JENIS_FILE_UPLOAD'] != 'Prototype') { ?>

      <?php
        $dir = "../uploads/"; // Directory where files are stored
          if ($dir_list = opendir($dir)) {
            while($file = readdir($dir_list)) {
            } 

            ?>

        <label for="File" class="field-label-5">File (Jenis File harus pdf)</label>
          <div style="color: white"><input type="checkbox" name="ubah_file" value="true"> Ceklis jika ingin mengubah file dokumen <br></div>
          <input type="file" name="NAMA_FILE_UPLOAD" class="form-control" data-name="File" id="File">

          <?php } ?>
      
      <?php } ?>

      <?php if ($data['JENIS_FILE_UPLOAD'] == 'Prototype') { ?>

        <label for="File" class="field-label-5">URL</label>
          <input type="text" class="text-field w-input" maxlength="256" name="URL" data-name="URL" placeholder="URL" id="url" value="<?php echo $data['URL'];?>">
      
      <?php } ?>
      
      <br>
      
      <?php if ($data['JENIS_FILE_UPLOAD'] != 'Prototype') { ?>

        <input type="submit" value="Update File" name="Submit" data-wait="Please wait..." class="button w-button">
      
      <?php } ?>
      
      <?php if ($data['JENIS_FILE_UPLOAD'] == 'Prototype') { ?>

        <input onclick="Warn2();" type="submit" value="Update URL" name="Submit2" data-wait="Please wait..." class="button w-button">
      
      <?php } ?>

      <input type="hidden" name="ID_UPLOAD" value="<?php echo $data['ID_UPLOAD'];?>">
      <input type="hidden" name="NAMA_FILE_UPLOAD" value="<?php echo $data['NAMA_FILE_UPLOAD'];?>">
    
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
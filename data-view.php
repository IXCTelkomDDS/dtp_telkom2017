<?php
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

<br>

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
			mysqli_data_seek($result, $i);
			$data = mysqli_fetch_array($result); //data di extract menggunakan "fetch array", kemudian ditampung di result menjadi data, setelah itu ditampilkan di tabel// ?>
   
   <tbody>
   <tr>
      <td><div align="center"><?php echo ++$no_urut;?></div></td>
	  <td><div align="center"><?php echo $data['JUDUL_UPLOAD'];?></div></td>
	  <td><div align="center"><?php echo $data['TGL_UPLOAD'];?></div></td>
	  <td><div align="center"><?php echo $data['JENIS_FILE_UPLOAD'];?><div></td>
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
                <div align="center"><a href="halaman-pic.php"><button class="btn btn-default">Details</button><a></div>
                
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
		
		<div align="middle"><?php echo paginate_one($reload, $page, $tpages);?></div>
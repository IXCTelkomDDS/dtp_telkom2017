<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

session_start();

//$_SESSION['lab_pic'] = $data['lab_pic'];

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
	  $dir = "../uploads/"; // Directory where files are stored
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
                <div align="center"><button class="btn btn-default" data-toggle="modal" data-target="#myModal" style="color: blue" onclick="showDetails(this);">Details</button></div>
            </td>

		<!-- displaying pop up that will show details -->
		<!-- modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                <h4 class="modal-title" id="myModalLabel">Details of Manager P.I.C</h4>
		            </div>

				<div class="modal-body">
				    <!-- display data in pop up -->
				    <p>1. Nama : I Gede Astawa (Manager of BAN) </p>
				    <p>No. Telp : 082129974691 </p>
				    <br>
				    <p>2. Nama : Fidar Adjie Laksono (Manager of BCN) </p>
				    <p>No. Telp : 08122138272 </p>
				    <br>
				    <p>3. Nama : David Gunawan (Manager of CNP) </p>
				    <p>No. Telp : 081312135693 </p>
				    <br>
				    <p>4. Nama : Hazim Ahmadi (Manager of FMC) </p>
				    <p>No. Telp : 08122355175 </p>
				    <br>
				    <p>5. Nama : Sri Ponco Kisworo (Manager of ISR) </p>
				    <p>No. Telp : 085220681676 </p>
				    <br>
				    <p>6. Nama : Moch. Suhariyanto (Manager of IXC) </p>
				    <p>No. Telp : 08122415799 </p>
				    <br>
				    <p>7. Nama : Mochammad Sovan (Manager of SOB) </p>
				    <p>No. Telp : 082260000286 </p>			    
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


<!-- pop up details -->
<script type="text/javascript">
    function showDetails(button) {
        $.ajax({
            success: function(response) {
            }
        });
    }
</script>
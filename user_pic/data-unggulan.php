<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php
  session_start();

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
    <th><div align="center">URL</div></th>
    <th><div align="center">ACTION</div></th>
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
    <td><div align="center"><?php echo '<a target="_blank" class="link-4" href = " '.$data['URL'].'">'.$data['URL'].'<a>';?></div></td>

    <?php

      if(($data['JENIS_LAB_UPLOAD'] == $_SESSION['lab_pic']) || ($_SESSION['username'] == 'admin')) { //jika lab pic = lab upload or username = admin ?>

  <td width="95px"><div align="center">
        <a href="halaman-edit.php?id=<?php echo $data['ID_UPLOAD'];?>" style="color:blue">Edit</a>
          &nbsp;
        <a href="../act_delete.php?id=<?php echo $data['ID_UPLOAD'];?>" style="color:blue">Delete</a>
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
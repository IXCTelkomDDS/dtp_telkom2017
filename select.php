<?php
    include "koneksi_db.php";
    
    //getting id upload
    $lab = $_GET['id_pic'];
    $lab2 = $_GET['nama_pic'];
    $lab3 = $_GET['no_tel_pic'];
    
    //$sql2 = "SELECT a.nama_pic AS nama_pic, a.lab_pic AS lab_pic, a.no_tel_pic AS no_tel_pic FROM user_pic a INNER JOIN upload_dtp b ON a.lab_pic = b.JENIS_LAB_UPLOAD WHERE a.lab_pic = b.JENIS_LAB_UPLOAD AND b.JENIS_LAB_UPLOAD=$lab GROUP BY b.JENIS_LAB_UPLOAD";
    $sql2 = "SELECT nama_pic, lab_pic, no_tel_pic FROM user_pic WHERE id_pic=$lab ORDER BY id_pic ASC";
	$result2 = mysqli_query($connect, $sql2);
	
	$data2 = mysqli_fetch_array($result2);
	echo json_encode($data2); //returning
	
	/*if(isset($_POST['JENIS_LAB_UPLOAD'])){
 
        $jenis_lab = $_POST['JENIS_LAB_UPLOAD'];
          
        // jalankan query
        $sql2 = "SELECT a.nama_pic AS nama_pic, a.lab_pic AS lab_pic, a.email_pic AS email_pic, a.no_tel_pic AS no_tel_pic FROM user_pic a JOIN upload_dtp b WHERE b.JENIS_LAB_UPLOAD='$jenis_lab' && a.lab_pic = b.JENIS_LAB_UPLOAD GROUP BY b.JENIS_LAB_UPLOAD";
	    $result2 = mysqli_query($connect, $sql2);
 
        $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
 
        echo json_encode($data);
        exit;
    }*/
 

    
?>
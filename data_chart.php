<?php

 include "koneksi_db.php";

	 // Data for IXC
    $query = mysqli_query($connect,"SELECT count(*) as NUMBER FROM upload_dtp WHERE JENIS_FILE_UPLOAD != 'Prototype' || JENIS_LAB_UPLOAD = 'IXC'");
    //$rows1 = array();
    $rows1['name'] = 'IXC';
    while($tmp = mysqli_fetch_array($query)) {
        $rows1['data'][] = $tmp['NUMBER'];
    }
    
    // Data for BAN
    $query = mysqli_query($connect,"SELECT count(*) as NUMBER FROM upload_dtp WHERE JENIS_LAB_UPLOAD = 'BAN'");
    //$rows2 = array();
    $rows2['name'] = 'BAN';
    while($tmp = mysqli_fetch_array($query)) {
        $rows2['data'][] = $tmp['NUMBER'];
    }
    
    // Data for ISR
    $query = mysqli_query($connect,"SELECT count(*) as NUMBER FROM upload_dtp WHERE JENIS_LAB_UPLOAD = 'IRS'");
    //$rows3 = array();
    $rows3['name'] = 'IRS';
    while($tmp = mysqli_fetch_array($query)) {
        $rows3['data'][] = $tmp['NUMBER'];
    }
    
    // Data for CNP
    $query = mysqli_query($connect,"SELECT count(*) as NUMBER FROM upload_dtp WHERE JENIS_FILE_UPLOAD != 'Prototype' || JENIS_LAB_UPLOAD = 'CNP'");
    //$rows4 = array();
    $rows4['name'] = 'CNP';
    while($tmp = mysqli_fetch_array($query)) {
        $rows4['data'][] = $tmp['NUMBER'];
    }
    
    // Data for FMC
    $query = mysqli_query($connect,"SELECT count(*) as NUMBER FROM upload_dtp WHERE JENIS_LAB_UPLOAD = 'FMC'");
    //$rows5 = array();
    $rows5['name'] = 'FMC';
    while($tmp = mysqli_fetch_array($query)) {
        $rows5['data'][] = $tmp['NUMBER'];
    }
    
    // Data for BCN
    $query = mysqli_query($connect,"SELECT count(*) as NUMBER FROM upload_dtp WHERE JENIS_LAB_UPLOAD = 'BCN'");
    //$rows6 = array();
    $rows6['name'] = 'BCN';
    while($tmp = mysqli_fetch_array($query)) {
        $rows6['data'][] = $tmp['NUMBER'];
    }
    
    // Data for SOB
    $query = mysqli_query($connect,"SELECT count(*) as NUMBER FROM upload_dtp WHERE JENIS_LAB_UPLOAD = 'SOB'");
    //$rows7 = array();
    $rows7['name'] = 'SOB';
    while($tmp = mysqli_fetch_array($query)) {
        $rows7['data'][] = $tmp['NUMBER'];
    }

    $result = array();
    array_push($result,$rows1);
    array_push($result,$rows2);
    array_push($result,$rows3);
    array_push($result,$rows4);
    array_push($result,$rows5);
    array_push($result,$rows6);
    array_push($result,$rows7);
    
    print json_encode($result, JSON_NUMERIC_CHECK);
    
    //mysqli_close($connect);
    
?>
	    <form action="" method="post" class="popup-form">

			    <table border="2" align="center" style="color:black">

    <tr>
      <th><div align="center">NO.</div></th>
	  <th><div align="center">NAMA</div></th>
	  <th><div align="center">EMAIL</div></th>
	  <th><div align="center">NO. HP</div></th>
   </tr>
   
   <?php
		while($data = mysqli_fetch_array($result)) { //data di extract menggunakan "fetch array", kemudian ditampung di result menjadi data, setelah itu ditampilkan di tabel// ?>
   
   <tr>
      <td><?php echo ++$no_urut;?></td>
	  <td><?php echo $data['nama_pic'];?></td>
	  <td><?php echo $data['email_pic'];?></td>
	  <td><?php echo $data['no_telp_pic'];?></td>
    </tr>
    
    <?php } ?>
    
    </table>
			
			</form>
			
			
			<?php
include "koneksi_db.php";

$lab=$_POST['JENIS_LAB_UPLOAD'];

$queryMhs="SELECT * FROM user_pic JOIN upload_dtp WHERE JENIS_LAB_UPLOAD = '$lab' GROUP BY id_pic ASC";

$data=mysqli_fetch_array($queryMhs);
echo "
<table>
<tr>
	<td>Nama PIC</td>
	<td>:</td>
	<td>".$data['nama_pic']."</td>
</tr>
<tr>
	<td>Email</td>
	<td>:</td>
	<td>".$data['email_pic']."</td>
</tr>
<tr>
	<td>No. Telp</td>
	<td>:</td>
	<td>".$data['no_telp_pic']."</td>
</tr>
<tr>
	<td>Lab</td>
	<td>:</td>
	<td>".$data['lab_pic']."</td>
</tr>
</table>
";

?>




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
		$sql = "SELECT * FROM upload_dtp WHERE JENIS_FILE_UPLOAD != 'Prototype' || JUDUL_UPLOAD LIKE '%$keyword%' || JENIS_FILE_UPLOAD LIKE '%$keyword%' || JENIS_LAB_UPLOAD LIKE '%$keyword%' || DESKRIPSI_UPLOAD LIKE '%$keyword%' || STATUS_FILE_UPLOAD LIKE '%$keyword%' ORDER BY ID_UPLOAD ASC";
		$result = mysqli_query($connect, $sql);
	} else {
		//if search not found
		$reload = "halaman-view.php?pagination=true";
		$sql = "SELECT * FROM upload_dtp WHERE JENIS_FILE_UPLOAD != 'Prototype' ORDER BY ID_UPLOAD ASC";
		$result = mysqli_query($connect, $sql);
	}
	
	//list_pic
	$lab = $_REQUEST['keyword'];
	$sql2 = "SELECT * FROM user_pic WHERE JENIS_LAB_UPLOAD LIKE '%$lab%' ORDER BY id_pic ASC";
	$result2 = mysqli_query($connect, $sql2);

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

   <title>Halaman View</title>
  
<body class="body-3">
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="#" class="w-nav-brand"><img src="images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="w-nav-menu">
<a href="index.html" id="home" class="navlink w-nav-link">Home</a>
<a href="#daftar-kajian" id="daftar-kajian" class="navlink w-nav-link">Daftar Kajian</a>
<a href="halaman-upload.php" id="Doc. Submission" class="navlink w-nav-link">Doc. Submission</a>
<a href="chart.php" id="Lab Statistics" class="navlink w-nav-link">Lab Statistics</a>
<a href="#End-Section" class="navlink w-nav-link">Customer care</a>
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
                            <input type="text" name="keyword" class="form-control" placeholder="Jenis Dokumen Or Lab">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
         
        <table border="2" align="center" style="color:black">

    <tr>
      <th><div align="center">NO.</div></th>
	  <th><div align="center">JUDUL</div></th>
	  <th><div align="center">TGL. UPLOAD</div></th>
	  <th><div align="center">JENIS DOKUMEN</div></th>
	  <th><div align="center">LAB</div></th>
	  <th><div align="center">DESKRIPSI</div></th>
	  <th><div align="center">FILE</div></th>
   </tr>
   
   <?php
		while(($count<$rpp) && ($i<$tcount)){
			mysqli_data_seek($result, $i);
			$data = mysqli_fetch_array($result); //data di extract menggunakan "fetch array", kemudian ditampung di result menjadi data, setelah itu ditampilkan di tabel// ?>
   
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
            
            if($file!='.' && $file!='..' && $data['NAMA_FILE_UPLOAD'] != ''){ ?>
			
				<td><div align="center"><?php echo '<a href = " '.$dir.''.$data['NAMA_FILE_UPLOAD'].'">'.$data['NAMA_FILE_UPLOAD'].'<a>'?></div></td>
				
					<?php } else { ?>
			
				<td>
				    
<div class="popup">
  <div id="box">
   <a class="close" href="#">X</a>
   <div class="boxdetail">
    <h1>Detail contact the responsible P.I.C <em class="id"></em></h1>
    <label>Nama : <em class="nama"></em></label>
    <label>Lab : <em class="lab"></em></label>
    <label>Email : <em class="email"></em></label>
    <label>No. Telp : <em class="no_tel"></em></label>
   </div>
  </div>
   
</div>
  
 <?php 
  $pic_id = array(IXC);
 ?>
  
 <div id="listlab">
   
  <?php foreach($pic_id as $record):?>
   <a href="#" name="<?php echo $record;?>" class="linkid"><?php echo $record;?></a>
  <?php endforeach;?>
   
 </div>

				</td>
				    
				<?php } ?>
		
		<?php } ?>
			
    </tr>
    
   
   <?php 
		$i++;
		$count++;
    }
	?>
 
 </table>
		
		<div align="center"><?php echo paginate_one($reload, $page, $tpages);?></div>

      </div>
    </div>
    </div>

<?php
    include "footer.php";
?>




<td><a href="#popup" class="popup-link">Please contact the responsible P.I.C</a></td>

<div class="popup-wrapper" id="popup">
	<div class="popup-container">
	        
		<form action="" method="post" class="popup-form">
		    
		    <table border="2" align="center" style="color:black">

    <tr>
      <th><div align="center">NO.</div></th>
	  <th><div align="center">NAMA</div></th>
	  <th><div align="center">EMAIL</div></th>
	  <th><div align="center">NO. HP</div></th>
   </tr>
   
   <?php
		while($data = mysqli_fetch_array($result)) { //data di extract menggunakan "fetch array", kemudian ditampung di result menjadi data, setelah itu ditampilkan di tabel// ?>
   
   <tr>
      <td><?php echo ++$no_urut;?></td>
	  <td><?php echo $data['nama_pic'];?></td>
	  <td><?php echo $data['email_pic'];?></td>
	  <td><?php echo $data['no_telp_pic'];?></td>
    </tr>

    <?php } ?>
    
    </table>
		
		</form>
		
		<a class="popup-close" href="#closed">X</a>
	</div>
</div>




if(isset($_POST["JENIS_LAB_UPLOAD"])) {
        $output = '';
        $query = "SELECT * FROM user_pic WHERE jenis_file = '".$_POST["JENIS_LAB_UPLOAD"]."'";
        $result = mysqli_query($connect,$query);
        
        $output .= '
        <div class="table-responsive">
            <table class="table table-bordered">';
        
        while($row = mysqli_fetch_array($result)) {
            $output .= '
                <tr>
                    <td width="30%"><label>Nama</label></td>
                    <td width="70%">'.$row["nama_pic"].'</td>
                    
                    <td width="30%"><label>Lab</label></td>
                    <td width="70%">'.$row["lab_pic"].'</td>
                    
                    <td width="30%"><label>Email</label></td>
                    <td width="70%">'.$row["email_pic"].'</td>
                    
                    <td width="30%"><label>No. Telp</label></td>
                    <td width="70%">'.$row["no_tel_pic"].'</td>
                </tr>
            ';
        }
        
        $output .= "</table></div>";
        echo $output;
    }
	
	
	
	
	query : select nama_pic, lab_pic, email_pic, no_tel_pic from user_pic a join upload_dtp b where a.lab_pic = b.JENIS_LAB_UPLOAD group by JENIS_LAB_UPLOAD
	
	
	
	
	

<!-- <script type="text/javascript">
$(document).ready(function(){
    $(document).on('click','#getLab', function(e){
        e.preventDefault();
        var jenis_lab = $(this).data('JENIS_LAB_UPLOAD');
        $('#modal-body').hide();
 
        $.ajax({
            type:'POST',
            url:'select.php',
            data:{JENIS_LAB_UPLOAD:jenis_lab},
            dataType:'json'
        }).done(function(data){
            console.log(data);
            $('#modal_body).show(); // show dynamic div
            $("#nama_pic").html(data.nama_pic);
                //$("#lab_pic").text(data.lab_pic);
                $("#email_pic").html(data.email_pic);
                $("#no_tel_pic").html(data.no_tel_pic);
        }).fail(function(){
 
            $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
        });
    });
});
</script> -->

    
<!-- <div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">P.I.C Details</h4>
            </div>
            <div class="modal-body" id="pic_detail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
       $('.view_data').click(function(){
           var ID_UPLOAD = $(this).attr("ID_UPLOAD");
           
           $.ajax({
               url:"select.php",
               method:"post",
               data:{JENIS_LAB_UPLOAD:lab_pic},
               success:function(data){
                   $('#pic_detail').html(data);
                   $('#dataModal').modal("show");
               }
          });
       });
    });
</script> -->




<?php
    include "koneksi_db.php";
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Dec 19 2017 09:47:38 GMT+0000 (UTC)  -->
<html data-wf-page="59fd0c1ae534be0001f52c87" data-wf-site="59fd0c1ae534be0001f52c86">
<head>
  <meta charset="utf-8">
    
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  
  <!-- bootstrap pagination -->
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  
  <!-- chart -->
  <script src="js/jquery-1.10.1.min.js"></script>
  <script src="js/highcharts.js"></script>
  
  <!-- css popup -->
  <!-- <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script> -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <!-- <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  
  <script type="text/javascript">
 $(document).ready(function(){
  $('a.close').click(function(eve){   
   eve.preventDefault();
   $(this).parents('div.popup').fadeOut('quick');
  });
   
  $('a.linkid').click(function(eve){
   eve.preventDefault();
   $('div.popup').fadeIn('quick');   
   var atr_href = $(this).attr('name');
    
   $.ajax({
    url: "halaman-view.php",
    type: "POST",
    dataType: "json",
    data: {id_pic:atr_href},
    beforeSend: function(){
    },
    success: function(data){
     $('em.id').text(atr_href);
     $('em.nama').text(data.nama_pic);
     $('em.lab').text(data.lab_pic);
     $('em.email').text(data.email_pic);
     $('em.no_tel').text(data.no_tel_pic);
    }
   });
  
  });
 });
</script>
 
<style type="text/css">
 body{
  width:100%;
  height:100%;
  font-family:arial;
  margin:0;
  padding:0;
 }
 div.popup{
  position:fixed;
  display:none;
  top:0;
  bottom:0;
  left:0;
  right:0;
  width:100%;
  height:100%;
  background: rgba(0,0,0,.8);
 }
  
 div#box{
  margin:5% auto;
  background:#fff;
  width:50%;
  height:50%;
  -webkit-box-shadow:0 0 15px #000;
  -moz-box-shadow:0 0 15px #000;
  box-shadow:0 0 15px #000;
 }
  
 a.close{
  text-decoration:none;
  color:#000;
  margin:10px 15px 0 0;
  float:right;
  font-family:tahoma;
  font-size:20px;
 }
  
 #listlab{
  width:60%;
  margin:100px auto ;
  height:auto;
  padding:20px;
 }
  
 .linkid{
  padding:10px 20px;
  text-decoration:none;
  color:#000;
  margin:10px 0 10px 0;
 }
  
 .boxdetail{
  padding:20px;
 }
  
 label{
  margin:0 0 10px 0;
 }
  
 em{
  font-style:normal;
 }
</style> -->
<!--- ini adalah akhir script js pop up nya -->

  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/digitaltouchpoint.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Changa One:400,400italic","Oswald:200,300,400,500,600,700","Merriweather:300,300italic,400,400italic,700,700italic,900,900italic","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Droid Serif:400,400italic,700,700italic","Bitter:400,700,400italic","Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Droid Sans:400,700","Inconsolata:400,700","PT Sans:400,400italic,700,700italic","Righteous:regular:latin-ext,latin","Berkshire Swash:regular:latin-ext,latin","Bilbo Swash Caps:regular","Damion:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/coba-logo.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/logo-telkom_1.png" rel="apple-touch-icon">
  <script type="text/javascript">(function(d, t, e, m){
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
        RW.init({
            huid: "380741",
            uid: "b343a723c0cff0c7a5e2735df7c0fde9",
            source: "website",
            options: {
                "advanced": {
                    "layout": {
                        "lineHeight": "24px"
                    },
                    "font": {
                        "size": "12px",
                        "type": "\"Comic Sans MS\""
                    }
                },
                "size": "large",
                "style": "oxygen1",
                "isDummy": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>
    
</head>




<div id="popupdiv">
</div>

    <script type="text/javascript">
    $(".details").live("click", function () {
     var id = $(this).attr("rel");

    $('#popupdiv').modal();
    $.ajax({
            type: "GET",
            contentType: "application/json; charset=utf-8",

            url: "/mycontroller/details?Id="+ id,
            data: "",
            dataType: "json",
            success: function (data) { //which contains name,email etc how can i append the  details on to the "popupdiv" div by inserting in to another div

            }
    });
    return false;                     
     });
     </script>

url: "/mycontroller/details?Id="+ id, ----> akses datanya, kamu sesuaikan aj
data: "",--> awalnya kosong nnti kamu isi sesuai hasil atasnya




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
		$sql = "SELECT * FROM upload_dtp WHERE JENIS_FILE_UPLOAD != 'Prototype' || JUDUL_UPLOAD LIKE '%$keyword%' || JENIS_FILE_UPLOAD LIKE '%$keyword%' || JENIS_LAB_UPLOAD LIKE '%$keyword%' || DESKRIPSI_UPLOAD LIKE '%$keyword%' || STATUS_FILE_UPLOAD LIKE '%$keyword%' ORDER BY ID_UPLOAD ASC";
		$result = mysqli_query($connect, $sql);
	} else {
		//if search not found
		$reload = "halaman-view.php?pagination=true";
		$sql = "SELECT * FROM upload_dtp WHERE JENIS_FILE_UPLOAD != 'Prototype' ORDER BY ID_UPLOAD ASC";
		$result = mysqli_query($connect, $sql);
	}
	
	//list_pic
	$reload = "halaman-view.php?pagination=true";
	$sql2 = "SELECT a.nama_pic AS nama_pic, a.lab_pic AS lab_pic, a.email_pic AS email_pic, a.no_tel_pic AS no_tel_pic FROM user_pic a JOIN upload_dtp b WHERE a.lab_pic = b.JENIS_LAB_UPLOAD GROUP BY b.JENIS_LAB_UPLOAD";
	$result2 = mysqli_query($connect, $sql2);

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

   <title>Halaman View</title>
  
<body class="body-3">
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="#" class="w-nav-brand"><img src="images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="w-nav-menu">
<a href="index.html" id="home" class="navlink w-nav-link">Home</a>
<a href="#daftar-kajian" id="daftar-kajian" class="navlink w-nav-link">Daftar Kajian</a>
<a href="halaman-upload.php" id="Doc. Submission" class="navlink w-nav-link">Doc. Submission</a>
<a href="chart.php" id="Lab Statistics" class="navlink w-nav-link">Lab Statistics</a>
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
                            <input type="text" name="keyword" class="form-control" placeholder="Jenis Dokumen Or Lab">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
         
        <table border="2" align="center" style="color:black">

    <tr>
      <th><div align="center">NO.</div></th>
	  <th><div align="center">JUDUL</div></th>
	  <th><div align="center">TGL. UPLOAD</div></th>
	  <th><div align="center">JENIS DOKUMEN</div></th>
	  <th><div align="center">LAB</div></th>
	  <th><div align="center">DESKRIPSI</div></th>
	  <th><div align="center">FILE</div></th>
   </tr>
   
   <?php
		while(($count<$rpp) && ($i<$tcount)){
			mysqli_data_seek($result, $i);
			$data = mysqli_fetch_array($result); //data di extract menggunakan "fetch array", kemudian ditampung di result menjadi data, setelah itu ditampilkan di tabel// ?>
   
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
                <div align="center"><button class="btn btn-default" data-toggle="modal" data-target="#myModal" id="<?php echo JENIS_LAB_UPLOAD;?>" onclick="showDetails(this);">Details</button></div>
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
		            
		            <?php
                        while($data2 = mysqli_fetch_object($result2)) { ?>
					    
				<div class="modal-body">
				    <!-- display data in pop up -->
				    <p>Nama : <span id="nama_pic"></span></p>
				    <p>Email : <span id="email_pic"></span></p>
				    <p>No. Telp : <span id="no_tel_pic"></span></p>
				</div>
				
				    <?php
                        }
                    ?>
				
			    </div>
		    </div>
		</div>
				    
				<?php } ?>
		
		<?php } ?>
			
    </tr>
    
   
   <?php 
		$i++;
		$count++;
    }
	?>
 
 </table>
		
		<div align="center"><?php echo paginate_one($reload, $page, $tpages);?></div>

      </div>
    </div>
    </div>
    
<?php
    include "footer.php";
?>


<!-- pop up -->
<script type="text/javascript">
    function showDetails(button) {
        var JENIS_LAB_UPLOAD = button.id;
        
        //ajax call to get specific data
        //$('#modal-body').modal();
        
        $.ajax({
            type: "GET",
            //contentType: "application/json; charset=utf-8",
            dataType: "json",
            
            url: "select.php",
            //method: "GET",
            data: {"JENIS_LAB_UPLOAD": JENIS_LAB_UPLOAD},
            success: function(response) {
                //parsing the JSON string to javascript object
                var data2 = JSON.parse(response);
                //displaying in fields
                $("#nama_pic").text(data2.nama_pic);
                $("#email_pic").text(data2.email_pic);
                $("#no_tel_pic").text(data2.no_tel_pic);
                
                //display name
                $("#myModalLabel").text(data2.lab_pic);
            }
        });
        
        return false;
    }
</script>
<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php
    
    include "../koneksi_db.php";
    include "../header.php";

?>

    <title>Chart</title>

<body>
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="../index.php" class="brand w-nav-brand"><img src="../images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="nav-menu w-nav-menu">
<a id="home" href="../index.php" class="navlink w-nav-link">Home</a>
<a href="halaman-view.php" id="about" class="navlink w-nav-link">Daftar Kajian</a>
<a href="halaman-prototype.php" id="prototype" class="navlink w-nav-link">Prototype</a>
<a href="#End-Section" class="navlink w-nav-link">Customer Care</a>
</nav>
    </div>
  </div>

  <div id="Statistik" class="section-14">
    <div class="container-13 w-container">
      <h2 class="heading-2 mobile upload">Lab. Participation Statistics</h2>

      <br>     

      <!--- Bagian Judul-->	
	<div class="col-md-10">
		<div class="panel panel-primary">
			<div class="panel-heading">Count of Lab IXC</div>
				<div class="panel-body">
					<div id ="mygraph"></div>
				</div>
		</div>
	</div>

    <script>
        var chart1; 
        $(document).ready(function() {
            chart1 = new Highcharts.Chart({
            chart: {
                renderTo: 'mygraph',
                type: 'column'
            },   
       
        title: {
            text: 'Count Statistics ', 
        },
        
        xAxis: {
            categories: ['LAB']
        },
        
        yAxis: {
            title: {
            text: 'Total Dokumen'
        }
        },     
        series:[

        <?php 
            include "koneksi_db.php";

            $sql   = "SELECT JENIS_LAB_UPLOAD, count(JENIS_FILE_UPLOAD) AS total FROM upload_dtp GROUP BY JENIS_LAB_UPLOAD";
            $query = mysqli_query($connect, $sql);
                while($temp = mysqli_fetch_array($query)) {
                    $count_lab=$temp['JENIS_LAB_UPLOAD'];   
                    $sql_total = "SELECT JENIS_LAB_UPLOAD, count(*) AS total FROM upload_dtp WHERE JENIS_LAB_UPLOAD='$count_lab'";        
                    $query_total = mysqli_query($connect, $sql_total);
                        while($data = mysqli_fetch_array($query_total)) {
                           $total = $data['total'];                 
                        }             

        ?>

        {

            name: '<?php echo $count_lab; ?>',
            data: [<?php echo $total; ?>]

        },     

        <?php 
            }  
        ?>      

       ]
      });
     }); 

    </script>

       </div>
      </div>
    </div>
  </div>

<?php
    include "../footer.php";
?>
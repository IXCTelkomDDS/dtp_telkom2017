<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

  include "../header.php";
  
?>

  <title>Security Page</title>
  
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-7 w-container"><a href="../index.php" class="w-nav-brand"><img src="../images/logo-telkom.png" width="80.5"></a>
      <nav role="navigation" class="w-nav-menu"><a href="../index.php" id="home" class="navlink w-nav-link">Home</a><a href="#About" id="home" class="navlink w-nav-link">ABOUT</a><a href="#End-Section" class="navlink w-nav-link">Customer Care</a></nav>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div id="About" class="content-sob">
    <h2 id="AboutIXC" class="heading-2 mobile">Lab Security OSS and BSS<br>Research - S O B</h2>
    <div class="row-18 w-row">
      <div class="column-46 w-col w-col-4">
        <div class="about">
          <h1 class="heading-17">about us</h1><img src="../images/pmxwanyjahqqjsiiklwn.png" width="141" class="image-ixc">
          <p class="paragraph-ixc">&quot;Our Challenge is Design an Experience Beyond User Expectation and Monitoring for Digital Network Security Services&quot;</p>
        </div>
      </div>
      <div class="column-47 w-col w-col-4">
        <div class="about">
          <h1 class="heading-17">our responsibility</h1><img src="../images/sustainable-and-responsible-icon.png" width="141" class="image-ixc respon">
          <p class="paragraph-ixc responsibility">Menyediakan Expert pada bidang Security, Operation Support System, Business Support System dan Konsultasi Security Application Development, Assessment dan/atau Penetrasi terhadap Keamanan Situs Web, 24/7 Security Incident &amp; Event Monitoring, Android APK Security Testing.</p>
        </div>
      </div>
      <div class="column-48 w-col w-col-4">
        <div class="about research">
          <h1 class="heading-17">repository</h1>
          <p class="paragraph-ixc responsibility">Daftar Kajian<br>Lab Security, OSS and BSS Research</p><a href="sob-kajian.php" class="link-10">Load more . . .</a></div>
        <div class="about research">
          <h1 class="heading-17">standard documents</h1>
          <p class="paragraph-ixc responsibility">Daftar Dokumen Standarisasi<br>Lab Security, OSS and BSS Research</p><a href="sob-dokumen-standard.php" class="link-10">Load more . . .</a></div>
      </div>
    </div>
  </div>
  <div id="End-Section" class="end-section all tes">
    <h3 class="experience">Rate your Experience to Us :</h3>
    <div class="html-embed w-embed">
      <div class="rw-ui-container"></div>
    </div>
    
    <?php
        include "../footer.php";
    ?>
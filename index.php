<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<?php
require_once('bdd.php');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WISATA GLAGAH</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/iconwisata.png">
<style>
.btn {
  background-color: gray;
  color: #FA4;
  font-size: 13px;
  font-weight: 600;
  border: 0;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  display: inline-block;
  text-transform: uppercase;
  opacity:0.8;
}
  </style>
</head>

<body>
<!-- header  -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">WISATA GLAGAH</a>
      <nav class="navigation" role="navigation">
      <ul class="primary-nav">
          <li><a href="index.php">Beranda</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wisata <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li>
                            <a style="color:grey" href="wisataalam.php">Wisata Alam</a>
                       </li>
                       <li>
                            <a style="color:grey" href="wisatasejarah.php">Wisata Sejarah</a>
                       </li>
                       <li>
                            <a style="color:grey" href="wisatapendidikan.php">Wisata Pendidikan</a>
                       </li>
                    </ul>
              </li>
          <li><a href="artikel.php">Artikel</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li><a href="tentang.php">Tentang Kami</a></li>
           <?php 
                        if(!isset($_SESSION['is_login'])){
                    ?>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php }else{?>
                    <li>
                    <a href="akunuser.php?logoutSubmit=1" class="logout">Logout (<?= $_SESSION['namauser'];?>)</a>
                    </li><?php }?>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
  <div class="container"></div>
</section>
<!-- header  --> 
<!-- intro  -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>SELAMAT DATANG</h3>
      <p>Desa Glagah terletak di sebelah barat desa Cawan yang sebagian penduduknya berprofesi sebagai pedagang buah dan sayuran, atau biasa orang menyebut sebagai "bakul penebas". Di desa Glagah terdapat Sendang (kolam air) untuk pemandian dan pengairan sawah disekitarnya. Konon sendang Glagah ini dibuat oleh seorang pawang ular sakti. Menurut Ki Awal Kulonkaman (sesepuh desa Glagah) yang sampai saat ini masih disegani oleh warga masyarakat sekitar, dia mengatakan bahwa sendang glagah di buat pada tahun 1411 oleh Mbah Blendang.</p>    </div>
  </div>
</section>
<!-- intro  --> 
<!-- services  -->
<section id="services" class="services service-section">
  <div class="container">
  <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!--Satu-->
                <iframe width="725" height="375" src="https://www.youtube.com/embed/YMDf_wgYMnU" frameborder="0" allowfullscreen></iframe>
                <p><h4>Sendang Glagah</h4></p>
                <p class="justify">Sendang Glagah terletak di desa Glagah, sebelah barat Jatinom. Sendang ini begitu keramatnya sampai pernah ada yg kalap, hilang, saat mengambil ikan, ada juga yg dilihati makhluk gaib biasanya dalam wujud ular naga, kadang wewe gombel. Kesakralan tempat ini masih dirasakan sampai hari ini, sehingga masih dipegqng kehayi hatian, penghormatan dan beberapa masih memberikan sajen di pusat umbul di sendang ini ditemukan batu berinskripsi, mungkin satu saat bisa di dichiper oleh para epigraf, dan banyak batu candi yg masih teroendammdi salah satu pusat mata air,membuktikan bahwa sendang ini merupakan petirthan kuno.</p>
                <br>
                <br>
                <br>

                <!--Dua-->
                <hr>
                <iframe width="725" height="375" src="https://www.youtube.com/embed/YHYxUqoRwCg" frameborder="0" allowfullscreen></iframe>
                <p><h4>Sendang Glagah, Sendang Keramat di Kecamatan Jatinom</h4></p>
                <p class="justify">Sendang Glagah terletak di desa Glagah, sebelah barat Jatinom. Sendang ini begitu keramatnya sampai pernah ada yg kalap, hilang, saat mengambil ikan, ada juga yg dilihati makhluk gaib biasanya dalam wujud ular naga, kadang wewe gombel. Kesakralan tempat ini masih dirasakan sampai hari ini, sehingga masih dipegqng kehayi hatian, penghormatan dan beberapa masih memberikan sajen di pusat umbul di sendang ini ditemukan batu berinskripsi, mungkin satu saat bisa di dichiper oleh para epigraf, dan banyak batu candi yg masih teroendammdi salah satu pusat mata air,membuktikan bahwa sendang ini merupakan petirthan kuno.</p>
                <br>
                <br>
                <br>

                <!--Tiga-->
                
                <!--Empat-->
                
                <!--Lima-->
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Pencarian</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Kategori</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="wisataalam.php">Wisata Alam</a>
                                </li>
                                <li><a href="wisatasejarah.php">Wisata Sejarah</a>
                                </li>
                                <li><a href="wisatapendidikan.php">Wisata Pendidikan</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Wisata di Desa Glagah</h4>
              <section>
                  <div class="container-fluid">
                    <div class="row no-gutter">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>    
                          <img href="wisataalam.php" src="images/foto/alam/a1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img href="wisataalam.php" src="images/foto/alam/b1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img href="wisataalam.php" src="images/foto/alam/c1.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
                </div>
            <p id="demo"></p>
              <script>
                  document.getElementById("demo").innerHTML = Date();
              </script>
                <section id="services" class="services service-section">
            </div>
        </div>
  </div>
</section>


<!-- Footer  -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container" align="center">
      <div class="row">
        <a style="padding:20px"; href="#"><i class="fa fa-facebook"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-twitter"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-instagram"></i></a>
        <br>
        <br>
      <p>Copyright © 2022 WisataGlagah All Rights Reserved. Made by Team KKN KUNY Unit 26293</p>
      </div>
    </div>
  </div>
</footer>
<!-- footer --> 
  
<!-- Footer --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>
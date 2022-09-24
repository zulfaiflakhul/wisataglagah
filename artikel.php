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
require 'function.php';

$jumdatph = 12;
$jumalldat = count(data("SELECT * FROM artikel"));
$jumhal = ceil($jumalldat / $jumdatph);
$aktpage = (isset($_GET["page"])) ? $_GET["page"] : 1;
$dtawl = ($jumdatph * $aktpage) - $jumdatph;

$artikel = data("SELECT * FROM artikel WHERE sts = 'approved' LIMIT $dtawl, $jumdatph");
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
</head>

<body>
<!-- header section -->
<section>
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
</section>
<!-- header section --> 
<!-- services section --> 
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
     <?php 
                        if(!isset($_SESSION['admin'])){
                    ?>
                    <h6>ARTIKEL</h6>
                    <p>Daerah wisata di Kabupaten KLaten banyak menjadi tujuan wisata populer bagi masyarakat, khususnya di daerah Kecamatan Jatinom. Beberapa wisata alam yang indah dan menarik untuk dinikmati. Kami mengumpulkan informasi tempat wisata di Kecamatan Jatinom khusunya pada Desa Glagah yang masih jarang dikunjungi namun memiliki keindahan yang luar biasa beserta keterangannya. Berikut ini adalah kumpulan artikel informasi wisata di Desa Glagah yang bisa anda nikmati.</p>
                    </li>
                    <?php }else{?>
                    <h6>Selamat Datang, Admin !</h6>
                    <p>Ini adalah halaman khusus admin. Kamu dapat menambahkan, melihat dan menghapus artikel yang ada di website ini.</p>
                    <br>
                    <h6>ARTIKEL</h6>
                    <br>
                    </li>
      <?php }?>
    </div>
  </div>
</section>
<!-- header section --> 
<!-- intro section -->
<!-- intro section --> 
<!-- Artikel section -->
<section class="bg-secondary page-section" id="artikel">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-12 text-center">
                    <hr>
                </div>
            </div>
            <div class="row">
                <?php $no = 1; ?>
                <?php foreach ($artikel as $brs) : ?>

                    <div class="col-md-3 col-sm-6 my-1" ">
                        <a class=" portfolio-link card">
                        <img class="card-img-top" height="150px" src="images/foto/<?= $brs['foto']; ?>" alt="">
                        </a>
                        <div class="card-body bg-white" style="height: auto;">
                            <h5 class="card-title"><?= $brs["tempat"]; ?></h5>
                            <strong><?= $brs["lokasi"]; ?></strong>
                            <p></p>
                            <p class="card-text"><?= substr(html_entity_decode($brs["isi"]), 0, 100); ?>
                            </p>
                            <div class="card-footer bg-white">
                                <a href="isiartikel.php?id=<?= $brs["id"]; ?>" class="ml-0 btn btn-sm btn-primary">Lanjutkan Membaca</a>
                            </div>

                        </div>
                    </div>

                    <?php $no++; ?>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
<!-- Add Article -->
<section id="services" class="services service-section">
              <?php 
                        if(!isset($_SESSION['admin'])){
                    ?>
                    </li>
                    <?php }else{?>

  <section  class="section-dua intro text-center">
    <h6 align="center">Data Artikel</h6>
    <br>
    <a href="buatArtikel.php" class="btn btn-default" >Tambah</a>
  </section> 
<!-- Artikel section --> 
<!-- Article Data Control -->
                      <br>
                      <br>
              <table border="2" width="90%" align="center">
                    <tr>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">Tempat</th>
                    <th class="text-center">Lokasi</th>
                    <th class="text-center">Isi</th>
                    <th class="text-center">Author</th>
                    <th class="text-center" colspan="1">Aksi</th>
                    </tr>
                <?php
                // Load file koneksi.php
                include "koneksi.php";
  
                      $query = "SELECT * FROM artikel"; // Query untuk menampilkan semua data galeri
                      $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                      echo "<tr>";
                      echo "<td align='center'><img src='images/foto/".$data['foto']."' width='400' height='200' ></td>";
                      echo "<td align='center'>".$data['tempat']."</td>";
                      echo "<td align='center'>".$data['lokasi']."</td>";
                      echo "<td align='justify'>".$data['isi']."</td>";
                      echo "<td align='center'>".$data['author']."</td>";
                      //echo "<td><a href='form_ubah_artikel.php?id=".$data['id']."'>Ubah</a></td>";
                      echo "<td align='center'><a href='proses_hapus_artikel.php?id=".$data['id']."'>Hapus</a></td>";
                      echo "</tr>";
                  }
                ?>
              </table>                    
      <?php }?>
  </div>
</section>
<!-- Footer section -->
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
  <!-- footer top --> 
  
</footer>
<!-- Footer section --> 
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
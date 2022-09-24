<?php
$title = "WISATA GLAGAH | Buat Artikel";
require 'function.php';
if (isset($_POST["saveArtikel"])) {

    if (addArtikelUS($_POST) > 0) {
        echo "
      <script>
        alert('Data berhasil disimpan. Data anda sedang menunggu persetujuan dari pihak pengelola sebelum dipublikasi');
        document.location.href = 'buatArtikel.php';
      </script>
      ";
    } else {
        echo "
      <script>
        alert('Data gagal disimpan.');
        document.location.href = 'buatArtikel.php';
      </script>
      ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/utsweb2/assets/fontawesome-free/css/all.min.css">
    <script src="http://localhost/utsweb2/assets/ckeditor/ckeditor.js"></script>
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/iconwisata.png">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar bg-dark navbar-expand-lg navbar-dark mb-5" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger text-tebal" href="index.php">Home</a>
        </div>
    </nav>

    <div class="container">
                <div class="row mb-1">
                    <div class="col-sm-3">
                        <a href="artikel.php" class="btn btn-primary shadow-lg btn-md active mb-1" role="button">
                            <i class="fas fa-arrow-left" style="margin-right: 10px;"></i>Kembali
                        </a>
                    </div>
                </div>
        <div class="card card-primary border shadow-lg mb-3">
            <div class="card-header bg-info">
                <h3 class="card-title text-white">Form Pembuatan Artikel</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="author" id="author" class="form-control" autofocus="true" autocomplete="off" placeholder="Nama Penulis" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nama" id="nama" class="form-control" autofocus="true" autocomplete="off" placeholder="Nama Tempat Wisata" required>
                            </div>
                            <div class="form-group">
                                <input placeholder="Lokasi Tempat Wisata ( Desa/Kecamatan/Kabupaten )" type="text" name="lokasi" id="lokasi" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label><br>
                                <input type="file" name="foto" id="foto" required="">
                            </div>
                            <div class="form-group">
                                <label for="isiArtikel">Isi Artikel</label><br>
                                <textarea name="isiArtikel" id="isiArtikel" rows="10" cols="100" required autocomplete="off"></textarea>
                            </div>
                        </div>
                        <button type="submit" name="saveArtikel" class="btn btn-success ml-3">
                            <i class="fas fa-save mr-2"></i>Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

    <footer class="footer bg-dark">
        <div class="container">
            <div class="text-center">
            <span class="copyright text-white">Copyright © 2022 WisataGlagah All Rights Reserved. Made by Team KKN KUNY Unit 26293 <?= date('Y'); ?></span>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <script src="assets/js/agency.min.js"></script>
    <script>
        // Replace the <textarea id="isiBerita"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('isiArtikel');
    </script>

</body>

</html>
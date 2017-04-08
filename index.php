<?php
include('functions/config.php');
include('checklogin.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2>Aplikasi Kasir Toko Buku Gunung Agung</h2>
  <br>
  <?php if($_SESSION['jabatan'] == 1){?>
  <ul class="nav nav-pills" role="tablist">
    <li><a href="index.php">Home</a></li>
    <li><a href="functions/toko/view.php">About</a></li>

    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
    Master <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
      <li><a href="functions/pegawai/view.php">Pegawai</a></li>
      <li><a href="functions/barang/view.php">Barang</a></li>
      <li><a href="functions/stok/view.php">Stok</a></li>
    </ul>
    </li>
    <li><a href="functions/transaksi/view.php">Transaksi</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
  <?php }else{ ?>
  <ul class="nav nav-pills" role="tablist">
    <li><a href="index.php">Home</a></li>
    <li><a href="functions/toko/view.php">About</a></li>

    <li><a href="functions/transaksi/view.php">Transaksi</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
  <?php } ?>

  <div class="jumbotron">
    <h1>Toko Buku Gunung Agung</h1>
    <p>Toko buku Gunung Agung menyediakan beberapa keperluan alat tulis,alat kerja,dan keperluan sekolah untuk anda dan keluarga.</p>
  </div>
  <div style="text-align: center;">
    <img src="assets/uploads/gambartoko.jpg" class="img-thumbnail" alt="Toko buku gunung agung" width="300" height="236"> 
  </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
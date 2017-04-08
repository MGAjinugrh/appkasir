<?php
include('../config.php');
include('../../checklogin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Toko</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Aplikasi Kasir Toko Buku Gunung Agung</h2>
    <br>
  <?php if($_SESSION['jabatan'] == 1){?>
  <ul class="nav nav-pills" role="tablist">
    <li><a href="../../index.php">Home</a></li>
    <li><a href="../toko/view.php">About</a></li>

    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
    Master <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
      <li><a href="../pegawai/view.php">Pegawai</a></li>
      <li><a href="../barang/view.php">Barang</a></li>
      <li><a href="../stok/view.php">Stok</a></li>
    </ul>
    </li>
    <li><a href="../transaksi/view.php">Transaksi</a></li>
    <li><a href="../../logout.php">Logout</a></li>
  </ul>
  <?php }else{ ?>
  <ul class="nav nav-pills" role="tablist">
    <li><a href="../../index.php">Home</a></li>
    <li><a href="../toko/view.php">About</a></li>

    <li><a href="../transaksi/view.php">Transaksi</a></li>
    <li><a href="../../logout.php">Logout</a></li>
  </ul>
  <?php } ?>
  <div class="jumbotron">
    <h1>Toko Buku Gunung Agung</h1>      
    <p>Toko buku Gunung Agung menyediakan beberapa keperluan alat tulis,alat kerja,dan keperluan sekolah untuk anda dan keluarga</p>
  </div>

  <div class="container">
    <p class="lead">Nama Toko : Gunung Agung</p>      
    <p class="lead"><span class="glyphicon glyphicon-home"></span> Alamat : Margo City lT 1  </p>      
     <p class="lead"><span class="glyphicon glyphicon-phone-alt"></span> Nomor Telepon : 021 78871013  </p> 
  </div>
</div>
</body>
</html>

<?php
include('../config.php');
include('../../checklogin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
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
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Berdasarkan
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Kode Barang</a></li>
      <li><a href="#">Nomor Barcode</a></li>
      <li><a href="#">Nama Barang</a></li>
    </ul>
  </div>
  <br>
<div class="row">
    <div class="col-sm-6" style="background-color:pink;">
        <form>
    <div class="form-group">
    <br>
      <label for="kdb">Kode Barang/Barcode:</label>
      <input type="text" class="form-control" id="kdb">
    </div>
    <div class="form-group">
      <label for="jmlh">Jumlah Jual:</label>
      <input type="number" class="form-control" id="jmlh">
    </div>
    <br>
    <div class="container">
    <div class="btn-group">
    <button type="button" class="btn btn-primary">Simpan Item</button>
    <button type="button" class="btn btn-primary">Batal Item</button>
    <button type="button" class="btn btn-primary">Hapus Semua Item</button>
  </div>
  </div>
  </form>
  </div>
  <div class="col-sm-12" style="background-color:lavenderblush;">
  <br>
  <br>
   <b> BARANG YANG DIJUAL </b>
   <br>
   <br>
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga Satuan</th>
        <th>Jumlah Jual</th>
        <th>Harga Akhir</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
         <td></td>
          <td></td>
           <td><button type="button" class="btn btn-danger">Hapus</button></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
         <td></td>
          <td></td>
           <td><button type="button" class="btn btn-danger">Hapus</button></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
         <td></td>
          <td></td>
           <td><button type="button" class="btn btn-danger">Hapus</button></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
         <td></td>
          <td></td>
           <td><button type="button" class="btn btn-danger">Hapus</button></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
         <td></td>
          <td></td>
           <td><button type="button" class="btn btn-danger">Hapus</button></td>
      </tr>
    </tbody>
  </table>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-12"style="background-color:pink;"> 
  <form>
     <div class="form-group">
    <br>
      <label for="byr">Bayar:</label>
      <type="text" class="form-control" id="byr">
    </div>
    <div class="form-group">
      <label for="kmbli">Kembalian:</label>
      <type="number" class="form-control" id="kmbli">
    </div> 
  </div>
  <div class="col-sm-12"style="background-color:pink;">
  <div class="form-group">
    <br>
      <label for="tot">TOTAL HARGA:</label>
      <type="text" class="form-control" id="tot">
    </div>
    </div>
</div>
<br>
<br>
<button type="button" class="btn btn-primary">SIMPAN</button>
<button type="button" class="btn btn-primary">BATAL</button>
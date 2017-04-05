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
<div align="center">
<img src ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhq2bHfJgKWlcnlxFDPge5jXJGTwMzF2QUWk2c2ptcnQTEovXtgA"/>
<img src ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjGoNugc5QEM76Xl1f9Xs0Orae81KuH_5SEjvkUz8Wz1dTd-3e"/>
<h1> BOOKS STORE </h1>
<h2> Toko Buku dan Alat Tulis </h2>
<img src ="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTC6ld-Abojwz677rLEpz88ayZyt6FAYOyUH-YOUDGdSI5JGPGpfg"/>
</div>
<br>
<br>
<br>
<b> INPUT TRANSAKSI </b>
<br>
<br>
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
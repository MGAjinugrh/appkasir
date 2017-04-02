<!DOCTYPE html>
<html lang="en">
<head>
  <title>Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <ul class="nav nav-pills" role="tablist">
    <li class="active"><a href="home.html">Home</a></li>
    <li class><a href="toko.html">About</a></li>
    <li><a href="updatebarang.html">Update</a></li>


  </ul>
  <h1 style="color:#3b5998" >Data Barang toko buku Gunung Agung</h1>
  <p>Berikut adalah data barang yang tersedia</p>
  <div class="row">
    <div class="col-sm-4 col-sm-push-8"


    <form>
      <!-- ini adalah fungsi serach pada kolom ukuran 4 -->

    <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari Barang">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
    <br>

    </form>

  <form>
    <!-- ini adalah fungsi mengisi biodata untuk menambahkan data pegawai pada kolom ukuran 4 -->

    <div class="form-group">
      <label for="usr">Id barang</label>
      <input type="text" class="form-control" placeholder="Id lengkap" id="usr">
    </div>
    <div class="form-group">
      <label for="user">Nama barang</label>
      <input type="text" class="form-control" placeholder="Nama barang" id="usr">
    </div>

    <div class="form-group">
      <label for="user">Harga satuan</label>
      <input type="text" class="form-control" placeholder="Harga satuan" id="usr">
    </div>
    <div class="form-group">
      <label for="user">Pajak barang</label>
      <input type="text" class="form-control" placeholder="Pajak barang"  id="usr">
    </div>
      <br>


  </form>
<div>  <p>Klik tombol dibawah ini untuk menambahkan data karyawan</p>
  <button type="button" class="btn btn-primary">Tambahkan Data</button> </div>




</div>

    <div class="col-sm-8 col-sm-pull-4" style="background-color:#adff00;" div class="container">
  <h2 style="color:	#000000">Data barang</h2>
  <hr>

  <div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Id barang</th>
        <th>Nama barang</th>
        <th>Harga satuan</th>
        <th>Pajak barang</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>171517</td>
        <td>SMART POCKET FC1 D</td>
        <td>rp.9.900,00</td>
        <td>rp.1.100,00</td>
        <td> <button type="button" class="btn btn-warning">Hapus</button> </td>
        <td> <a href="updatebarang.html" class="btn btn-warning">Update</a> </td>
      </tr>
      <tr>
        <td>2</td>
        <td>181112</td>
        <td>ENVELOPE AIR MAIL</td>
        <td>rp.3.150,00</td>
        <td>rp.450,00</td>
        <td> <button type="button" class="btn btn-warning">Hapus</button> </td>
        <td> <a href="updatebarang.html" class="btn btn-warning">Update</a> </td>
      </tr>
      <tr>
        <td>3</td>
        <td>250581</td>
        <td>BUKU TULIS EB 58 L</td>
        <td>rp.6.750,00</td>
        <td>rp.750,00</td>
        <td> <button type="button" class="btn btn-warning">Hapus</button> </td>
        <td> <a href="updatebarang.html" class="btn btn-warning">Update</a> </td>
      </tr>
      <tr>
        <td>4</td>
        <td>250216</td>
        <td>SAMPUL CKT KW/20LB</td>
        <td>rp.5.310,00</td>
        <td>rp.590,00</td>
        <td> <button type="button" class="btn btn-warning">Hapus</button> </td>
        <td> <a href="updatebarang.html" class="btn btn-warning">Update</a> </td>
      </tr>
      <tr>
        <td>5</td>
        <td>252950</td>
        <td>PENCIL LUMOGRAPH 1</td>
        <td>rp.4.950,00</td>
        <td>rp.550,00</td>
        <td> <button type="button" class="btn btn-warning">Hapus</button> </td>
        <td> <a href="updatebarang.html" class="btn btn-warning">Update</a> </td>
      </tr>
      <tr>
        <td>6</td>
        <td>020018</td>
        <td>PLASTIC BAG B MERA</td>
        <td>rp.0</td>
        <td>rp.0</td>
        <td> <button type="button" class="btn btn-warning">Hapus</button> </td>
        <td> <a href="updatebarang.html" class="btn btn-warning">Update</a> </td>
      </tr>
    </tbody>
  </table>
  </div>

  </div>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stok barang</title>
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
    <li><a href="updatestok.html">Update</a></li>


  </ul>

  <h1 style="color:#3b5998" >Data Barang toko buku Gunung Agung</h1>
  <p>Berikut adalah stok barang yang tersedia</p>
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
      <label for="usr">Id stok</label>
      <input type="text" class="form-control" placeholder="Id stok" id="usr">
    </div>
    <div class="form-group">
      <label for="user">Id barang</label>
      <input type="text" class="form-control" placeholder="Id barang" id="usr">
    </div>

    <div class="form-group">
      <label for="user">Jumlah Stok awal</label>
      <input type="text" class="form-control" placeholder="Stok awal" id="usr">
    </div>
    <div class="form-group">
      <label for="user">Jumlah Stok update</label>
      <input type="text" class="form-control" placeholder="Stok update"  id="usr">
    </div>
    <div class="form-group">
      <label for="user">Tanggal awal</label>
      <input type="text" class="form-control" placeholder="Tanggal awal"  id="usr">
      <div class="form-group">
        <label for="user">Tanggal akhir</label>
        <input type="text" class="form-control" placeholder="Tanggal akhir"  id="usr">
      </div>
    </div>
      <br>


  </form>
<div>  <p>Klik tombol dibawah ini untuk menambahkan data stok</p>
  <button type="button" class="btn btn-primary">Tambahkan Data</button> </div>




</div>

    <div class="col-sm-8 col-sm-pull-4" style="background-color:#ffc2cd;" div class="container">
  <h2 style="color:	#000000">Data barang</h2>
  <hr>

  <div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Id Stok </th>
        <th>Id barang</th>
        <th>Jumlah Stok awal</th>
        <th>Jumlah Stok update</th>
        <th>Tanggal awal</th>
        <th>Tanggal Akhir</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>345432</td>
        <td>171517</td>
        <td>200 </td>
        <td>150 </td>
        <td>01/12/2016</td>
        <td>04/12/2017</td>
        <td> <button type="button" class="btn btn-warning">Hapus</button> </td>
        <td> <a href="updatestok.html" class="btn btn-warning">Update</a> </td>
      </tr>
      <tr>
        <td>2</td>
        <td>345433</td>
        <td>181112</td>
        <td>330</td>
        <td>400</td>
        <td>02/12/2016</td>
        <td>06/12/2017</td>

    <td> <button type="button" class="btn btn-warning">Hapus</button> </td>
    <td> <a href="updatestok.html" class="btn btn-warning">Update</a> </td>
      </tr>
      <tr>
        <td>3</td>
        <td>345434</td>
        <td>250581</td>
        <td>180</td>
        <td>267</td>
        <td>08/12/2016</td>
        <td>04/12/2017</td>
        <td> <button type="button" class="btn btn-warning">Hapus</button> </td>
      <td> <a href="updatestok.html" class="btn btn-warning">Update</a> </td>
      </tr>
      <tr>
        <td>4</td>
        <td>345435</td>
        <td>250216</td>
        <td>500</td>
        <td>690</td>
        <td>09/02/2016</td>
        <td>04/12/2017</td>
        <td> <button type="button" class="btn btn-warning">Hapus</button> </td>
      <td> <a href="updatestok.html" class="btn btn-warning">Update</a> </td>
      </tr>
      <tr>
        <td>5</td>
        <td>345436</td>
        <td>252950</td>
        <td>200</td>
        <td>500</td>
        <td>02/06/2016/td>
        <td>12/12/2017</td>
        <td> <button type="button" class="btn btn-warning">Hapus</button> </td>
      <td> <a href="updatestok.html" class="btn btn-warning">Update</a> </td>
      </tr>
      <tr>
        <td>6</td>
        <td>345437</td>
        <td>020018</td>
        <td>100</td>
        <td>200</td>
        <td>16/06/2016</td>
        <td>24/12/2017</td>
        <td> <button type="button" class="btn btn-warning">Hapus</button> </td>
    <td> <a href="updatestok.html" class="btn btn-warning">Update</a> </td>
      </tr>
    </tbody>
  </table>
  </div>

  </div>
</div>

</body>
</html>

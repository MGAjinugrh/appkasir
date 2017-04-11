<?php
include('../config.php');
include('../../checklogin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Barang</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../assets/css/plugins/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/css/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="container-fluid">
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
  <h1 style="color:#3b5998" >Data Barang toko buku Gunung Agung</h1>
  <p>Berikut adalah data barang yang tersedia</p>
  <div class="row">
    <div class="col-sm-4 col-sm-push-8">

  <form action="search.php" method="post">
      <!-- ini adalah fungsi serach pada kolom ukuran 4 -->

    <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari Barang" name="nama" required>
      <div class="input-group-btn">
        <input type="submit" value="Go" class="btn btn-default">
      </div>
    </div>
    <br>

  </form>

  <form action="input.php" method="post">
    <!-- ini adalah fungsi mengisi biodata untuk menambahkan data pegawai pada kolom ukuran 4 -->
    <input type="text" name="action" value="1" hidden="true">

    <div class="form-group">
      <label>Kode barang</label>
      <input type="text" class="form-control" placeholder="Kode Barang (11 Karakter)" name="kdbarang" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required="true" maxlength="6">
    </div>
    <div class="form-group">
      <label>Nama barang</label>
      <input type="text" class="form-control" placeholder="Nama barang" name="nmbarang" required="true" maxlength="20">
    </div>

    <div class="form-group">
      <label>Harga satuan</label>
      <input type="text" class="form-control" placeholder="Harga satuan jual barang" name="hgjual" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required="true">
    </div>
    <div class="form-group">
      <label>Pajak barang</label>
      <input type="text" class="form-control" placeholder="Pajak per satuan barang"  name="pajak" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required="true">
    </div>
      <br>
    <div>
      <input type="submit" value="Tambah Data" class="btn btn-success">
    </div>
  </form>
</div>

    <div class="col-sm-8 col-sm-pull-4" style="background-color:#adff00;" div class="container">
  <h2 style="color:	#000000">Data barang</h2>
  <hr>

  <div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga Jual</th>
        <th>Pajak Barang</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
<?php
  $barang = mysql_query("SELECT * FROM barang") or die(mysql_error());

  $no = 1;
  while($dbarang = mysql_fetch_array($barang)){
    if($_SESSION['jabatan'] == 1){
  ?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $dbarang['kdbarang'];?></td>
      <td><?php echo $dbarang['nmbarang'];?></td>
      <td><?php echo "Rp. ".$dbarang['hgjual'].",00";?></td>
      <td><?php echo "Rp. ".$dbarang['pajak'].",00";?></td>
      <td><a href="update.php?kdbarang=<?php echo $dbarang['kdbarang'];?>" class="btn btn-warning">Update</a> <a href="delete.php?kdbarang=<?php echo $dbarang['kdbarang'];?>" class="btn btn-warning">Delete</a></td>
    </tr>
<?php
    }else if($_SESSION['jabatan'] = 2){
?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $dbarang['kdbarang'];?></td>
      <td><?php echo $dbarang['nmbarang'];?></td>
      <td><?php echo "Rp. ".$dbarang['hgjual'].",00";?></td>
      <td><?php echo "Rp. ".$dbarang['pajak'].",00";?></td>
      <td> -Tidak Tersedia- </td>
    </tr>
<?php
    }
  }
?>
    </tbody>
  </table>
  </div>

  </div>
</div>
    <!-- jQuery -->
    <script src="../../assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../assets/js/plugins/metismenu/jquery.metisMenu.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../assets/js/sb-admin.js"></script>

</body>
</html>

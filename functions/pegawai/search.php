<?php
include('../config.php');
include('../../checklogin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pegawai</title>
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

  <h1 style="color:#3b5998" >Data Karyawan Toko Buku Gunung Agung</h1>
  <p>Berikut adalah data lengkap karyawan Gunung Agung</p>
  <div class="row">
    <div class="col-sm-4 col-sm-push-8">
  <form action="" method="post">
      <!-- ini adalah fungsi serach pada kolom ukuran 4 -->

    <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari Karyawan" name="nama">
      <div class="input-group-btn">
        <input class="btn btn-default" type="submit" value="Go">
      </div>
    </div>
    <br>

  </form>

  <form action="input.php" method="post">
    <!-- ini adalah fungsi mengisi biodata untuk menambahkan data pegawai pada kolom ukuran 4 -->
    <input type="text" name="action" value="1" hidden="true">
    <div class="form-group">
      <label>ID Pegawai</label>
      <input type="text" class="form-control" placeholder="11 karakter angka" name="id" maxlength="11"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" required="true">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" placeholder="Maks 50 karakter" maxlength="50" required name="password">
    </div>
    <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" placeholder="Nama lengkap (Maks 25 karakter)" name="nama" maxlength="25" required="true">
    </div>
    <div class="form-group">
      <label>No.Telp</label>
      <input type="text" class="form-control" placeholder="No.Telepon" name="notelp" required="true" maxlength="15" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <textarea class="form-control" rows="3" name="alamat"></textarea>
    </div>
    <div>
      <input type="submit" value="Tambah Data" class="btn btn-success">
    </div>
  </form>
</div>

    <div class="col-sm-8 col-sm-pull-4" style="background-color:#c9c9ff;" div class="container">
  <h2 style="color:	#000000">Data Karyawan</h2>
  <hr>

  <div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama</th>
        <th>No.Telp</th>
        <th>Alamat</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
<?php
$nama = mysql_real_escape_string($_POST['nama']);
  $pegawai = mysql_query("SELECT * FROM pegawai WHERE nama LIKE '%".$nama."%' AND id!=".$_SESSION['id']."");
  echo mysql_error();
  $no = 1;
  while($dpegawai = mysql_fetch_array($pegawai)){
  ?>
  <tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $dpegawai['nama'];?></td>
    <td><?php echo $dpegawai['notelp'];?></td>
    <td><?php echo $dpegawai['alamat'];?></td>
    <td><a href="update.php?id=<?php echo $dpegawai['id'];?>" class="btn btn-warning">Update</a> <a href="delete.php?id=<?php echo $dpegawai['id'];?>" class="btn btn-warning">Delete</a></td>
  </tr>
<?php
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
    <script src="../../assets/js/plugins/metismenu/metisMenu/dist/.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../assets/js/sb-admin.js"></script>

</body>
</html>

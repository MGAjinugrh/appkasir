<?php
include('../config.php');
include('../../checklogin.php');
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stok barang</title>
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
  <p>Berikut adalah stok barang yang tersedia</p>
  <div class="row">
    <div class="col-sm-4 col-sm-push-8">


  <form action="search.php" method="post">
      <!-- ini adalah fungsi serach pada kolom ukuran 4 -->

    <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari Barang" name="id" maxlength="11" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
    <br>
  </form>

  <form action="input.php" method="post">
    <!-- ini adalah fungsi mengisi biodata untuk menambahkan data stok pada kolom ukuran 4 -->
    <input type="text" name="action" value="1" hidden="true">

    <div class="form-group">
      <label>Id</label>
      <input type="text" class="form-control" placeholder="Id stok" name="id" maxlength="11" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
    </div>
    <div class="form-group">
      <label>Id barang</label>
      <select name="kdbarang" class='form-control'>
      <?php 

      $qbar = mysql_query("SELECT * FROM barang");
      while($dbar = mysql_fetch_array($qbar)){
        echo "<option value='".$dbar['kdbarang']."'>".$dbar['nmbarang']."</option>";
      }
      ?>
      </select>
    </div>

    <div class="form-group">
      <label>Jumlah Stok awal</label>
      <input type="text" class="form-control" placeholder="Stok awal" name="stokawal">
    </div>
      <br>
    <div class="form-group">
      <input type="submit" value="Tambah Data" class="btn btn-success">
    </div>
  </form>

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
        <th>Barang</th>
        <th>Jumlah Stok awal</th>
        <th>Jumlah Stok update</th>
        <th>Tanggal awal</th>
        <th>Tanggal Akhir</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
<?php
  $stok = mysql_query("SELECT a.id, (SELECT nmbarang FROM barang WHERE kdbarang=a.kdbarang) AS nmbarang, a.jstokawal, a.jstokupdate, a.tglawal, a.tglupdate FROM stok AS a") or die(mysql_error());

  $no = 1;
  while($dstok = mysql_fetch_array($stok)){
    if($_SESSION['jabatan'] == 1){
  ?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $dstok['id'];?></td>
      <td><?php echo $dstok['nmbarang'];?></td>
      <td><?php echo $dstok['jstokawal'];?></td>
      <td><?php echo $dstok['jstokupdate'];?></td>
      <td><?php echo date("j F Y H:i:s", strtotime($dstok['tglawal']));?></td>
      <td><?php echo date("j F Y H:i:s", strtotime($dstok['tglupdate']));?></td>
      <td><a href="update.php?id=<?php echo $dstok['id'];?>" class="btn btn-warning">Update</a> <a href="delete.php?id=<?php echo $dstok['id'];?>" class="btn btn-warning">Delete</a></td>
    </tr>
<?php
    }else if($_SESSION['jabatan'] = 2){
?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $dstok['id'];?></td>
      <td><?php echo $dstok['nmbarang'];?></td>
      <td><?php echo $dstok['jstokawal'];?></td>
      <td><?php echo $dstok['jstokupdate'];?></td>
      <td><?php echo date("j F Y H:i:s", strtotime($dstok['tglawal']));?></td>
      <td><?php echo date("j F Y H:i:s", strtotime($dstok['tglupdate']));?></td>
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

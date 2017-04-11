<?php
include('../config.php');
include('../../checklogin.php');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Update stok</title>
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
<?php
  $kdbarang = $_GET['kdbarang'];
  $barang = mysql_query("SELECT * FROM barang WHERE kdbarang='".$kdbarang."'") or die(mysql_error());
  while($dbarang = mysql_fetch_array($barang)){
  ?>
  <form action="input.php" method="post">
    <!-- ini adalah fungsi mengisi biodata untuk menambahkan data pegawai pada kolom ukuran 4 -->
    <input type="text" name="action" value="2" hidden="true">

    <div class="form-group">
      <label>Kode barang</label>
      <input type="text" class="form-control" placeholder="Kode Barang (11 Karakter)" name="kdbarang" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required="true" maxlength="6" readonly value="<?php echo $dbarang['kdbarang'] ?>">
    </div>
    <div class="form-group">
      <label>Nama barang</label>
      <input type="text" class="form-control" placeholder="Nama barang" name="nmbarang" required="true" maxlength="20" value="<?php echo $dbarang['nmbarang'] ?>">
    </div>

    <div class="form-group">
      <label>Harga satuan</label>
      <input type="text" class="form-control" placeholder="Harga satuan jual barang" name="hgjual" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required="true" value="<?php echo $dbarang['hgjual'] ?>">
    </div>
    <div class="form-group">
      <label>Pajak barang</label>
      <input type="text" class="form-control" placeholder="Pajak per satuan barang"  name="pajak" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required="true" value="<?php echo $dbarang['pajak'] ?>">
    </div>
      <br>
    <div>
      <input type="submit" value="Tambah Data" class="btn btn-success">
      <a href="view.php" class="btn btn-default">Back</a>
    </div>
  </form>

</div>
<?php } ?>
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

<?php
include('../config.php');
include('../../checklogin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Transaksi Penjualan | APPKASIR</title>
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
		<br>
	</div>
	<form action="input.php" method="post" target="_blank">
	<div class="container">
		<div class="col-lg-12">
		<div class="panel panel-default">
		<div class="panel-body">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Kode Transaksi</label>
				<input type="text" id="kdtransaksi" name="kdtransaksi" value="<?php echo substr($_SESSION['id'],0,3).'-'.substr(date('y/m/d-H:i:s'), 0); ?>" class="form-control" readonly="true">
			</div>
			<div class="form-group">
				<label>Kode Barang</label>
				<select class="form-control" id="kdbarang" onchange="getharga(this.value)">
				<option>--Please Select--</option>
					<?php
						$barang = mysql_query("SELECT * FROM barang") or die(mysql_error());

						$no = 1;
						while($dbarang = mysql_fetch_array($barang)){
							echo "<option value=".$dbarang['kdbarang'].">".$dbarang['nmbarang']." (".$dbarang['kdbarang'].")</option>";
						}

				  	?>
				</select>
			</div>
			<div class="form-group">
				<label>Jumlah</label>
				<input type="text" id="jml" maxlength="11" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required="true" class="form-control">
			</div>
			<div class="form-group">
				<a class="btn btn-default pull-left" onclick="addrow()">Tambahkan</a>
			</div>
		</div>
		<div class="pull-right col-lg-6">
			<div class="form-group" id="pricehere">
				<div class='form-group'>
				<label>Harga Satuan</label>
				<input type='text' class='form-control' id='hgjual' value='' readonly>
				</div>
				<div class='form-group'>
				<label>Pajak</label>
				<input type='text' class='form-control' id='pajak' value='' readonly>
				</div>
			</div>
		</div>
		</div>
		</div>
		</div>
	</div>
	<div class="container">
	<div class="col-lg-12">
		<div class="row clearfix">
			<div class="col-md-12 column">
				<table class="table table-bordered table-hover table-danger text-center" id="myTable">
					<thead>
						<tr>
							<th class="text-center">
							#
							</th>
							<th class="text-center">No. Penjualan</th>
							<th class="text-center">Kode Barang</th>
							<th class="text-center">Jumlah</th>
							<th class="text-center">Harga Satuan</th>
							<th class="text-center">Pajak</th>
							<th class="text-center">Harga Total</th>
						</tr>
					</thead>
					<tbody>
					<tr></tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>
	<div class="container">
		<div class="col-lg-6">
			<a class="btn btn-default" onclick="totalbiaya()">Hitung Total Biaya</a>
		</div>
		<div class="col-lg-6 text-right">
			<a class="btn btn-default" onclick="deleterow()">Hapus</a>
		</div>
	</div>
	<div class="container">
		<input type="text" name="rowCount" id="sumofdata" hidden="">
		<div class="col-lg-3">
			<div class="form-group">
				<label>Biaya Total</label>
				<input type="text" id="biaya" name="biaya" class="form-control" readonly="">
				<input type="text" id="totaljml" name="totaljml" hidden="true">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-lg-3">
			<div class="form-group">
				<label>Bayar</label>
				<input type="text" id="bayar" name="bayar" class="form-control">
				<div id="notif"></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-lg-3">
			<div class="form-group">
				<label>Kembali</label>
				<input type="text" id="kembali" name="kembali" class="form-control" readonly="">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-lg-12">
			<a class="btn btn-default" onclick="getkembali()">Hitung Kembalian</a>
			<input type="Submit" value="Simpan & Cetak" class="btn btn-default">
		</div>
	</div>
	</form>
	<script type="text/javascript">

	function getkembali(){
		var biaya = parseFloat(document.getElementById("biaya").value);
		var bayar = parseFloat(document.getElementById("bayar").value);

		var kembali = bayar - biaya;
		if(bayar == null){
			notif = "Isi biaya terlebih dahulu.";
			document.getElementById("notif").innerHTML = notif;
		}else if (bayar < biaya) {
			notif = "Bayaran anda kurang.";
			document.getElementById("notif").innerHTML = notif;
		}else{
			document.getElementById("kembali").value = kembali;
			notif = "";
			document.getElementById("notif").innerHTML = notif;
		}
	}

	function totalbiaya()
	{
		var biaya = document.getElementsByClassName("hgtotal");
		var biayaCount = biaya.length;
		var total_biaya = 0;
		
		for(var i = 0; i < biayaCount; i++)
		{
			total_biaya = total_biaya +  parseInt(biaya[i].value);
		}
		document.getElementById('biaya').value = total_biaya;

		var totaljml = document.getElementsByClassName("jml");
		var totaljmlCount = totaljml.length;
		var total_totaljml = 0;
		
		for(var i = 0; i < totaljmlCount; i++)
		{
			total_totaljml = total_totaljml +  parseInt(totaljml[i].value);
		}
		document.getElementById('totaljml').value = total_totaljml;
	}

	function getharga(barang) {
		if (barang=="") {
			document.getElementById("pricehere").innerHTML="";
			return;
		} 
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (this.readyState==4 && this.status==200) {
				document.getElementById("pricehere").innerHTML=this.responseText;
			}
		}

		xmlhttp.open("GET","getharga.php?kdbarang="+barang,true);
		xmlhttp.send();
	}


	function addrow(){
		// Find a <table> element with id="myTable":
		var table = document.getElementById("myTable");
		var select_barang = document.getElementById("kdbarang");
		var kdbarang = select_barang.options[select_barang.selectedIndex].value;
		var jumlah = parseInt(document.getElementById("jml").value);
		var hgjual = parseFloat(document.getElementById("hgjual").value);
		var pajak = parseFloat(document.getElementById("pajak").value);
		hgtotal = parseFloat(jumlah * (hgjual + pajak));

		// Create an empty <tr> element and add it to the 1st position of the table:
		var rowCount = table.rows.length;
		var row = table.insertRow(-1);
		var no = -1;
		// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
		var cell0 = row.insertCell(0);
		var cell1 = row.insertCell(1);
		var cell2 = row.insertCell(2);
		var cell3 = row.insertCell(3);
		var cell4 = row.insertCell(4);
		var cell5 = row.insertCell(5);
		var cell6 = row.insertCell(6);

		while (no < rowCount){
			// Add some text to the new cells:
			cell0.innerHTML = no;
			cell1.innerHTML = "<input type='text' class='form-control' value='<?php echo substr($_SESSION['id'],0,3).substr(date('ymdHis'),0);?>"+no+"' name='nmrpenjualan[]' readonly>";
			cell2.innerHTML = "<input type='text' class='form-control' value='"+kdbarang+"' name='kdbarang[]' readonly>";
			cell3.innerHTML = "<input type='text' class='form-control jml' value='"+jumlah+"' name='jml[]' readonly>";
			cell4.innerHTML = "<input type='text' class='form-control' value='"+hgjual+"' name='hgjual[]' readonly>";
			cell5.innerHTML = "<input type='text' class='form-control' value='"+pajak+"' name='pajak[]' readonly>";
			cell6.innerHTML = "<input type='text' class='form-control hgtotal' value='"+hgtotal+"' name='hgtotal[]' readonly>";
			no++;

		}

		document.getElementById("sumofdata").value = rowCount;
	}

	function deleterow() {
	var table = document.getElementById("myTable");
	var rowCount = table.rows.length;
	document.getElementById("myTable").deleteRow(rowCount -1);
	}   

	</script>
	<!-- jQuery -->
	<script src="../../assets/js/jquery-1.10.2.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="../../assets/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="../../assets/js/plugins/metismenu/jquery.metisMenu.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../../assets/js/sb-admin.js"></script>

</body>
</html>
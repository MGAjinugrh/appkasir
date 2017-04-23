	<?php

	include('../config.php');
	include('../../checklogin.php');

	$rowCount = $_POST['rowCount'];
	$kdtransaksi = $_POST['kdtransaksi'];
	$datenow = date('Y-m-d H:i:s');

	for ($i=0; $i < ($rowCount - 1) ; $i++) { 
		$nmrpenjualan[$i] = $_POST['nmrpenjualan'][$i];
		$kdbarang[$i] = $_POST['kdbarang'][$i];
		$jml[$i] = $_POST['jml'][$i];
		$hgjual[$i] = $_POST['hgjual'][$i];
		$pajak[$i] = $_POST['pajak'][$i];
		$hgtotal[$i] = $_POST['hgtotal'][$i];

		//echo $nmrpenjualan[$i]."<br>";

		$getstok = mysql_query("SELECT * FROM stok WHERE kdbarang='".$kdbarang[$i]."'");

		while ($dstok = mysql_fetch_array($getstok)) {
			$stokupdate[$i] = $dstok['jstokupdate'] - $jml[$i];
			
			mysql_query("UPDATE stok SET jstokupdate='".$stokupdate[$i]."', tglupdate='".$datenow."' WHERE kdbarang='".$kdbarang[$i]."'") or die(mysql_error());
	
			mysql_query("INSERT INTO penjualan (nmrpenjualan,kdtransaksi,kdbrg,idpegawai,jmlbrg,hgtotal,tglpenjualan) VALUES ('".$nmrpenjualan[$i]."','".$kdtransaksi."','".$kdbarang[$i]."','".$_SESSION['id']."','".$jml[$i]."','".$hgtotal[$i]."','".date('Y-m-d H:i:s')."')") or die(mysql_error());
			//echo $kdbarang[$i]." ".$stokupdate[$i]."<br>";
		}


	}

	$totaljml = $_POST['totaljml'];
	$biaya = $_POST['biaya'];
	$bayar = $_POST['bayar'];
	$kembali = $_POST['kembali'];

	mysql_query("INSERT INTO transaksi (kdtransaksi,totaljml,biaya,bayar,kembali) VALUES ('".$kdtransaksi."','".$totaljml."','".$biaya."','".$bayar."','".$kembali."')") or die(mysql_error());

	header("location:receipt.php?kdtransaksi=".$kdtransaksi);

	?>
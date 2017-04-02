<?php
date_default_timezone_set("Asia/Bangkok");
include('../config.php');
include('../../checklogin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Receipt</title>
</head>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 1mm;  /* this affects the margin in the printer settings */
        paper-size:A5;

    }
    @media print {
	body * {
    	visibility: hidden;
	}
	#section-to-print, #section-to-print * {
    	visibility: visible;
		border: 1px;
		padding: 10px;
	}

</style>
<body>
<?php

?>
<div id="section-to-print" style="text-align: center; font-family:monospace;">
	<?php
	$toko = mysql_query("SELECT * FROM toko");

	while($dtoko = mysql_fetch_array($toko)){
	?>
	<?php echo $dtoko['NmToko'];?><br><?php echo $dtoko['Alamat']."/Telp.".$dtoko['NoTelp'];
	}?>
	<br><br><?php echo date("Y/m/d-H:i"); ?>
<?php
	$pegawai = mysql_query("SELECT * FROM pegawai WHERE id='".$_SESSION['id']."'");

	while($dpegawai = mysql_fetch_array($pegawai)){
	?>
	<?php echo $dpegawai['nama']."-".$dpegawai['id'];
	}?>
	<br>=========================================<br>
	=========================================<br><br>
	<center>
	<table border="1" padding="100">
		<tr>
			<td>ITEM</td>
			<td>:</td>
			<td></td>
			<td>NET</td>
			<td>:</td>
			<td></td>
		</tr>
	</table>
	</center>
	TERIMA KASIH ATAS KUNJUNGAN ANDA<br>
	BARANG YG SDH DIBELI TDK DAPAT DITUKAR<br>
	Harga termasuk PPN

</div>
<button onClick="window.print();">Print</button>
</body>
</html>
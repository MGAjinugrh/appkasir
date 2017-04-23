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
	<br>
	<?php echo $_GET['kdtransaksi'];?>
	<br>
	<br>
<?php echo date("Y/m/d-H:i"); ?>
<?php
	$pegawai = mysql_query("SELECT * FROM pegawai WHERE id='".$_SESSION['id']."'");

	while($dpegawai = mysql_fetch_array($pegawai)){
	?>
	<?php echo $dpegawai['nama']."-".substr($dpegawai['id'],0,3);
	}?>
	<center>
	<table>
	<tr><td colspan="4">====================================</td></tr>
		<?php
			$penjualan = mysql_query("SELECT a.kdbrg, (SELECT nmbarang FROM barang WHERE kdbarang=a.kdbrg) AS nmbarang, a.jmlbrg, a.hgtotal FROM penjualan AS a WHERE kdtransaksi='".$_GET['kdtransaksi']."'") or die(mysql_error());
			while ($dpenjualan = mysql_fetch_array($penjualan)) {
				echo "<tr>";
				echo "<td style='padding-left: 5px;'>".$dpenjualan['kdbrg']."</td>";
				echo "<td style='padding-left: 5px;'>".$dpenjualan['nmbarang']."</td>";
				echo "<td style='padding-left: 5px;'>".$dpenjualan['jmlbrg']."</td>";
				echo "<td style='padding-left: 5px;'>".number_format($dpenjualan['hgtotal'],0,"","")."</td>";
				echo "</tr>";
			}
		?>
		<tr><td colspan="4" style="text-align: right; padding-top: 10px;">===============</td></tr>
		<tr>
		<?php
			$transaksi = mysql_query("SELECT * FROM transaksi WHERE kdtransaksi='".$_GET['kdtransaksi']."'");

			while ($dtransaksi = mysql_fetch_array($transaksi)) {
				echo "<td>ITEM	:</td>";
				echo "<td style='text-align:right;'>".$dtransaksi['totaljml']."</td>";
				echo "<td>NET	:</td>";
				echo "<td style='text-align:right;'>".number_format($dtransaksi['biaya'],0,"",".")."</td>";
		?>
		</tr>
		<tr>
			<?php
				echo "<td>CASH</td>";
				echo "<td>:</td>";
				echo "<td colspan='2' style='text-align:right;'>".number_format($dtransaksi['bayar'],0,"",".")."</td>";
			?>
		</tr>
		<tr>
			<?php
				echo "<td>CHANGE</td>";
				echo "<td>:</td>";
				echo "<td colspan='2' style='text-align:right;'>".number_format($dtransaksi['kembali'],0,"",".")."</td>";
			} 
			?>
		</tr>	</table>
	</center>
	TERIMA KASIH ATAS KUNJUNGAN ANDA<br>
	BARANG YG SDH DIBELI TDK DAPAT DITUKAR<br>
	Harga termasuk PPN

</div>
<button onClick="window.print();">Print</button>
</body>
</html>
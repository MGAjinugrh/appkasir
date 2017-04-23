<?php
include('../config.php');
include('../../checklogin.php');

$kdbarang = $_GET['kdbarang'];

$barang = mysql_query("SELECT * FROM barang WHERE kdbarang='".$kdbarang."'");

while ($dbarang = mysql_fetch_array($barang)) {
	echo "<div class='form-group'>";
	echo "<label>Harga Satuan</label>";
	echo "<input type='text' class='form-control' id='hgjual' value='".$dbarang['hgjual']."' readonly>";
	echo "</div>";
	echo "<div class='form-group'>";
	echo "<label>Pajak</label>";
	echo "<input type='text' class='form-control' id='pajak' value='".$dbarang['pajak']."' readonly>";
	echo "</div>";
}
?>
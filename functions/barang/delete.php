<?php
include('../config.php');
$kdbarang = $_GET['kdbarang'];

$query = mysql_query("DELETE FROM barang WHERE kdbarang='".$kdbarang."'");

if($query){
	//alamat tampilan dibikin sm fariz & anggi
	header('location:view.php');
}else{
	die(mysql_error());
}

?>
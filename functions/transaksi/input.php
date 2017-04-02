<?php

include('../config.php');

$nmrpenjualan = $_POST['nmrpenjualan'];
$kdbarang = $_POST['kdbarang'];
$jmlstokbarang = $_POST['jmlstokbarang'];
$action = $_POST['action'];

//bagian bambang sm jihad bikin query
$query = mysql_query("query input");

if($query){
	//alamat tampilan dibikin sm fariz & anggi
	header('location:../../transaksi/input.php');
}else{
	die(mysql_error());
}

?>
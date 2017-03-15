<?php

include('../config.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$hgjual = $_POST['hgjual'];
$pajak = $_POST['pajak'];
$action = $_POST['action'];

//bagian bambang sm jihad bikin query
if($action == "1"){
	$query = mysql_query("query input");
}else if $action == "2"{
	$query = mysql_query("query update");
}

if($query){
	//alamat tampilan dibikin sm fariz & anggi
	header('location:../../barang/input.php');
}else{
	die(mysql_error());
}

?>
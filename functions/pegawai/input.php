<?php

include('../config.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$status = $_POST['status'];
$action = $_POST['action'];

//bagian bambang sm jihad bikin query
if($action == "1"){
	$query = mysql_query("query input");
}else if $action == "2"{
	$query = mysql_query("query update");
}

if($query){
	//alamat tampilan dibikin sm fariz & anggi
	header('location:../../pegawai/input.php');
}else{
	die(mysql_error());
}

?>
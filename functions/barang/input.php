<?php

include('../config.php');

$kdbarang = $_POST['kdbarang'];
$nmbarang = $_POST['nmbarang'];
$hgjual = $_POST['hgjual'];
$pajak = $_POST['pajak'];
$action = $_POST['action'];

//bagian bambang sm jihad bikin query
if($action == "1"){
	$query = mysql_query("INSERT INTO barang (kdbarang,nmbarang,hgjual,pajak) VALUES ('$kdbarang','$nmbarang','$hgjual','$pajak')");
}else if($action == "2"){
	$query = mysql_query("UPDATE barang SET nmbarang='$nmbarang', hgjual='$hgjual', pajak='$pajak' WHERE kdbarang='$kdbarang'");
}

if($query){
	//alamat tampilan dibikin sm fariz & anggi
	header('location:view.php');
}else{
	die(mysql_error());
}

?>
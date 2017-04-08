<?php

include('../config.php');

$id = mysql_real_escape_string($_POST['id']);
$password = mysql_real_escape_string($_POST['password']);
$nama = mysql_real_escape_string($_POST['nama']);
$alamat = mysql_real_escape_string($_POST['alamat']);
$notelp = mysql_real_escape_string($_POST['notelp']);
$action = mysql_real_escape_string($_POST['action']);

if($action == "1"){
	$query = mysql_query("INSERT INTO pegawai (id,password,nama,alamat,notelp) VALUES('".$id."','".$password."','".$nama."','".$alamat."','".$notelp."')");
}else if($action == "2"){
	$query = mysql_query("query update");
}

if($query){
	//alamat tampilan dibikin sm fariz & anggi
	header('location:view.php');
}else{
	die(mysql_error());
}

?>
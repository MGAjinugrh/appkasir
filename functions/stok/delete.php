<?php
include('../config.php');
$id = $_GET['id'];

$query = mysql_query("DELETE FROM stok WHERE id='".$id."'");

if($query){
	//alamat tampilan dibikin sm fariz & anggi
	header('location:view.php');
}else{
	die(mysql_error());
}

?>
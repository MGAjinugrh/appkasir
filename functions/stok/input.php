<?php

include('../config.php');
date_default_timezone_get('Asia/Jakarta');

$id = mysql_real_escape_string($_POST['id']);
$date = date('Y-m-d H:i:s');
$action = mysql_real_escape_string($_POST['action']);


if($action == "2"){
	$kdbarang = 0;
	$stokawal = 0;
	$stokupdate = mysql_real_escape_string($_POST['stokupdate']);
	$query = mysql_query("UPDATE stok SET jstokupdate='".$stokupdate."', tglupdate='".$date."' WHERE id='".$id."'");
}else if($action == "1" && !isset($stokupdate)){
	$kdbarang = mysql_real_escape_string($_POST['kdbarang']);
	$stokawal = mysql_real_escape_string($_POST['stokawal']);
	$stokupdate = 0;
	$query = mysql_query("INSERT INTO stok (id,kdbarang,jstokawal,jstokupdate,tglawal,tglupdate) VALUES('".$id."','".$kdbarang."','".$stokawal."','0','".$date."','".$date."')");
}

echo $action;
if($query){
	//alamat tampilan dibikin sm fariz & anggi
	header('location:view.php');
	//echo $query;
}else{
	die(mysql_error());
}

?>
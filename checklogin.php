<?php
session_start();

//jika session id belum dibuat atau session id kosong
if (!isset($_SESSION['id']) || empty($_SESSION['id'])){
		//redirect ke halaman login
		header('location:login.php');
}
?>
<!doctype html>
<?php
session_start();

if (!empty($_SESSION['id']))
		header('location:index.php');
?>
<html>
<head>
<title>Login - Applikasi Toko Buku</title>
</head>
<body>
<div class="content">
<form name="login" action="otentikasi.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
<tr>
<td align="center" id="header">
Log In
</td>
</tr>
<tr>
<td align="center">
<input type="text" name="id" placeholder="id">
</td>
</tr>
<tr>
<td align="center">
<input type="password" name="password" placeholder="Password">
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="login" value="Login">
</td>
</tr>
<?php
//kode yang digunakan untuk menampilkan pesan error
if(!empty($_GET['error'])){
		if($_GET['error'] == 1){
				echo mysql_error();
		} else if($_GET['error'] == 2){
				echo mysql_error();
		} else if($_GET['error'] == 3){
				echo mysql_error();
		} else if($_GET['error'] == 4){
				echo "<h1>".mysql_error()."</h1>";
		}
}
?>
</table>
</form>
</div>
</body>
</html>
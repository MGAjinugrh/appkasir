<?php
include('functions/config.php');

session_start();

//tangkap data dari user form login
$id = $_POST['id'];
$password = $_POST['password'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$id = mysql_real_escape_string($id);
$password = mysql_real_escape_string($password);

//cek data yang dikirim, apakah kosong atau tidak
if(empty($id) && empty($password)){
		//kalau id dan password kosong
		header('location:login.php?error=1');
		break;
} else if(empty($id)){
		//kalau id dan password kosong
		header('location:login.php?error=2');
		break;
} else if(empty($password)){
		//kalau id dan password kosong
		header('location:login.php?error=3');
		break;
}

$q = mysql_query("SELECT * FROM pegawai WHERE id='$id' AND password='$password'");

if(mysql_num_rows($q) == 1){
		//kalau id dan password sudah terdaftar dalam database
		//buat session dengan nama id dengan isi nama id yang login
	while ($sesi = mysql_fetch_array($q)) {
		$_SESSION['id'] = $sesi['id'];
		$_SESSION['jabatan'] = $sesi['jabatan'];
		$_SESSION['status'] = $sesi['status'];
	}
		
		//redicet ke halaman index
		header('location:index.php');
		} else{
		
		//kalau id ataupun password tidak terdaftar di database
		header('location:login.php?error=4');
			echo mysql_error();
		}

?>
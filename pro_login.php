<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$user = $_POST['user'];
$pass = $_POST['pass'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from user where user='$user' and pass='$pass'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$row = mysqli_fetch_assoc($data);
if(mysqli_num_rows($data) == 0){
	header("location: index.php?pesan=gagal");
}else{
	if($row['level'] == 1){
		$_SESSION['admin'] = $user;
		echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="admin/index.php";</script>';
	}else{
		$_SESSION['guest'] = $user;
		echo '<script language="javascript">alert("Anda berhasil Login !"); document.location="guest/index.php";</script>';
	}
}
?>
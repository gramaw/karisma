<?php
include "koneksi.php";

$idjabat = $_GET['idjabat'];

$njabat = $_POST['njabat'];
$gaji = $_POST['gaji'];

$query = "SELECT * FROM jabat WHERE idjabat='".$idjabat."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);

$query = "UPDATE jabat SET njabat='".$njabat."', gaji='".$gaji."' WHERE idjabat='".$idjabat."'";
$sql = mysqli_query($conn, $query);
if($sql){
	header("location: daftar_jabat.php?pesan=berhasilubah");
}else{
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='edit_jabat.php'>Kembali Ke Form</a>";
}
?>
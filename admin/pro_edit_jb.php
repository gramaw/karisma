<?php
include "koneksi.php";

$kdjb = $_GET['kdjb'];

$namajb = $_POST['namajb'];

$query = "SELECT * FROM jenisbk WHERE kdjb='".$kdjb."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);

$query = "UPDATE jenisbk SET namajb='".$namajb."' WHERE kdjb='".$kdjb."'";
$sql = mysqli_query($conn, $query);
if($sql){
	header("location: daftar_jb.php?pesan=berhasilubah");
}else{
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='edit_jb.php'>Kembali Ke Form</a>";
}
?>
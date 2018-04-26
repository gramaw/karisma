<?php
include "koneksi.php";

$idmatk = $_GET['idmatk'];

$matk = $_POST['matk'];

$query = "SELECT * FROM merkatk WHERE idmatk='".$idmatk."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);

$query = "UPDATE merkatk SET matk='".$matk."' WHERE idmatk='".$idmatk."'";
$sql = mysqli_query($conn, $query);
if($sql){
	header("location: daftar_merk.php?pesan=berhasilubah");
}else{
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='edit_merk.php'>Kembali Ke Form</a>";
}
?>
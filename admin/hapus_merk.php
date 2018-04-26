<?php
include "koneksi.php";
$idmatk = $_GET['idmatk'];

$query = "SELECT * FROM merkatk WHERE idmatk='".$idmatk."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);

$query2 = "DELETE FROM merkatk WHERE idmatk='".$idmatk."'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: daftar_merk.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='daftar_merk.php'>Kembali</a>";
}
?>
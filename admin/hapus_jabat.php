<?php
include "koneksi.php";
$idjabat = $_GET['idjabat'];

$query = "SELECT * FROM jabat WHERE idjabat='".$idjabat."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);

$query2 = "DELETE FROM jabat WHERE idjabat='".$idjabat."'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: daftar_jabat.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='daftar_jabat.php'>Kembali</a>";
}
?>
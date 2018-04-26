<?php
include "koneksi.php";
$idkar = $_GET['idkar'];
$query = "SELECT * FROM kar WHERE idkar='".$idkar."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
$query2 = "DELETE FROM kar WHERE idkar='$idkar'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: daftar_kar.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='daftar_kar.php'>Kembali</a>";
}
?>
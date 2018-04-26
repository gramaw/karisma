<?php
include "koneksi.php";
$idjatk = $_GET['idjatk'];

$query = "SELECT * FROM jenisatk WHERE idjatk='".$idjatk."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);

$query2 = "DELETE FROM jenisatk WHERE idjatk='".$idjatk."'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: daftar_jatk.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='daftar_jatk.php'>Kembali</a>";
}
?>
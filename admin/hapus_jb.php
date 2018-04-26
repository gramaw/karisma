<?php
include "koneksi.php";
$kdjb = $_GET['kdjb'];

$query = "SELECT * FROM jenisbk WHERE kdjb='".$kdjb."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);

$query2 = "DELETE FROM jenisbk WHERE kdjb='".$kdjb."'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: daftar_jb.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='daftar_jb.php'>Kembali</a>";
}
?>
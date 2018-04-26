<?php
include "koneksi.php";
$isbn = $_GET['isbn'];
$query = "SELECT * FROM buku WHERE isbn='".$isbn."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
$query2 = "DELETE FROM buku WHERE isbn='$isbn'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: daftar_bk.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='daftar_bk.php'>Kembali</a>";
}
?>

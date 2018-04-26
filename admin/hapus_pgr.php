<?php
include "koneksi.php";
$idpgr = $_GET['idpgr'];

$query = "SELECT * FROM pgr WHERE idpgr='".$idpgr."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);

$query2 = "DELETE FROM pgr WHERE idpgr='".$idpgr."'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: daftar_pgr.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='daftar_pgr.php'>Kembali</a>";
}
?>
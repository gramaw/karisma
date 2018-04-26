<?php
include "koneksi.php";

$idjatk = $_GET['idjatk'];

$jatk = $_POST['jatk'];
$stokjatk = $_POST['stokjatk'];

$query = "SELECT * FROM jenisatk WHERE idjatk='".$idjatk."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);

$query = "UPDATE jenisatk SET jatk='".$jatk."', stokjatk='".$stokjatk."' WHERE idjatk='".$idjatk."'";
$sql = mysqli_query($conn, $query);
if($sql){
	header("location: daftar_jatk.php?pesan=berhasilubah");
}else{
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='edit_jatk.php'>Kembali Ke Form</a>";
}
?>
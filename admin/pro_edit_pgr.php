<?php
include "koneksi.php";

$idpgr = $_GET['idpgr'];

$npgr = $_POST['npgr'];
$tlpgr = $_POST['tlpgr'];
$umur = $_POST['umur'];

$query = "SELECT * FROM pgr WHERE idpgr='".$idpgr."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);

$query = "UPDATE pgr SET npgr='".$npgr."', tlpgr='".$tlpgr."', umur='".$umur."' WHERE idpgr='".$idpgr."'";
$sql = mysqli_query($conn, $query);
if($sql){
	header("location: daftar_pgr.php?pesan=berhasilubah");
}else{
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='edit_pgr.php'>Kembali Ke Form</a>";
}
?>
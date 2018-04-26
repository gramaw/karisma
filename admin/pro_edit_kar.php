<?php
include "koneksi.php";
$idkar = $_GET['idkar'];
$nkar = $_POST['nkar'];
$tlkar = $_POST['tlkar'];
$ukar = $_POST['ukar'];
$akar = $_POST['akar'];
$njkar = $_POST['njkar'];
$telkar = $_POST['telkar'];
$query = "SELECT * FROM kar WHERE idkar='".$idkar."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		$query = "UPDATE kar SET nkar='".$nkar."', tlkar='".$tlkar."', ukar='".$ukar."', akar='".$akar."', njkar='".$njkar."', telkar='".$telkar."' WHERE idkar='".$idkar."'";
	$sql = mysqli_query($conn, $query);
		header("location: daftar_kar.php?pesan=berhasilubah");
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='edit_kar.php'>Kembali Ke Form</a>";
?>
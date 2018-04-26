<?php
include "koneksi.php";
$idkar = $_POST['idkar'];
$nkar = $_POST['nkar'];
$tlkar = $_POST['tlkar'];
$ukar = $_POST['ukar'];
$akar = $_POST['akar'];
$njkar = $_POST['njkar'];
$telkar = $_POST['telkar'];
$query = "INSERT INTO kar VALUES('".$idkar."', '".$nkar."', '".$tlkar."', '".$ukar."', '".$akar."', '".$njkar."', '".$telkar."')";
	$sql = mysqli_query($conn, $query);
	if($sql){
		header("location: daftar_kar.php?pesan=berhasiltambah");
	}else{
		echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>'; 
		header("location: tambahkark.php?pesan=gagal");
	}
	?>
	
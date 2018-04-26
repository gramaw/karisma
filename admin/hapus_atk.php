<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$idatk = $_GET['idatk'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM atk WHERE idatk='".$idatk."'";
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images
// Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM atk WHERE idatk='".$idatk."'";
$sql2 = mysqli_query($conn, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: daftar_atk.php?pesan=berhasilhapus"); // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Gagal<a href='daftar_atk.php'>Kembali</a>";
}
?>

<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$idatk = $_GET['idatk'];

// Ambil Data yang Dikirim dari Form
$jatk = $_POST['jatk'];
$matk = $_POST['matk'];
$stokatk = $_POST['stokatk'];
$hargaatk = $_POST['hargaatk'];

// Cek apakah user ingin mengubah fotonya atau tidak
 // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM atk WHERE idatk='".$idatk."'";
		$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file foto sebelumnya ada di folder images
		 // Hapus file foto sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
 // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
		$query = "UPDATE atk SET jatk='".$jatk."', matk='".$matk."', stokatk='".$stokatk."', hargaatk='".$hargaatk."' WHERE idatk='".$idatk."'";
	$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: daftar_atk.php?pesan=berhasilubah"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='edit_atk.php'>Kembali Ke Form</a>";
	}
	?>
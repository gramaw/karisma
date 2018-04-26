<?php
include 'koneksi.php';
if (isset($_POST['isbn']) && isset($_POST['idpgr']) && isset($_POST['kodebk']) && isset($_POST['judul']) && isset($_POST['kota']) && isset($_POST['tahun']) && isset($_POST['stokbk']) && isset($_POST['hargabk']))
		{
			$isbn = $_POST['isbn'];
			$idpgr = $_POST['idpgr'];
			$kodebk = $_POST['kodebk'];
			$judul = $_POST['judul'];
			$kota = $_POST['kota'];
			$tahun = $_POST['tahun'];
			$stokbk = $_POST['stokbk'];
			$hargabk = $_POST['hargabk'];
			$result = mysqli_query($conn,"SELECT isbn,idpgr,kodebk,judul FROM buku WHERE (isbn='$isbn' OR idpgr='$idpgr' OR kodebk='$kodebk' OR judul='$judul')");
			if (mysqli_num_rows($result) > 0)
			{
				echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>'; 
				header("location: tambah_bk.php?pesan=gagal")
				?>
				<?php
			}
			else
			{
				$sql = "Insert into buku (isbn,idpgr,kodebk,judul,kota,tahun,stokbk,hargabk) values ('$isbn','$idpgr','$kodebk','$judul','$kota','$tahun','$stokbk','$hargabk')";
				$result = mysqli_query($conn,$sql) or mysqli_error($conn);
				echo '<center><strong>Berhasil</strong></center><br>'; 
				header("location: daftar_bk.php?pesan=berhasiltambah");	
		}
	}
?>
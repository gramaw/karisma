<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<!-- script -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
	<title>Daftar Jenis ATK - Karisma</title>
	<style>
	.card {
		margin-right: auto;
		margin-left: auto;
		margin-bottom: 20px;
		padding: 10px;
		border: 1px solid #ccc;
	}
</style>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark elegant-color">
		<!-- logo -->
		<a class="navbar-brand" href="index.php">Karisma</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
		aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="basicExampleNav">
		<!-- navbar -->
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Beranda
					<span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="daftar_bk.php">Buku</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="daftar_atk.php">Alat Tulis Kantor</a>
			</li>
			<!-- dropdown -->
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Daftar</a>
				<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="daftar_bk.php">Buku</a>
					<a class="dropdown-item" href="daftar_jb.php">Jenis Buku</a>
					<a class="dropdown-item" href="daftar_atk.php">Alat Tulis Kantor</a>
					<a class="dropdown-item" href="daftar_merk.php">Merk Alat Tulis Kantor</a>
					<a class="dropdown-item" href="daftar_jatk.php">Jenis Alat Tulis Kantor</a>
					<a class="dropdown-item" href="daftar_pgr.php">Pengarang</a>
					<a class="dropdown-item" href="daftar_jabat.php">Jabatan</a>
					<a class="dropdown-item" href="daftar_kar.php">Karyawan</a>
				</div>
			</li>
		</ul>
		<!-- pencarian -->
		<ul class="navbar-nav ml-auto nav-flex-icons">
			<li class="nav-item avatar dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<i class="fa fa-user rounded-circle z-depth-0"></i><?php 
					error_reporting(0);
					session_start();
					$user = $_SESSION['admin'];
					$id = $_SESSION['id'];
					$_SESSION['id'] = $id;
					if(isset($_SESSION['admin']))
						echo '<span>    ' .$user.'    </span>';					
					?>
					<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Profil</a>
						<a class="dropdown-item" href="#">Privasi</a>
						<a class="dropdown-item" onclick="keluar()">Keluar</a>
					</div>
				</a>
			</li>
		</ul>
	</div>
</nav>
<div class="container">
	<br>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<div style='margin-bottom:20px' class='alert alert-danger text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Data yang diinput telah digunakan</div>";
		}
	}
	?>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "berhasilhapus"){
			echo "<div style='margin-bottom:20px' class='alert alert-success text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Data berhasil dihapus</div>";
		}
	}
	?>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "berhasilubah"){
			echo "<div style='margin-bottom:20px' class='alert alert-success text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Data berhasil disimpan</div>";
		}
	}
	?>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "berhasiltambah"){
			echo "<div style='margin-bottom:20px' class='alert alert-success text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Data baru telah ditambahkan</div>";
		}
	}
	?>
	<h1>Data Jenis ATK</h1>
	<a href="tambah_jatk.php"><button class="btn btn-primary btn-sm" type="button">Tambah Data</button></a><br><br>
	<div class="card">
		<table class="table table-fixed">
			<!--judul table-->
			<tr>
				<th>ID Jenis ATK</th>
				<th>Jenis ATK</th>
				<th>Stok</th>
				<th><i class='fa fa-pencil'></i> Ubah Data</th>
				<th><i class='fa fa-trash'></i> Hapus Data</th>
			</tr>
			<?php
			include "koneksi.php";
			$query = "SELECT * FROM jenisatk";
			$sql = mysqli_query($conn, $query);
			while($data = mysqli_fetch_array($sql)){
				echo "<tr>";
				echo "<td>".$data['idjatk']."</td>";
				echo "<td>".$data['jatk']."</td>";
				echo "<td>".$data['stokjatk']."</td>";
				echo "<td><a href='edit_jatk.php?idjatk=".$data['idjatk']."'><button class='btn btn-primary btn-md' type='button'><i class='fa fa-pencil'></i> Ubah</button></a></td>";
				echo "<td><a href='hapus_jatk.php?idjatk=".$data['idjatk']."'><button class='btn btn-danger btn-md' type='button'><i class='fa fa-trash-o'></i></button></a></td>";
				echo "</tr>";
			}
			?>
		</table>
	</div>
</div>
<script type='text/javascript'>
	function keluar() {
		var kel = confirm('Ingin keluar dari akun?')
		if (kel){
			window.location = '../index.php?pesan=keluar';
		}
	}
</script>
</body>
</html>
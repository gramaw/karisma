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
	<title>Halaman Login - Karisma</title>
	<style>
	.card {
		margin-right: auto;
		margin-left: auto;
		margin-bottom: 20px;
		width: 400px;
		padding: 10px;
		border: 1px solid #ccc;

	}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark elegant-color">
		<!-- logo -->
		<a class="navbar-brand" href="dashboard.php">Karisma</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
		aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse">
		<!-- navbar -->
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="dashboard.php">Beranda
					<span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="buku.php">Buku</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="alat_tulis_kantor.php">Alat Tulis Kantor</a>
			</li>
			<!-- dropdown -->
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Daftar</a>
				<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="jenis_buku.php">Jenis Buku</a>
					<a class="dropdown-item" href="merk_atk.php">Merk Alat Tulis Kantor</a>
					<a class="dropdown-item" href="jenis_atk.php">Jenis Alat Tulis Kantor</a>
					<a class="dropdown-item" href="pengarang.php">Pengarang</a>
				</div>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto nav-flex-icons">
			<li class="nav-item">
				<a class="nav-link" href="#">
					<?php 
					error_reporting(0);
					session_start();
					$user = $_SESSION['admin'];
					$id = $_SESSION['id'];
					$_SESSION['id'] = $id;
					if(isset($_SESSION['user']))
						echo '<span> | <i class="fa fa-user-o"></i> ' .$user.' | </span>';					
					?></a>
				</li>
				
			</ul>
		</div>
	</nav><br>
<!-- Material form register -->
<div class="card">
	<div class="container">
		<br>
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:20px' class='alert alert-danger text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Username atau Password salah</div>";
			}
		}
		?>
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagallogin"){
				echo "<div style='margin-bottom:55px' class='alert alert-danger text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Username atau Password salah</div>";
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
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "keluar"){
				echo "<div style='margin-bottom:20px' class='alert alert-success text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Anda telah keluar dari akun</div>";
			}
		}
		?>
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "daftar"){
				echo "<div style='margin-bottom:20px' class='alert alert-success text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Anda berhasil mendaftar, silahkan login untuk melanjutkan</div>";
			}
		}
		?>
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagaldaftar"){
				echo "<div style='margin-bottom:20px' class='alert alert-danger text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Data yang anda masukkan telah digunakan</div><script type='text/javascript'>
						alert('Data yang anda masukkan telah digunakan');
						</script>";
			}
		}
		?>
		<div class="center">
			<form method="post" action="pro_daftar.php" enctype="multipart/form-data">
				<p class="h4 text-center md-5">Daftar</p>
				<div class="md-form">
					<i class="fa fa-id-card-o prefix grey-text"></i>
					<input type="text" name="user" placeholder="Username" required>
				</div>
				<div class="md-form">
					<i class="fa fa-list-ol prefix grey-text"></i>
					<input type="password" name="pass" placeholder="Password" pattern=".{6,20}" require title="Password 6-20 karakter" required>
				</div>
				<div class="md-form">
					<i class="fa fa-list-ol prefix grey-text"></i>
					<input type="email" name="email" placeholder="Email" required>
				</div>
				<div class="md-form">
					<i class="fa fa-list-ol prefix grey-text"></i>
					<input type="tel" name="hp" placeholder="Handphone" pattern="[\+]\d{11,13}" value="+62" required>
				</div>
					<input type="hidden" name="level" value="2" required>
				<br><br>
				<center class="mb-3"><input type="submit" class="btn btn-primary" name="login" value="Daftar">
					<input class="btn btn-danger" onclick="konfirmasi()" type="button" value="Batal"></center>
				</form>
				<!-- Material form register -->
			</div>
		</div>
	</div>
	<script type='text/javascript'>
		function konfirmasi() {
			var answer = confirm('Ingin Meninggalkan Form?')
			if (answer){
				window.location = 'dashboard.php';
			}
		}
	</script>
</body>
</html>
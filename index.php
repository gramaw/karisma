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
	<title>Karisma</title>
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
				<a class="nav-link" href="buku.php">Buku</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="atk.php">Alat Tulis Kantor</a>
			</li>
		</ul>
	</div>
</nav><br><br>
<!-- login -->
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
		<div class="center">
			<form method="post" action="pro_login.php" enctype="multipart/form-data">
				<p class="h4 text-center md-5">Masuk Akun</p>
				<div class="md-form">
					<i class="fa fa-id-card-o prefix grey-text"></i>
					<input type="text" name="user" placeholder="Username" required>
				</div>
				<div class="md-form">
					<i class="fa fa-list-ol prefix grey-text"></i>
					<input type="password" name="pass" placeholder="Password" required>
				</div>
				<br><br>
				<center class="mb-3"><input type="submit" class="btn btn-primary" name="login" value="Masuk">
					<input class="btn btn-danger" onclick="konfirmasi()" type="button" value="Daftar Akun"></center>
				</form>
			</div>
		</div>
	</div>
	<script type='text/javascript'>
		function konfirmasi() {
			var answer = confirm('Ingin Daftar Akun?')
			if (answer){
				window.location = 'daftar.php';
			}
		}
	</script>
</body>
</html>
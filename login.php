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
	<title>Tambah Data Pengarang - Karisma</title>
	<style>
	.card {
		margin-right: auto;
		margin-left: auto;
		margin-bottom: 20px;
		width: 400px;
		padding: 10px;
		border: 1px solid #ccc;
		background-color: 0.2;

	}
	.bg {
		background: url("img/BG2.jpg");
		background-size: cover;
	}
	.container2 {
		text-align: center;
		margin-top: 200px;
	}
	.hm-gradient .full-bg-img {
		background: -webkit-linear-gradient(45deg, rgba(83, 125, 210, 0.4), rgba(178, 30, 123, 0.4) 100%);
		background: -webkit-gradient(linear, 45deg, from(rgba(29, 236, 197, 0.4)), to(rgba(96, 0, 136, 0.4)));
		background: linear-gradient(to 45deg, rgba(29, 236, 197, 0.4), rgba(96, 0, 136, 0.4) 100%); 
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
</nav>
<br><br>
<!-- login -->
<section class="view bg hm-gradient">
	<div class="full-bg-img">
		<div class="col-md-6 col-xl-5 offset-xl-1">
			<!--form-->
			<div class="card wow fadeInRight" data-wow-delay="0.3s" style="animation-name: none; visibility: visible;">
				<div class="card-body">
					<!--header-->
					<div class="text-center">
						<h3 class="white-text"><i class="fa fa-user white-text"></i> Register:</h3>
						<hr class="hr-light">
					</div>
					<div class="md-form">
						<i class="fa fa-user prefix white-text"></i>
						<input type="text" id="form3" class="form-control">
						<label for="form3" class="">Your name</label>
					</div>
					<div class="md-form">
						<i class="fa fa-envelope prefix white-text"></i>
						<input type="text" id="form2" class="form-control">
						<label for="form2" class="">Your email</label>
					</div>
					<div class="md-form">
						<i class="fa fa-lock prefix white-text"></i>
						<input type="password" id="form4" class="form-control">
						<label for="form4" class="">Your password</label>
					</div>
					<div class="text-center">
						<button class="btn btn-indigo waves-effect waves-light">Sign up</button>
						<hr class="hr-light mb-3 mt-4">

						<div class="inline-ul text-center d-flex justify-content-center">
							<a class="icons-sm tw-ic"><i class="fa fa-twitter white-text"></i></a>
							<a class="icons-sm li-ic"><i class="fa fa-linkedin white-text"> </i></a>
							<a class="icons-sm ins-ic"><i class="fa fa-instagram white-text"> </i></a>
						</div>
					</div>
				</div>
			</div>
		</div>>
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
					<center class="mb-3"><input type="submit" class="btn btn-primary" value="Masuk">
						<input class="btn btn-danger" onclick="konfirmasi()" type="button" value="Batal"></center>
					</form>
				</div>
			</div>
		</div>
		<script type='text/javascript'>
			function konfirmasi() {
				var answer = confirm('Ingin meninggalkan form?')
				if (answer){
					window.location = 'index.php';
				}
			}
		</script>
		<script type='text/javascript'>
			function keluar() {
				var kel = confirm('Ingin keluar dari akun?')
				if (kel){
					window.location = 'login.php?pesan=keluar';
				}
			}
		</script>
	</body>
	</html>
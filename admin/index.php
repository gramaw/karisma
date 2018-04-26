<!DOCTYPE html>
<?php include('koneksi.php'); ?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
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
		padding: 10px;
		border: 1px solid #ccc;
	}
	.bg {
		background: url("img/BG3.jpg");
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
<script language=javascript>
	function loading(){
		setTimeout("location.href='daftar_bk.php'", 3000);
	}
</script>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark p-3">
		<!--logo-->
		<a class="navbar-brand" href="dashboard.php">Karisma</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
		aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse">
		<!--navbar-->
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
		</ul>
		<ul class="navbar-nav ml-auto nav-flex-icons">
			<a class="nav-link">
				<i class="fa fa-user rounded-circle z-depth-0"></i><?php 
				error_reporting(0);
				session_start();
				$user = $_SESSION['admin'];
				$id = $_SESSION['id'];
				$_SESSION['id'] = $id;
				if(isset($_SESSION['admin']))
					echo '<span>    ' .$user.'    </span>';					
				?>
			</a>
		</ul>
	</div>
</nav>
<!--home-->
<section class="view banner-area bg hm-gradient">
	<div class="full-bg-img">
		<div class="text-center mb-4 pt-max">
			<h1 class="text-white monserrat">KARISMA<span style="color: black"> STORE</span></h1>
			<!--loading modal-->
			<a class="primary-btn banner-btn" data-toggle="modal" onclick="loading()" data-target="#exampleModal">Lihat Data Buku</a>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content py-5 container2">
						<div class="modal-body">
							<h6>Menuju laman Data Buku</h6>
							<div class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>
</section>
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
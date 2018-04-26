<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
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
	<div class="collapse navbar-collapse" id="basicExampleNav">
		<!-- navbar -->
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="dashboard.php">Beranda
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
		<form method="post" action="keluar.php?pesan=keluar" enctype="multipart/form-data">
			<li class="nav-item">
				<button class="btn btn-danger btn-md" onclick="keluar()" type="button" value="Keluar">Keluar
				</button>
			</li>
		</form>
	</div>
</nav>

<!--Section: Products v.2-->
<div class="container">
	<section class="text-center pb-3">
		<!--Section heading-->
		<h1 class="font-weight-bold text-center h1 py-5">Karisma</h1>
		<!--Section description-->
		<p class="grey-text pb-5">Karisma toko Buku dan keperluan Alat Tulis Kantor (ATK).</p>
		<!--Grid row-->
		<div class="row">
			<!--Grid column-->
			<div class="col-lg-4 col">
				<!--Card-->
				<div class="card card-cascade wider card-ecommerce">
					<!--Card image-->
					<div class="view overlay">
						<img src="1.png" class="img-fluid" alt="sample photo">
						<a>
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>
					<!--Card image-->
					<!--Card content-->
					<div class="card-body text-center no-padding">
						<!--Category & Title-->
						<a href="" class="text-muted">
							<h5>Buku Pelajaran</h5>
						</a>
						<h4 class="card-title">
							<strong>
								<a href="">Guru Corel</a>
							</strong>
						</h4>
						<!--Description-->
						<p class="card-text">Tutorial Corel Draw</p>
						<!--Card footer-->
						<span class="float-left font-weight-bold">
							<strong>Rp.</strong>
						</span>
						<span class="float-right">
							<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
								<i class="material-icons">add</i>
							</button>
						</span>
					</div>
					<!--Card content-->
				</div>
				<!--Card-->
			</div>
			<!--Grid column-->
			<!--Grid column-->
			<div class="col-lg-4 col-md-6 mb-3">
				<!--Card-->
				<div class="card card-cascade wider card-ecommerce">
					<!--Card image-->
					<div class="view overlay">
						<img src="3.jpg" class="img-fluid" alt="sample photo">
						<a>
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>
					<!--Card image-->
					<!--Card content-->
					<div class="card-body text-center no-padding">
						<!--Category & Title-->
						<a href="" class="text-muted">
							<h5>Novel</h5>
						</a>
						<h4 class="card-title">
							<strong>
								<a href="">Dilan 1990</a>
							</strong>
						</h4>
						<!--Description-->
						<p class="card-text">Milea.</p>
						<!--Card footer-->
						<span class="float-left font-weight-bold">
							<strong>Rp.</strong>
						</span>
						<span class="float-right">
							<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
								<i class="material-icons">add</i>
							</button>
						</span>
					</div>
					<!--Card content-->
				</div>
				<!--Card-->
			</div>
			<!--Grid column-->
			<!--Grid column-->
			<div class="col-lg-4 col-md-6 mb-3">
				<!--Card-->
				<div class="card card-cascade wider card-ecommerce">
					<!--Card image-->
					<div class="view overlay">
						<img src="4.jpg" class="img-fluid" alt="sample photo">
						<a>
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>
					<!--Card image-->
					<!--Card content-->
					<div class="card-body text-center no-padding">
						<!--Category & Title-->
						<a href="" class="text-muted">
							<h5>Novel</h5>
						</a>
						<h4 class="card-title">
							<strong>
								<a href="">Perahu Kertas</a>
							</strong>
						</h4>
						<!--Description-->
						<p class="card-text">ahahaha.</p>
						<!--Card footer-->
						<span class="float-left font-weight-bold">
							<strong>Rp.</strong>
						</span>
						<span class="float-right">
							<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
								<i class="material-icons">add</i>
							</button>
						</span>
					</div>
					<!--Card content-->
				</div>
				<!--Card-->
			</div>
			<!--Grid column-->
		</div>
		<!--Grid row-->
	</section>
</div>
<!--Section: Products v.2-->
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
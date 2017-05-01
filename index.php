<?php
	include "cek.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Stembase e-Library</title>	
	<link rel="icon" type="image/png" href="img/favicons/36.png">
	<link rel="manifest" href="img/favicons/manifest.json">

	
	<link rel="stylesheet" type="text/css" href="css/dropdown.css">
	
	 <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Beranda</a></li>
					<li><a href="#services">Cari Buku</a></li>
					<li><a href="#team">Daftar Buku</a></li>
					<li><a href="#pricing">Tentang</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Login</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">Selamat datang di</h3>
							<h1 class="white typed">Stembase e-Library.</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">Jam Kerja</h5>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Senin-Kamis</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 15:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Jumat</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:30</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Sabtu-Minggu</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">Libur</h5>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						<h5 class="white heading hide-hover">Registrasi</h5>
						<div class="item">
							<h4 class="white heading content">Untuk registrasi, kunjungi perpustakaan pada hari kerja.</h4>
							<h5 class="white heading light author">Admin</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">Buku Baru</h5>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h4 class="white heading content">Harry Potter and The Deadly Hallows</h4>
								<h5 class="white heading light author">J.K Rowling</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">The Codex Leicester</h4>
								<h5 class="white heading light author">Leonardo da Vinci</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">Fantastic Beast and Where To Find Them</h4>
								<h5 class="white heading light author">J.K Rowling</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Cari Buku</h2>
				<h4 class="light muted">Cari tau buku yang ada di perpustakaan</h4>
			</div>
			<form role="form" action="search.php#services" method="GET">
			 <div style="padding-left: 26%" class="mtb">
				<input type="text" name="keyword" class="subscribe-input" placeholder="Masukkan kata kunci buku dan category pencarian" required>
				</div>
				<br><br>
			<div style="padding-left: 43%" class="mtb">
				<select name="category">
				<option selected value="judul">Pilih Category</option>
				<option value="judul">Judul</option>
				<option value="pengarang">Pengarang</option>
				<option value="penerbit">Penerbit</option>
				<option value="subyek">Subyek</option>
				<option value="thn_terbit">Tahun terbit</option>
				<option value="isbn">ISBN Buku</option>
				</select>
			</div>
			<div style="padding-left: 44%" class="mtb">
			<input type="submit" name="search" value="Cari" class="btn btn-blue-fill">
			</div>
			</form>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Daftar Buku</h2>
				<h4 class="light muted">Daftar buku terbaru</h4>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Buku tersedia di perpustakaan</h3>
							</div>
						</div>
						<div class="title">
							<h4>Harry Potter</h4>
							<h5 class="muted regular">And The Deadly Hallows</h5>
						</div>
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Pinjam sekarang</button>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Buku tersedia di perpustakaan</h3>
							</div>
						</div>
						<div class="title">
							<h4>The Codex Leicester</h4>
							<h5 class="muted regular">by Leonardo da Vinci</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Pinjam sekarang</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Buku tersedia di perpustakaan</h3>
							</div>
						</div>
						<div class="title">
							<h4>Fantastic Beast</h4>
							<h5 class="muted regular">And Where To Find Them</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Pinjam sekarang</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Tentang</h2>
				<h4 class="light white">SeL - Stembase e-Library</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/pricing1.jpg">
							<h3 class="white">SeL</h3>
							<h4 class="white regular light">Stembase e-Library</h4>
							<img src="img/85.png" data-active-url="img/85.png" alt=""></img>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>adalah sistem informasi perpustakaan yang terintegrasi dengan katalog buku secara online milik perpustakaan SMK Negeri 7 Semarang. 
								</li>
							</ul>
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="img/pricing2.jpg">
							<h4 class="white">Alamat</h4> <br>
							<h4 class="white regular light">Jalan Simpang Lima, Kel. Mugas Sari, Kec. Semarang Selatan, Semarang, Jawa Tengah, Indonesia</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-twitte"></i>
							<h2 class="white light">Tiada Hari Tanpa Prestasi</h2>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitte"></i>
							<h2 class="white light">SMK Bisa</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Login</h3>
				<form action="login.php" class="popup-form" method="post">
					<input type="text" name="fUsername" class="form-control form-white" placeholder="username" required>
					<input type="password" name="fPassword" class="form-control form-white" placeholder="password" required>
					<p class="text-danger">
		       		<?php

		       			if(isset($_SESSION['error'])){
		       				unset($_SESSION['error']); 
		       				echo "Username dan password yang Anda masukkan salah.";
		       			}
	       						       			
		       		?>
		       	</p>
					<input type="submit" value="Login" class="btn btn-submit"></button>
				</form>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Pinjam sekarang !</h3>
					<h5 class="light regular light-white">Kunjungi perpustakaan pada hari kerja.</h5>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Jam Kerja<span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Senin - Kamis</h5>
							<h3 class="regular white">8:30 - 15:00</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Jumat</h5>
							<h3 class="regular white">8:30 - 10:30</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p><h5 class="white">&copy; 2017 All Rights Reserved.</a></p></h5>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
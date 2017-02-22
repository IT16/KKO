<?php include "./scripts/global-var.php"?>
<html lang="id">
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
	</head>
	<body>

	</body>
</html>
<html>  <!-- Head code -->
	<head>
		<link rel="stylesheet" type="text/css" href="./css/global.css" />
		<link rel="stylesheet" type="text/css" href="./css/admin.css" />
		<script src="./scripts/jquery-3.1.1.js"></script>
		<script src="./scripts/global.js"></script>
	</head>
	<!-- Header code -->
	<header>
		<div id="header">
			<div class="logo"><a href="#">Kelas <span> Online</span></a></div>
		</div>
	</header>
	<!--  Body Code -->
	<body>
		<marquee>News : Jangan Lupa bayar kas.</marquee>
		<div id="container">
			<div class="sidebar">
				<div id="box-foto">
					<img src="./img/profil/profil.jpg" width="100%" height="100%"></img>
				</div>
				<ul id="nav">
					<li><a class="selected" href="./admin.php" title="DASHBOARD">DASHBOARD</a></li>
					<li><a href="./management-user.php" title="MANAGEMENT USER">MANAGEMENT USER</a></li>
					<li><a href="./management-kas.php" title="MANAGEMENT KAS">MANAJEMENT KAS</a></li>
					<li><a href="./management-tabungan.php" title="MANAGEMENT TABUNGAN">MANAGEMENT TABUNGAN</a></li>
					<li><a href="./management-pengeluaran.php" title="MANAGEMENT PENGELUARAN">MANAGEMENT PENGELUARAN</a></li>
					<li><a href="./scripts/logout.php" title="LOGOUT">LOGOUT</a></li>
				</ul>
			</div>
			<div class="content">
				<h1>DASHBOARD</h1>
				<p>Tambahkan sesuatu disini...</p>
				<table>
				<tr>
					<td>
						<div id="box-kas">
							<div class="box-header">Jumlah KAS Bulan ini</div>
							<div class="box-content"><?php echo "Rp.".$row['Total_Kas'].",00"; ?></div>
						</div>
					</td>
					<td>
						<div id="box-tabungan">
							<div class="box-header">Jumlah Tabungan</div>
							<div class="box-content">$jumlah_tabungan</div>
						</div>
					</td>
					<td>
						<div id="box-pengeluaran">
							<div class="box-header">Jumlah Pengeluaran</div>
							<div class="box-content">$jumlah_pengeluaran</div>
						</div>
					</td>
				</tr>
				<table>
				<div id="box-histori">
							<div class="box-header">History terakhir</div>
							<div class="box-content">ajsnas</div>
				</div>
			</div>
	</body>
	<!-- Footer code-->
	<footer>
	</footer>
</html>

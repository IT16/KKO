<html>  <!-- Head code -->
	<head>
		<link rel="stylesheet" type="text/css" href="./css/global.css" />
		<link rel="stylesheet" type="text/css" href="./css/management-kas.css" />
		<script src="./scripts/jquery-3.1.1.js"></script>
		<script src="./scripts/global.js"></script>
	</head>
	<!-- Header code -->
	<header>
		<div id="header">
			<div class="logo"><a href="#">Kelas<span>Online</span></a></div>
		</div>
	</header>
	<!--  Body Code -->
	<body>
		<marquee>News : Jangan Lupa bayar kas.</marquee>
		<div id="container">
			<div class="sidebar">
				<div id="box-foto">
					<img src="./img/profil.jpg" width="100%" height="100%"></img>
				</div>
				<ul id="nav">
					<li><a href="./admin.php" title="Dashboard">DASHBOARD</a></li>
					<li><a href="./management-user.php" title="MANAGEMENT USER">MANAGEMENT USER</a></li>
					<li><a class="selected" href="./management-kas.php" title="MANAGEMENT KAS">MANAGEMENT KAS</a></li>
					<li><a href="./management-tabungan.php" title="MANAGEMENT TABUNGAN">MANAGEMENT TABUNGAN</a></li>
					<li><a href="./management-pengeluaran.php" title="MANAGEMENT PENGELUARAN">MANAGEMENT PENGELUARAN</a></li>
					<li><a href="./logout.php" title="LOGOUT">LOGOUT</a></li>
				</ul>
			</div>
			<div class="content">
				<h1>MANAGEMENT KAS</h1>
				<p>Semua informasi global ada disini</p>
			<div id="tagihan-table">
				<div class="tt-box-header">Tagihan</div>
					<div class="tt-box-content">
						<table>
							<tr>
								<th>NPM</th>
								<th>Nama lengkap</th>
								<th>Total bayar</th>
								<th>Tagihan</th>
								<th>Action</th>
							</tr>
							<!-- While Loop Start Here -->
								<?php include "./scripts/tagihan-user.php" ?>
							<!-- While Loop end Here -->
						</table>
					</div>
			</div>

	</body>
	<!-- Footer code-->
	<footer>
	</footer>
</html>

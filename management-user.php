<html>  <!-- Head code -->
	<head>
		<link rel="stylesheet" type="text/css" href="./css/global.css" />
		<link rel="stylesheet" type="text/css" href="./css/management-user.css" />
		<script src="./scripts/jquery-3.1.1.js"></script>
		<script src="./scripts/global.js"></script>
		<script src="./scripts/pop-up.js"></script>
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
					<li><a class="selected" href="./management-user.php" title="MANAGEMENT USER">MANAGEMENT USER</a></li>
					<li><a href="./management-kas.php" title="BAYAR KAS">MANAGEMENT KAS</a></li>
					<li><a href="./management-tabungan.php" title="MANAGEMENT TABUNGAN">MANAGEMENT TABUNGAN</a></li>
					<li><a href="./management-pengeluaran.php" title="MANAGEMENT PENGELUARAN">MANAGEMENT PENGELUARAN</a></li>
					<li><a href="./scripts/logout.php" title="LOGOUT">LOGOUT</a></li>
				</ul>
			</div>
			<div class="content">
				<h1>MANAGEMENT USER</h1>
				<p>Semua informasi global ada disini</p></br>
							<!-- Trigger/Open The Modal -->
							<button id="btn-popup">TAMBAH DATA SISWA</button>
							<!-- The Modal -->
							<div id="modal-box" class="modal">
							  <!-- Modal content -->
  							<div class="modal-content">
								<div id="content-new">
									<p class="header">TAMBAH DATA USER <span class="close">&times;</span></p>
										<form action="./scripts/add_user.php" method="post">
											<center>
												<table class="holder">
													<tr>
														<td>NPM<span>:</span></td>
														<td><input type="text" name="npm_user" placeholder="NPM" value=""></td>
														<td></td>
														<td>ALAMAT<span>:</span></td>
														<td><input type="text" name="alamat_user" placeholder="Alamat (Sesuai KTP)" value=""></td>
													</tr>
													<tr>
														<td>NAMA LENGKAP<span>:</span></td>
														<td><input type="text" name="nama_user" placeholder="Nama Lengkap" value=""></td>
														<td></td>
														<td>NOMER TELP<span>:</span></td>
														<td><input type="text" name="telp_user" placeholder="Nomer Telp" value=""></td>
													</tr>
													<tr>
														<td>TEMPAT LAHIR<span>:</span></td>
														<td><input type="text" name="tl_user" placeholder="Tempat Lahir" value=""></td>
														<td></td>
														<td>TANGGAL LAHIR<span>:</span></td>
														<td><input type="text" name="tgl_user" placeholder="Tanggal Lahir" value=""></td>
													</tr>
													<tr>
														<td>JENIS KELAMIN<span>:</span></td>
														<td><select id="jk_user" name="jk_user">
																<option value="L">Laki-Laki</option>
																<option value="P">Perempuan</option></td>
														<td></td>
														<td>AGAMA<span>:</span></td>
														<td><select id="ag_user" name="ag_user">
																<option value="islam">Islam</option>
																<option value="kristen">Kristen</option>
																<option value="hindu">Hindu</option>
																<option value="budha">Budha</option>
																<option value="katolik">Katolik</option></td>
													</tr>
												</table>
											</center>
											<p class="footer">
												<table>
													<tr>
														<td>
															<button class="button btn-tambah" name="btn_tambah" value="submit">
																TAMBAH
															</button>
														</td>
														<td></td>
														<td>
															<input type="reset" class="button btn-bersih" name="btn_bersih" value="reset">
														</td>
													</tr>
												</table>
											</p>
										</form>
								</div>
							</div>
						</div>
						<div id="detail-user">
									<div class="du-box-header">DETAIL USER</div> <form action="./scripts/hapus_data.php" method="post">
									<div class="du-box-content">
										<table>
											<tr>
												<th>NPM</th>
												<th>Nama lengkap</th>
												<th>Alamat</th>
												<th>Telp</th>
												<th>Action</th>
											</tr>
											<!-- While Loop Start Here -->
										<?php include "./scripts/show_user.php" ?>
										<!-- While Loop end Here -->
										</table>
									</div>
						</div>
				</div>

								<!-- script pop-up. -->
								<script>
								// Get the modal
								var modal = document.getElementById('modal-box');

								// Get the button that opens the modal
								var btn = document.getElementById("btn-popup");

								// Get the <span> element that closes the modal
								var span = document.getElementsByClassName("close")[0];

								// When the user clicks the button, open the modal
								btn.onclick = function(display) {
								    modal.style.display = "block";
								}

								// When the user clicks on <span> (x), close the modal
								span.onclick = function() {
								    modal.style.display = "none";
								}

								// When the user clicks anywhere outside of the modal, close it
								window.onclick = function(event) {
								    if (event.target == modal) {
								        modal.style.display = "none";
								    }
								}
								</script>
	</body>
	<!-- Footer code-->
	<footer>
	</footer>
</html>

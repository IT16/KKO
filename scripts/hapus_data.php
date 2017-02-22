<?php
	include "./con_db.php";
	$data1 = "DELETE FROM tabel_bayar WHERE npm = '".$_POST['npm']."'";
	$data2 = "DELETE FROM biodata_user WHERE npm = '".$_POST['npm']."'";

	if (mysql_query($data1) and mysql_query($data2)){
	echo "<script>alert('Data Berhasil di Hapus'); window.location = '../management-user.php';</script>";

	} else {
	echo "<script>alert('Gagal di Hapus'); window.location = '../management-user.php';</script>";
	}
?>

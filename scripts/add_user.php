<?php

	include "con_db.php";

	$npm=mysql_real_escape_string($_POST["npm_user"]);
	$nama=mysql_real_escape_string($_POST["nama_user"]);
	$alamat=mysql_real_escape_string($_POST["alamat_user"]);
	$telp_user=mysql_real_escape_string($_POST["telp_user"]);
	$tl_user=mysql_real_escape_string($_POST["tl_user"]);
	$tgl_user=mysql_real_escape_string($_POST["tgl_user"]);
	$ag_user=mysql_real_escape_string($_POST["ag_user"]);
	$jk_user=mysql_real_escape_string($_POST["jk_user"]);

	if (is_numeric($npm)){
		$data1="INSERT INTO biodata_user (npm, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, no_telpon, agama, alamat, negara)
    VALUES ('$npm','$nama','$jk_user','$tl_user','$tgl_user','$telp_user','$ag_user','$alamat','indonesia')";

		$data2="INSERT INTO tabel_bayar (npm,nama,bayar,status)
    VALUES ('$npm','$nama','0','L')";

		if (mysql_query($data1) and mysql_query($data2)){
			echo "<script>alert('Data berhasil di tambah'); window.location = '../management-user.php'</script>";

		}else{
			echo "<script>alert('GAGAL, NPM sudah terdaftar'); window.location = '../management-user.php'</script>";
		}
		echo "</table>";

	}else{
		echo "<script>alert('npm harus angka'); window.location = '../management-user.php'</script>";
	}

?>

<?php
include "./con_db.php";
$npm=$_POST["no"];
$bayar=$_POST["uang"];
$ambil="SELECT * FROM tabel_bayar WHERE npm=$npm";
$hasil=mysql_query($ambil);
$data=mysql_fetch_array($hasil);
$tagihan=$data['tagihan_kas']+$bayar;
$bayar_kas=$data['bayar_kas']+$bayar;
if ($tagihan<0){
	$update="UPDATE tabel_bayar SET bayar_kas='$bayar_kas', tagihan_kas='$tagihan', status='BL' WHERE npm='$npm'";
	$has=mysql_query($update);
	
	if($has){
	echo "<script>alert ('pembayaran masih belum lunas'); window.location = '../management-kas.php'</script>";
	}
	
}else{
	$update="UPDATE tabel_bayar SET bayar_kas='$bayar_kas', tagihan_kas='$tagihan', status='BL' WHERE npm='$npm'";
	$has=mysql_query($update);
	
	if($has){
	echo "<script>alert ('pembayaran lunas'); window.location = '../management-kas.php'</script>";
	}
	
}

?>
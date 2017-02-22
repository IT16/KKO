<?php
	include "con_db.php";
	
	//Show SUM Total Bayar Kas.
	$SUM=mysql_query("SELECT SUM(bayar_kas) AS Total_Kas FROM tabel_bayar");
	$row=mysql_fetch_array($SUM);
?>
<?php
session_start();
if (empty($_POST['pass_field']) and empty($_POST['user_field'])){
	header('Location: ../login.php?p=Harap isikan username dan password');


}else{
	include "./con_db.php";

	$user=mysql_real_escape_string($_POST["user_field"]);
	$pass=mysql_real_escape_string($_POST["pass_field"]);

	if(empty($user)){
	header('Location: ../login.php?p=Isi Username');

	}else{
		if(empty($pass)){
			header('Location: ../login.php?p=Isi Password');

		}else{

			$cek=mysql_query("SELECT * FROM login_kas where (npm='$user' OR nama='$user') and password='$pass'");
			$jumlah=mysql_num_rows($cek);

			if($jumlah!==0){
				$data=mysql_fetch_array($cek);
				$_SESSION["nama"]=$data["nama"];
				$_SESSION["npm"]=$data["npm"];

				$_SESSION['login']="true";
				header('location: ../admin.php');

			}else{

				echo $user;
				header('location: ../login.php?p=Username atau Sassword Salah');
			}

		}

	}

}
mysql_close($con_db);
 ?>

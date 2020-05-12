<?php
session_start();
	if(isset($_SESSION['Admin']) == true && $_SESSION['Admin'] == true){
		header('Location: ./showregs.php');
	}
	//E ingabe
	$user = $_POST['user'];
	$pass = $_POST['pass'];
			
	//V erarbeitung
	$pw = '$2y$10$jLc1kT2yklowtJ.47YMyf.yOjx9p/RhgXKhcPXOGFY5c5s3bZkuhO';
	if ($user == "2klangadmin" && password_verify($pass, $pw))	{
		$_SESSION['Admin'] = true;
		header('Location: ./showregs.php');
	}else{
		header('Location: ./login-showregs.php');
	}
?>
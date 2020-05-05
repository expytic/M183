<?php
	if(isset($_SESSION['Admin']) == true && $_SESSION['Admin'] == true){
		header('Location: ./showregs.php');
	}
	//E ingabe
	$user = $_POST['user'];
	$pass = $_POST['pass'];
			
	//V erarbeitung
	if ($user == "2klangadmin" && $pass == "2klang2klang")	{
		$_SESSION['Admin'] = true;
		header('Location: ./showregs.php');
	}else{
		header('Location: ./login-showregs.php');
	}
?>
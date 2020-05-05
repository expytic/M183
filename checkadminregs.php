<?php
	if(isset($_SESSION['AdminPlus']) && $_SESSION['AdminPlus']){
		header('Location: ./adminregs.php');
	}
	//E ingabe
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	//V erarbeitung
	if ($user == "2kadminplus" && $pass == "2malklang")
	{
		$_SESSION['AdminPlus'] = true;
		header('Location: ./adminregs.php');
	}
		else
	{
		header('Location: ./login-adminregs.php?');
	}
?>
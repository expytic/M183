<?php
	//E ingabe
	$user = $_POST['user'];
	$pass = $_POST['pass'];
			
	//V erarbeitung
	if ($user == "2kadminplus" && $pass == "2malklang")
	{
		header('Location: ./adminregs.php?login=true');
		exit;
	}
		else
	{
		header('Location: ./adminregs.php?login=false');
		exit;
	}
?>
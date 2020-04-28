<?php
	//E ingabe
	$user = $_POST['user'];
	$pass = $_POST['pass'];
			
	//V erarbeitung
	if ($user == "2klangadmin" && $pass == "2klang2klang")
	{
		header('Location: ./showregs.php?login=true');
		exit;
	}
		else
	{
		header('Location: ./showregs.php?login=false');
		exit;
	}
?>
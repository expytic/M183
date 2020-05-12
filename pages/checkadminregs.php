<?php
session_start();
	if(isset($_SESSION['AdminPlus']) && $_SESSION['AdminPlus']){
		header('Location: ./adminregs.php');
	}
	//E ingabe
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	//V erarbeitung
	$pw = '$2y$10$jk841nKrUzKomb2hKvpOGORkYjqMMGJh1qpUa2t1THKvULXIwr/A6';
	if ($user == "2kadminplus" && password_verify($pass, $pw)){
		$_SESSION['AdminPlus'] = true;
		header('Location: ./adminregs.php');
	}else{
		header('Location: ./login-adminregs.php');
	}
?>
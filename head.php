<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
    <style>
        <?php 
            include 'css/style.css'; 
        ?>
    </style>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Anmeldeformular Brunch-Buffet</title>

  </head>
  
 
	<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="register.php">Anmeldeformular</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="registersup.php">Werde Supporter</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="kontakt.html">Kontakt</a>
            </li>
            <?php
				session_start();
                if(isset($_SESSION['AdminPlus']) && $_SESSION['AdminPlus'] || isset($_SESSION['Admin']) && $_SESSION['Admin']){
                    echo '<li class="nav-item active"><a class="nav-link" href="logout.php">Logout</a></li>';
				}
            ?>
            
</nav>
		<header>
			<h1>BigBand Doppelklang</h1>
			<h2>herzlich willkommen</h2>
		</header>
		
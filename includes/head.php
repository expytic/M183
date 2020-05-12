<!DOCTYPE html>
<html>
	<?php
		$inDir = false;
		if(basename(getcwd()) == 'pages') $inDir = true;
	?>
	<head>
    <meta charset="utf-8">
	<?php
		$bootstrap = "css/bootstrap.css";
		if($inDir) $bootstrap = "../" . $bootstrap;
		echo "<link rel=\"stylesheet\" href=\"$bootstrap\">";	
	?>
    <style>
		<?php 
			$styleCss = "css/style.css";
			if($inDir) $styleCss = "../" . $styleCss;
            include $styleCss; 
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
				<?php
					$index = "index.php";
					if($inDir) $index = "../" . $index;
					echo "<a class=\"nav-link\" href=\"$index\">Home</a>";
				?>
			</li>
			<li class="nav-item active">
				<?php
					$register = "register.php";
					if(!$inDir) $register = "pages/" . $register;
					echo "<a class=\"nav-link\" href=\"$register\">Anmeldeformular</a>";
				?>
			</li>
			<li class="nav-item active">
				<?php
					$registersup = "registersup.php";
					if(!$inDir) $registersup = "pages/" . $registersup;
					echo "<a class=\"nav-link\" href=\"$registersup\">Werde Supporter</a>";
				?>
			</li>
			<li class="nav-item active">
				<?php
					$kontakt = "kontakt.php";
					if(!$inDir) $kontakt = "pages/" . $kontakt;
					echo "<a class=\"nav-link\" href=\"$kontakt\">Kontakt</a>";
				?>
            </li>
            <?php
				session_start();
                if(isset($_SESSION['AdminPlus']) && $_SESSION['AdminPlus'] || isset($_SESSION['Admin']) && $_SESSION['Admin']){
					$logout = "pages/logout.php";
					if($inDir) $logout = "../" . $logout;
                    echo "<li class=\"nav-item active\"><a class=\"nav-link\" href=\"$logout\">Logout</a></li>";
				}
            ?>
        </ul> 
</nav>
<header>
	<h1>BigBand Doppelklang</h1>
	<h2>herzlich willkommen</h2>
</header>
		
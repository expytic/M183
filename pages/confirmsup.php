<?php
	include_once "../includes/head.php";
	include_once "../includes/validate.php";
?>
		<main role="main">
			<article>
				<?php
					//Daten entgegennehmen
					if(!isset($_POST['famname'])) header('Location: registersup.php');
					if(!isset($_POST['vorname'])) header('Location: registersup.php');
					if(!isset($_POST['gebdat'])) header('Location: registersup.php');
					if(!isset($_POST['mail'])) header('Location: registersup.php');
					if(!isset($_POST['passw'])) header('Location: registersup.php');
					if(!isset($_POST['passwrep'])) header('Location: registersup.php');

					$famname = $_POST['famname'];
					$vorname = $_POST['vorname'];
					$gebdat = $_POST['gebdat'];
					$username = $_POST['mail'];
					$password = $_POST['passw'];
					$passwrep = $_POST['passwrep'];
					$dataIsOk = true;
					if(!validateName($famname)){
						echo "famname not ok<br>";
						$dataIsOk = false;
					}
					if(!validateName($vorname)){
						echo "vorname not ok<br>";
						$dataIsOk = false;
					}
					if(!validateBirthDate($gebdat)){
						echo "Geburtsdatum not ok<br>";
						$dataIsOk = false;
					}
					if(!validateMail($username)){
						echo "email not ok<br>";
						$dataIsOk = false;
					}
					if(!validatePassword($password)){
						echo "passwort mit min 8 zeichen gross- kleinbuchstaben eine zahl und ein sonderzeichen.<br>";
						$dataIsOk = false;
					}
					if($password != $passwrep){
						echo "passwort stimmt nicht überein<br>";
						$dataIsOk = false;
					}

					//TODO hash pw -> db
					$password = password_hash($password, PASSWORD_DEFAULT);
					//Insert auf DB
					// Create connection
					$conn = new PDO('mysql:host=localhost;dbname=doppelklang', 'php_support', 'TgDId8ZQvkmpkyY7');
					// Check connection
					if (!$conn)	die("Verbindung zur Datenbank leider fehlgeschlagen. Bitte versuchen Sie es später noch einmal: " . mysqli_connect_error());

					// INSERT
					$result = false;
					if($dataIsOk){
						$stmt = $conn->prepare("INSERT INTO `tosupport` (`famname`, `vorname`, `gebdat`, `username`, `password`) VALUES (?, ?, ?, ?, ?)");
						$result = $stmt->execute(array($famname, $vorname, $gebdat, $username, $password));
					}
					if ($result && $dataIsOk){
						echo '
						<h4>vielen Dank und herzlich willkommen als Supporter*in!</h4>
						<h4>Folgende Angaben haben wir entgegengenommen:</h4>
						<table>
							<tr>
								<th>Familienname:</th><td>'.$famname.'</td>
							</tr>
							<tr>
								<th>Vorname:</th><td>'.$vorname.'</td>
							</tr>
							<tr>
								<th>Geburtsdatum:</th><td>'.$gebdat.'</td>
							</tr>
							<tr>
								<th>E-mail:</th><td>'.$username.'</td>
							</tr>
							</table>';
					}
					else
					{
						echo "<a>registration Fehlgeschlagen</a><br>";
						echo "<a href=\"registersup.php\">Nochmal versuchen</a>";	
					}
					$conn = null;
					?>
			</article>
		</main>
		<?php
			include_once "../includes/footer.php";
		?>

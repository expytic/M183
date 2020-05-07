<?php
	include "head.php";
	include "validate.php";
?>
		<main role="main">
			<article>
				<?php
					//Daten entgegennehmen
					if(!isset($_POST['famname'])){
						header('Location: registersup.php');
					}
					if(!isset($_POST['vorname'])){
						header('Location: registersup.php');
					}
					if(!isset($_POST['gebdat'])){
						header('Location: registersup.php');
					}
					if(!isset($_POST['mail'])){
						header('Location: registersup.php');
					}
					if(!isset($_POST['passw'])){
						header('Location: registersup.php');
					}
					if(!isset($_POST['passwrep'])){
						header('Location: registersup.php');
					}
					$famname = $_POST['famname'];
					$vorname = $_POST['vorname'];
					$gebdat = $_POST['gebdat'];
					$username = $_POST['mail'];
					$password = $_POST['passw'];
					$passwrep = $_POST['passwrep'];
					
					if(!validateName($famname)){
						echo "$famname not ok<br>";
					}
					if(!validateName($vorname)){
						echo "$vorname not ok<br>";
					}
					if(!validateBirthDate($gebdat)){
						echo "$gebdat not ok<br>";
					}
					if(!validateMail($username)){
						echo "$username not ok<br>";
					}
					if(!validatePassword($password)){
						echo "$password not ok<br>";
					}
					if($password != $passwrep){
						echo "$passwrep not ok<br>";
					}
					//Insert auf DB
					// Create connection
					$conn = new PDO('mysql:host=localhost;dbname=doppelklang', 'php_support', 'TgDId8ZQvkmpkyY7');
					// Check connection
					if (!$conn)
					{
						die("Verbindung zur Datenbank leider fehlgeschlagen. Bitte versuchen Sie es später noch einmal: " . mysqli_connect_error());
					}
					// INSERT
					$stmt = $conn->prepare("INSERT INTO `tosupport` (`famname`, `vorname`, `gebdat`, `username`, `password`) VALUES (?, ?, ?, ?, ?)");
					$sql = "INSERT INTO `tosupport` (`famname`, `vorname`, `gebdat`, `username`, `password`)
					VALUES ('$famname', '$vorname', '$gebdat', '$username', '$password')";
					$result = $stmt->execute(array($famname, $vorname, $gebdat, $username, $password));
					if ($result)
					{
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
								<th>Adresse:</th><td>'.$gebdat.'</td>
							</tr>
							<tr>
								<th>PLZ / Ort:</th><td>'.$username.'</td>
							</tr>
							<tr>
								<th>E-Mail:</th><td>'.$password.'</td>
							</tr>
							</table>';
					}
					else
					{
						echo "Verbindung zur Datenbank leider fehlgeschlagen. Bitte versuchen Sie es später noch einmal: " . $sql . "<br>" . mysqli_error($conn);
					}
					$conn = null;
					?>
			</article>
		</main>
		<footer>
	<hr>
			| <a href="index.php">zurück zur Startseite</a>|
			<hr>
		</footer>
	</body>
</html>

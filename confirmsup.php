<?php
	include "head.php";
?>
		<main role="main">
			<article>
				<?php
					//Daten entgegennehmen
					$famname = $_GET['famname'];
					$vorname = $_GET['vorname'];
					$gebdat = $_GET['gebdat'];
					$username = $_GET['mail'];
					$password = $_GET['passw'];
					$passwrep = $_GET['passwrep'];
					
					//Insert auf DB
					// Create connection
					$conn = mysqli_connect('localhost', 'root', '', 'doppelklang');
					mysqli_set_charset($conn, "utf8");
					// Check connection
					if (!$conn)
					{
						die("Verbindung zur Datenbank leider fehlgeschlagen. Bitte versuchen Sie es später noch einmal: " . mysqli_connect_error());
					}
					// INSERT
					$sql = "INSERT INTO `tosupport` (`famname`, `vorname`, `gebdat`, `username`, `password`)
					VALUES ('$famname', '$vorname', '$gebdat', '$username', '$password')";
					if (mysqli_query($conn, $sql))
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
					mysqli_close($conn);
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

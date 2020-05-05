<?php
	include "head.php";
?>
		<main role="main">
			<article>
				<?php
					//Daten entgegennehmen
					$famname = $_GET['famname'];
					$vorname = $_GET['vorname'];
					$adresse = $_GET['adresse'];
					$plz = $_GET['plz'];
					$ort = $_GET['ort'];
					$mail = $_GET['mail'];
					$gebdat = $_GET['gebdat'];
					$numbadult = $_GET['numbadult'];
					$agechild1 = $_GET['agechild1'];
					$agechild2 = $_GET['agechild2'];
					$agechild3 = $_GET['agechild3'];
					$agechild4 = $_GET['agechild4'];
					$agechild5 = $_GET['agechild5'];
					$sector = $_GET['sector'];
					$newsl = $_GET['newsl'];
					

					if($newsl == 'on'){
						$newsl = true;
					}else{
						$newsl = false;
					}

					//Insert auf DB
					// Create connection
					$conn = mysqli_connect('localhost', 'php_register_writer', 'uQR5KuiUIQptdlCG', 'doppelklang');
					mysqli_set_charset($conn, "utf8");
					// Check connection
					if (!$conn)
					{
						die("Verbindung zur Datenbank leider fehlgeschlagen. Bitte versuchen Sie es später noch einmal: " . mysqli_connect_error());
					}
					// INSERT
					$sql = "INSERT INTO `tobrunch` (`famname`, `vorname`, `adresse`, `plz`, `ort`, `mailadr`, `gebdat`, `numbadult`, `agechild1`, `agechild2`, `agechild3`, `agechild4`, `agechild5`, `sector`, `newsletter`)
					VALUES ('$famname', '$vorname', '$adresse', '$plz', '$ort', '$mail', '$gebdat', '$numbadult', '$agechild1', '$agechild2', '$agechild3', '$agechild4', '$agechild5', '$sector', '$newsl')";
					echo $sql;
					if (mysqli_query($conn, $sql))
					{
						echo '
						<h4>herzlichen Dank für deine Anmeldung!</h4>
						<h4>Folgende Angaben haben wir entgegengenommen:</h4>
						<table>
							<tr>
								<th>Familienname:</th><td>'.$famname.'</td>
							</tr>
							<tr>
								<th>Vorname:</th><td>'.$vorname.'</td>
							</tr>
							<tr>
								<th>Adresse:</th><td>'.$adresse.'</td>
							</tr>
							<tr>
								<th>Plz:</th><td>'.$plz.'</td>
							</tr>
							<tr>
								<th>Ort:</th><td>'.$ort.'</td>
							</tr>
							<tr>
								<th>E-Mail:</th><td>'.$mail.'</td>
							</tr>
							<tr>
								<th>Geburtsdatum:</th><td>'.$gebdat.'</td>
							</tr>
							<tr>
								<th>Anzahl Erwachsene:</th><td>'.$numbadult.'</td>
							</tr>';
							if ($agechild1 > 0)
							{
								echo '
								<tr>
									<th>Alter Kind 1:</th><td>'.$agechild1.'</td>
								</tr>
								';
							}
							if ($agechild2 > 0)
							{
								echo '
								<tr>
									<th>Alter Kind 2:</th><td>'.$agechild2.'</td>
								</tr>
								';
							}
							if ($agechild3 > 0)
							{
								echo '
								<tr>
									<th>Alter Kind 3:</th><td>'.$agechild3.'</td>
								</tr>
								';
							}
							if ($agechild4 > 0)
							{
								echo '
								<tr>
									<th>Alter Kind 4:</th><td>'.$agechild4.'</td>
								</tr>
								';
							}
							if ($agechild5 > 0)
							{
								echo '
								<tr>
									<th>Alter Kind 5:</th><td>'.$agechild5.'</td>
								</tr>
												';
							}
							echo '
								<tr>
									<th>Sitzplatz-Sektor:</th><td>'.$sector.'</td>
								</tr>
								<tr>
									<th>Newsletter bestellen:</th><td>'.$newsl.'</td>
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

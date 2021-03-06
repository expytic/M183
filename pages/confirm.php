<?php
	include_once "../includes/head.php";
	include_once "../includes/validate.php";
?>
		<main role="main">
			<article>
				<?php
					//Daten entgegennehmen
					if(!isset($_POST['famname'])) header('Location: register.php');
					if(!isset($_POST['vorname'])) header('Location: register.php');
					if(!isset($_POST['adresse'])) header('Location: register.php');
					if(!isset($_POST['plz'])) header('Location: register.php');
					if(!isset($_POST['ort'])) header('Location: register.php');
					if(!isset($_POST['mail'])) header('Location: register.php');
					if(!isset($_POST['gebdat'])) header('Location: register.php');
					if(!isset($_POST['numbadult']))	header('Location: register.php');
					if(!isset($_POST['sector'])) header('Location: register.php');
					if(isset($_POST['newsl'])){
						$newsl = true;
					}else{
						$newsl = false;
					}

					$famname = $_POST['famname'];
					$vorname = $_POST['vorname'];
					$adresse = $_POST['adresse'];
					$plz = $_POST['plz'];
					$ort = $_POST['ort'];
					$mail = $_POST['mail'];
					$gebdat = $_POST['gebdat'];
					$numbadult = $_POST['numbadult'];
					$agechild1 = $_POST['agechild1'];
					$agechild2 = $_POST['agechild2'];
					$agechild3 = $_POST['agechild3'];
					$agechild4 = $_POST['agechild4'];
					$agechild5 = $_POST['agechild5'];
					$sector = $_POST['sector'];
					$dataIsOk = true;
					if(!validateName($vorname)){
						echo "vorname not ok<br>";
						$dataIsOk = false;
					}
					if(!validateName($famname)){
						echo "famname not ok<br>";
						$dataIsOk = false;
					}
					if(!validateAdress($adresse)){
						echo "adresse not ok<br>";
						$dataIsOk = false;
					}
					if(!validatePlz($plz)){
						echo "plz not ok<br>";
						$dataIsOk = false;
					}
					if(!validateOrt($ort)){
						echo "ort not ok<br>";
						$dataIsOk = false;
					}
					
					if(!validateMail($mail)){
						echo "mail not ok<br>";
						$dataIsOk = false;
					}
					if(!validateBirthDate($gebdat)){
						echo "gebdat not ok<br>";
						$dataIsOk = false;
					}
					if($numbadult == NULL || $numbadult > 0 && $numbadult > 50){
						echo "numbadult not ok<br>";
						$dataIsOk = false;
					}
					if(!checkage($agechild1)){
						echo "alter Kind 1 not ok<br>";
						$dataIsOk = false;
					}
					if(!checkage($agechild2)){
						echo "alter Kind 2 not ok<br>";
						$dataIsOk = false;
					}
					if(!checkage($agechild3)){
						echo "alter Kind 3 not ok<br>";
						$dataIsOk = false;
					}
					if(!checkage($agechild4)){
						echo "alter Kind 4 not ok<br>";
						$dataIsOk = false;
					}
					if(!checkage($agechild5)){
						echo "alter Kind 5 not ok<br>";
						$dataIsOk = false;
					}
					
					
					if($sector != 'vorne' && $sector != 'mitte' && $sector != 'hinten') {
						echo "sector not ok<br>";
						$dataIsOk = false;
					}
					//Insert auf DB
					// Create connection
					$conn = new PDO('mysql:host=localhost;dbname=doppelklang', 'php_register_writer', 'uQR5KuiUIQptdlCG');
					// Check connection
					if (!$conn)	die("Verbindung zur Datenbank leider fehlgeschlagen. Bitte versuchen Sie es später noch einmal: " . mysqli_connect_error());
					// INSERT
					$stmt = $conn->prepare("INSERT INTO `tobrunch` (`famname`, `vorname`, `adresse`, `plz`, `ort`, `mailadr`, `gebdat`, `numbadult`,
					 `agechild1`, `agechild2`, `agechild3`, `agechild4`, `agechild5`, `sector`, `newsletter`)
					VALUES(?, ?, ?, ?, ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
					$result = false;
					if($dataIsOk) $result = $stmt->execute(array($famname, $vorname, $adresse, $plz,
						$ort, $mail, $gebdat, $numbadult, $agechild1, $agechild2, $agechild3, $agechild4, $agechild5, $sector, $newsl));
					if ($dataIsOk && $result){
						echo '
						<h4>herzlichen Dank für deine Anmeldung!</h4>
						<h4>Folgende Angaben haben wir entgegengenommen:</h4>
						<table class="table table-bordered">
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
					}else{
						echo "<a>registration Fehlgeschlagen</a><br>";
						echo "<a href=\"register.php\">Nochmal versuchen</a>";						
					}
					$conn = null;
					?>
			</article>
		</main>
		<?php
			include_once "../includes/footer.php";
		?>

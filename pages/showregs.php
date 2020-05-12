		<?php
			include_once "../includes/head.php";
		?>
		<main>
			<p>
				<h4>Music-Brunch mit Doppelklang - Anmeldungen anzeigen</h4>

				<?php
				if (isset($_SESSION['Admin']) && $_SESSION['Admin'])
				{
					echo '<h4>Sie sind jetzt eingeloggt</h4>';
					echo '<h4>User: 2klangadmin</h4>';
					echo '</p>';
					echo '<article>';
				
					//mysqli
					if ($db = mysqli_connect('localhost', 'root', '', 'doppelklang'))
					{
						mysqli_set_charset($db, "utf8");
						$sql = "SELECT * FROM `tobrunch`";
						if ($ergebnis = mysqli_query($db, $sql))
						{		
							// Ausgabe der Ergebnisse in HTML
							echo '<table class="table centeredbox">';
							echo '<thead class="thead-dark">';
							echo '<tr>';
							echo '<th scope="col">ID</th>';
							echo '<th scope="col">Nachname</th>';
							echo '<th scope="col">Vorname</th>';
							echo '<th scope="col">Strasse</th>';
							echo '<th scope="col">PLZ</th>';
							echo '<th scope="col">Ort</th>';
							echo '<th scope="col">E-Mail</th>';
							echo '<th scope="col">Geburtsdatum</th>';
							echo '<th scope="col">Anzahl Erwachsene</th>';
							echo '<th scope="col">Kind 1</th>';
							echo '<th scope="col">Kind 2</th>';
							echo '<th scope="col">Kind 3</th>';
							echo '<th scope="col">Kind 4</th>';
							echo '<th scope="col">Kind 5</th>';
							echo '<th scope="col">Sitz</th>';
							echo '<th scope="col">Newsletter</th>';
							echo '<th scope="col">erstelldatum</th>';
							echo '</tr>';
							echo '</thead>';
							while ($line = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC))
							{
								echo "\t<tr>\n";
								foreach ($line as $col_value)
								{
									echo "\t\t<td>$col_value</td>\n";
								}
								echo "\t</tr>\n";
							}			
							echo "</table>\n";	
						}
						mysqli_close($db);
					}
					else
					{
						echo "Fehler!";
					}
				}
				else
				{
					echo '<h4>Login fehlgeschlagen</h4>';
					sleep(2);
					echo '
							<p>
								<a href="login-showregs.php">nochmals versuchen</a><br>
							</p>	
								';
				}
				?>
			<p>
				<a href="../index.php" title="zur Startseite">zur Startseite</a><br>
				<hr>
				<a href="showregs.php" title="alle Anmeldungen anzeigen">alle Anmeldungen anzeigen</a> (nur mit Admin-Login)<br>
				<a href="adminregs.php" title="Anmeldungen administrieren">Anmeldungen administrieren</a> (nur mit AdminPlus-Login)<br>
				<hr>
			</p>
			</article>
		</main> 
		
		<?php
			include_once "../includes/footer.php";
		?>

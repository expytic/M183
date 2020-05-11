		<?php
			include "head.php";
		?>
		<main>
			<p>
				<h4>Music-Brunch mit Doppelklang - Anmeldungen anzeigen</h4>
				<?php
				echo $_SESSION['Admin'];
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
							echo '<table border="1"\n>';
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
				<a href="index.php" title="zur Startseite">zur Startseite</a><br>
				<hr>
				<a href="showregs.php" title="alle Anmeldungen anzeigen">alle Anmeldungen anzeigen</a> (nur mit Admin-Login)<br>
				<a href="adminregs.php" title="Anmeldungen administrieren">Anmeldungen administrieren</a> (nur mit AdminPlus-Login)<br>
				<hr>
			</p>
			</article>
		</main> 
		
		<footer>
			<a href="kontakt.html">Kontakt</a>
				<p>© 2020 Doppelklang / 03.2020 BigBand Doppelklang</p>
		</footer>
	</body>
</html>

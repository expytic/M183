	<?php
			include "head.php";
		?>
		<main>
			<p>
				<h4>Music-Brunch mit Doppelklang - Anmeldungen administrieren</h4>
			<?php
				if ($_GET['login'] == 'true')
			{
					echo '<h4>Sie sind jetzt eingeloggt</h4>';
					echo '<h4>User: 2kadminplus</h4>';
					echo '</p>';
					echo '<article>';
				// Mit Datenbank verbinden 
				$db = mysqli_connect('localhost', 'root', '', 'doppelklang'); 
				mysqli_set_charset($db, "utf8"); 
				
				// Anmeldungen aus der Datenbank abrufen
				$sql = "SELECT * FROM tobrunch ORDER BY entrydatetime DESC";
				$daten = mysqli_query($db, $sql);

				// Die Daten durchlaufen und als HTML formatieren
				echo "<table border='1'>";
				while ($zeile = mysqli_fetch_array($daten)) { 
					// Die Anmelde-Daten anzeigen
					echo "<tr><td><strong>" . $zeile['famname'] . '</strong></td>';
					echo "<td>" . $zeile['vorname'] . '</td>';
					echo "<td>" . $zeile['mailadr'] . '</td>';
					echo "<td>" . $zeile['entrydatetime'] . '</td>';
					echo '<td><a href="deletereg.php?id=' . $zeile['id'] . '&amp;famname=' . $zeile['famname'] .
						'&amp;vorname=' . $zeile['vorname'] . '&amp;mailadr=' . $zeile['mailadr'] . '&amp;entrydatetime=' .
						$zeile['entrydatetime'] . '">Löschen</a></td></tr>';
				}
				echo '</table>';

				mysqli_close($db);
			}
			else
				{
					echo '<h4>Login fehlgeschlagen</h4>';
					sleep(2);
					echo '
							<p>
								<a href="login-adminregs.php">nochmals versuchen</a><br>
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
			<a href="#kontakt.html">Kontakt</a>
				<p>© 2020 Doppelklang / 03.2020 BigBand Doppelklang</p>
		</footer>
	</body>
</html>

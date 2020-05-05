	<?php
			include "head.php";
		?>
		<main>
			<p>
				<h4>Music-Brunch mit Doppelklang - Anmeldungen administrieren</h4>
			<?php
				
				if (isset($_SESSION['AdminPlus']) && $_SESSION['AdminPlus'])
			{
					echo '<h4>Sie sind jetzt eingeloggt</h4>';
					echo '<h4>User: 2kadminplus</h4>';
					echo '</p>';
					echo '<article>';
				// Mit Datenbank verbinden 
				$db = mysqli_connect('localhost', 'php_register_reader', 'Fr5x0kWY28wm9WvJ', 'doppelklang'); 
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
					echo '<td><form name="registersup" action="deletereg.php" method="POST">
						<input type="hidden" id="id" name="id" value="' . $zeile['id'] . '">
						<input type="hidden" id="famname" name="famname" value="' . $zeile['famname'] . '">
						<input type="hidden" id="vorname" name="vorname" value="' . $zeile['vorname'] . '">
						<input type="hidden" id="mailadr" name="mailadr" value="' . $zeile['mailadr'] . '">
						<input type="hidden" id="entrydatetime" name="entrydatetime" value="' . $zeile['entrydatetime'] . '">
						<button type="submit" name="send" value="0">abschicken</button>
						</form></td></tr>';
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

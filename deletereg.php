<?php
			include "head.php";
		?>
		<main>
			<p>
				<h4>Music-Brunch mit Doppelklang - Anmeldung löschen</h4>
		<hr>
			</p>
			
<?php
  if (isset($_GET['id']) && isset($_GET['famname']) && isset($_GET['vorname']) && isset($_GET['mailadr']) && isset($_GET['entrydatetime'])) {
    // Die Daten aus $_GET auslesen
    $id = $_GET['id'];
    $famname = $_GET['famname'];
    $vorname = $_GET['vorname'];
    $mailadr = $_GET['mailadr'];
		$entrydatetime = $_GET['entrydatetime'];
  }
  else if (isset($_POST['id']) && isset($_POST['famname']) && isset($_POST['entrydatetime'])) {
    // Anmelde-Daten aus $_POST lesen
    $id = $_POST['id'];
    $famname = $_POST['famname'];
		$vorname = $_POST['vorname'];
    $entrydatetime = $_POST['entrydatetime'];
  }
  else {
    echo '<p>Fehler: Keine zu löschende Anmeldung ausgewählt.</p>';
  }

  if (isset($_POST['submit'])) {
    if ($_POST['bestaetigen'] == 'Ja') {
      // Mit Datenbank verbinden
      $db = mysqli_connect('localhost', 'root', '', 'doppelklang');      
      mysqli_set_charset($db, "utf8"); 
      // Den Eintrag aus der Datenbank löschen
      $sql = "DELETE FROM tobrunch WHERE id = $id LIMIT 1";
      mysqli_query($db, $sql);
      mysqli_close($db);
      // Dem Benutzer das Löschen bestätigen
      echo '<p>Die Anmeldung von '. $vorname . '&nbsp;' . $famname . ' vom ' . $entrydatetime . ' wurde gelöscht.</p>';
    }
    else {
      echo '<p class="fehler">Fehler: Der Eintrag konnte nicht gelöscht werden.</p>';
    }
  }
  else if (isset($id) && isset($famname) && isset($vorname) &&
    isset($mailadr) && isset($entrydatetime)) {
    echo '<p>folgende Anmeldung wirklich löschen?</p>';
    echo '<p><strong>Name: </strong>' . $famname . '<br /><strong>Vorname: </strong>' . $vorname .
      '<br /><strong>E-Mail: </strong>' . $mailadr . '<br /><strong>Eintrag vom: </strong>' . $entrydatetime . '</p>';
    echo '<form method="post" action="deletereg.php">';
    echo '<input type="radio" name="bestaetigen" value="Ja" /> Ja ';
    echo '<input type="radio" name="bestaetigen" value="Nein" checked="checked" /> Nein <br />';
    echo '<input type="submit" value="Senden" name="submit" />';
    echo '<input type="hidden" name="id" value="' . $id . '" />';
    echo '<input type="hidden" name="famname" value="' . $famname . '" />';
		echo '<input type="hidden" name="vorname" value="' . $vorname . '" />';
    echo '<input type="hidden" name="entrydatetime" value="' . $entrydatetime . '" />';
    echo '</form>';
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

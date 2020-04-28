<?php
	include "head.php";
?>
	<main>
		<article>
		<p>
			<h4>Für 50 Franken pro Jahr wirst du Supporter von Doppelklang!</h4>
			<h4>Du bekommst diverse Vergünstigungen und exklusive Zusatzinfos.</h4>
		</p>	
			<form name="registersup" action="confirmsup.php" method="GET">
				<fieldset>
					<table>
						<legend><b>Registrierung als Supporter*in</b></legend>
						<tr>
							<td><label for="famname">Familienname</label></td>
							<td><input name="famname" id="famname"></td>
						</tr>
						<tr>
							<td><label for="vorname">Vorname</label></td>
							<td><input name="vorname" id="vorname"></td>
						</tr>
						<tr>
							<td><label for="gebdat">Geburtsdatum</label></td>
							<td><input type="date" name="gebdat" id="gebdat"></td>
						</tr>
						<tr>
							<td><label for="mail">E-Mail Adresse (=Username)</label></td>
							<td><input name="mail" id="mail"></td>
						</tr>
						<tr>
							<td><label for="passw">Passwort</label></td>
							<td><input  name="passw" id="passw"></td>
						</tr>
						<tr>
							<td><label for="passwrep">Passwort wiederholen</label></td>
							<td><input  name="passwrep" id="passwrep"></td>
						</tr>
					</table>
					<fieldset>
						<table>
							<legend></legend>
								<td><button type="submit" name="send" value="0">Registrieren</button></td>
								<td><button type="reset" name="send" value="0">neu ausfüllen</button></td>
								<td><a href="index.php" titel=" | zurück zur Startseite |">| zurück zur Startseite |</a></td>
							</tr>
						</table>
					</fieldset>
				</form>	
			</article>
		</main>
		<footer>
<hr>		
			<a href="#kontakt.html">Kontakt</a>
				<p>© 2020 Doppelklang / 03.2020 BigBand Doppelklang</p>
		</footer>
	</body>
</html>
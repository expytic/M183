<?php
	include "head.php";
?>
	<main>
		<article>
		<p>
			<h4>Für 50 Franken pro Jahr wirst du Supporter von Doppelklang!</h4>
			<h4>Du bekommst diverse Vergünstigungen und exklusive Zusatzinfos.</h4>
		</p>	
			<form name="registersup" action="confirmsup.php" method="POST">
				<fieldset>
					<table>
						<legend><b>Registrierung als Supporter*in</b></legend>
						<tr>
							<td><label for="famname">Familienname</label></td>
							<td><input name="famname" id="famname" autofocus required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .-]{1,40}"></td>
						</tr>
						<tr>
							<td><label for="vorname">Vorname</label></td>
							<td><input name="vorname" id="vorname" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .-]{1,40}"></td>
						</tr>
						<tr>
							<td><label for="gebdat">Geburtsdatum</label></td>
							<td><input type="date" name="gebdat" id="gebdat" required></td>
						</tr>
						<tr>
							<td><label for="mail">E-Mail Adresse (=Username)</label></td>
							<td><input name="mail" id="mail" required pattern="([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$"></td>
						</tr>
						<tr>
							<td><label for="passw">Passwort</label></td>
							<td><input type="password" name="passw" id="passw" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"></td>
						</tr>
						<tr>
							<td><label for="passwrep">Passwort wiederholen</label></td>
							<td><input type="password" name="passwrep" id="passwrep" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"></td>
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
			<a href="kontakt.html">Kontakt</a>
				<p>© 2020 Doppelklang / 03.2020 BigBand Doppelklang</p>
		</footer>
	</body>
</html>
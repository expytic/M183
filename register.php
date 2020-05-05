<?php
	include "head.php";
?>
	<main>
		<article>
		<p>
			<h4>Hier können Sie sich zum Brunch-Buffet anmelden.</h4>
		</p>	
			<form name="register" action="confirm.php" method="GET">
				<fieldset>
					<table>
						<legend><b>Anmeldeformular - </b>Persönliche Angaben:</legend>
						<tr>
							<td><label for="famname">Familienname</label></td>
							<td><input name="famname" id="famname"></td>
						</tr>
						<tr>
							<td><label for="vorname">Vorname</label></td>
							<td><input name="vorname" id="vorname"></td>
						</tr>	
						<tr>
							<td><label for="adresse">Strasse und Hausnr.</label></td>
							<td><input name="adresse" id="adresse"></td>
						</tr>
						<tr>
							<td><label for="plz">PLZ</label></td>
							<td><input name="plz" id="plz"></td>
						</tr>
						<tr>
							<td><label for="ort">Ort</label></td>
							<td><input name="ort" id="ort"></td>
						</tr>
						<tr>
							<td><label for="mail">E-Mail Adresse</label></td>
							<td><input name="mail" id="mail"></td>
						</tr>
						<tr>
							<td><label for="gebdat">Geburtsdatum</label></td>
							<td><input type="date" name="gebdat" id="gebdat"></td>
						</tr>
					</table>
				</fieldset>
				<fieldset>
					<table>
						<legend>Anzahl Erwachsene und Kinder:</legend>
							<tr>
								<td><label for="famname"><b>Anzahl</b> Erwachsene</label></td>
								<td><input name="numbadult" id="numbadult"></td>
							</tr>
							<tr>
								<td><label for="famname">Kind 1, bitte <b>Alter</b> angeben</label></td>
								<td><input name="agechild1" id="agechild1"></td>
							</tr>
							<tr>
								<td><label for="famname">Kind 2, bitte <b>Alter</b> angeben</label></td>
								<td><input name="agechild2" id="agechild2"></td>
							</tr>
							<tr>
								<td><label for="famname">Kind 3, bitte <b>Alter</b> angeben</label></td>
								<td><input name="agechild3" id="agechild3"></td>
							</tr>
							<tr>
								<td><label for="famname">Kind 4, bitte <b>Alter</b> angeben</label></td>
								<td><input name="agechild4" id="agechild4"></td>
							</tr>
							<tr>
								<td><label for="famname">Kind 5, bitte <b>Alter</b> angeben</label></td>
								<td><input name="agechild5" id="agechild5"></td>
							</tr>
						</table>
					</fieldset>
					<fieldset>
						<table>
							<legend>Sitzplatz-Sektor, Newsletter, Anmeldung</legend>
							<tr>
								<td>
									<label>Sitzplatz-Sektor:
										<select name="sector" size="1">
											<option>vorne</option>
											<option>mitte</option>
											<option>hinten</option>
										</select>
									</label>
								</td>		
								<td><input type="checkbox" name="newsl">Newsletter bestellen |</label></td>
								<td><button type="submit" name="send" value="0">abschicken</button></td>
								<td><button type="reset" name="send" value="0">neu ausfüllen</button></td>
								<td><a href="index.php" titel="| zurück zur Startseite |">| zurück zur Startseite |</a></td>
							</tr>
						</table>
					</fieldset>
				</form>	
			</article>
			<aside>
				<h4>Hinweise</h4>
				<ul>
					<li>Kosten CHF 35.-- pro Person.</li>
					<li>Kinder bis 6 Jahre sind unsere Gäste und für Kinder von 7 bis 15 Jahre kostet der Brunch CHF 1.-- pro Lebensjahr.</li>
					<li>Die Brunchgutscheine sind an der Tageskasse abzuholen und bar zu bezahlen.</li>
				</ul>
			</aside>
		</main>
 
		<footer>
<hr>		
			<a href="#kontakt.html">Kontakt</a>
				<p>© 2020 Doppelklang / 03.2020 BigBand Doppelklang</p>
		</footer>
	</body>
</html>
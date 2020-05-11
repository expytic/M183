<?php
	include_once "../includes/head.php";	
?>
	<main>
		<article>
		<p>
			<h4>Hier können Sie sich zum Brunch-Buffet anmelden.</h4>
		</p>	
			<form name="register" action="confirm.php" method="POST">
				<fieldset>
					<table>
						<legend><b>Anmeldeformular - </b>Persönliche Angaben:</legend>
						<tr>
							<td><label for="famname">Familienname</label></td>
							<td><input name="famname" id="famname" autofocus required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .-]{1,40}"></td>
						</tr>
						<tr>
							<td><label for="vorname">Vorname</label></td>
							<td><input name="vorname" id="vorname" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .-]{1,40}"></td>
						</tr>	
						<tr>
							<td><label for="adresse">Strasse und Hausnr.</label></td>
							<td><input name="adresse" id="adresse" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð\ ]+[ ]{1}+\d{1,4}+[a-z]{0,1}"></td>
						</tr>
						<tr>
							<td><label for="plz">PLZ</label></td>
							<td><input name="plz" id="plz" required pattern="[0-9]{4}"></td>
						</tr>
						<tr>
							<td><label for="ort">Ort</label></td>
							<td><input name="ort" id="ort" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð]+(?:[\s-][a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð]{3,50}"></td>
						</tr>
						<tr>
							<td><label for="mail">E-Mail Adresse</label></td>
							<td><input name="mail" id="mail" required pattern="([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})"></td>
						</tr>
						<tr>
							<td><label for="gebdat">Geburtsdatum</label></td>
							<td><input type="date" name="gebdat" id="gebdat" required pattern="(19|20)\d\d[.](0[1-9]|1[012])[.](0[1-9]|[12][0-9]|3[01])"></td>
						</tr>
					</table>
				</fieldset>
				<fieldset>
					<table>
						<legend>Anzahl Erwachsene und Kinder:</legend>
							<tr>
								<td><label for="numbadult"><b>Anzahl</b> Erwachsene</label></td>
								<td><input name="numbadult" id="numbadult" required></td>
							</tr>
							<tr>
								<td><label for="agechild1">Kind 1, bitte <b>Alter</b> angeben</label></td>
								<td><input name="agechild1" id="agechild1"></td>
							</tr>
							<tr>
								<td><label for="agechild2">Kind 2, bitte <b>Alter</b> angeben</label></td>
								<td><input name="agechild2" id="agechild2"></td>
							</tr>
							<tr>
								<td><label for="agechild3">Kind 3, bitte <b>Alter</b> angeben</label></td>
								<td><input name="agechild3" id="agechild3"></td>
							</tr>
							<tr>
								<td><label for="agechild4">Kind 4, bitte <b>Alter</b> angeben</label></td>
								<td><input name="agechild4" id="agechild4"></td>
							</tr>
							<tr>
								<td><label for="agechild5">Kind 5, bitte <b>Alter</b> angeben</label></td>
								<td><input name="agechild5" id="agechild5"></td>
							</tr>
						</table>
					</fieldset>
					<fieldset>
						
							<legend>Sitzplatz-Sektor, Newsletter, Anmeldung</legend>
							
								
									<label>Sitzplatz-Sektor:
										<select name="sector" size="1">
											<option>vorne</option>
											<option>mitte</option>
											<option>hinten</option>
										</select>
									</label>
										
								<input type="checkbox" name="newsl">Newsletter bestellen |</label><br>
								<button type="submit" name="send" value="0">send</button>
								<button type="reset" name="send" value="0">reset</button><br>
								<a href="../index.php" titel="| zurück zur Startseite |">| zurück zur Startseite |</a>
							
						
					</fieldset>
				</form>	
			</article>
				<h4>Hinweise</h4>
				<ul>
					<li>Kosten CHF 35.-- pro Person.<br></li>
					<li>Kinder bis 6 Jahre sind unsere Gäste und für Kinder von 7 bis 15 Jahre kostet der Brunch CHF 1.-- pro Lebensjahr.</li>
					<li>Die Brunchgutscheine sind an der Tageskasse abzuholen und bar zu bezahlen.</li>
				</ul>
		</main>
 
		<?php
			include_once "../includes/footer.php";
		?>
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
					<h3><b>Anmeldeformular - </b>Persönliche Angaben:</h3>
					<div class="form-row">
						<div class="col">
							<label for="vorname">Vorname</label>
							<input name="vorname" class="form-control" id="vorname" autofocus required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .-]{1,40}">
						</div>	
						<div class="col">
							<label for="famname">Familienname</label>
							<input name="famname" class="form-control" id="famname" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .-]{1,40}">
						</div>

					</div>
					<div class="form-group">
						<label for="adresse">Strasse und Hausnr.</label>
						<input name="adresse" class="form-control" id="adresse" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð\ ]+[ ]{1}+\d{1,4}+[a-z]{0,1}">
					</div>
					<div class="form-row">
					<div class="col">
						<label for="plz">PLZ</label>
						<input name="plz" class="form-control" id="plz" required pattern="[0-9]{4}">
					</div>
					<div class="col">
						<label for="ort">Ort</label>
						<input name="ort" class="form-control" id="ort" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð]+(?:[\s-][a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð]{3,50}">
					</div>
					</div>
					<div class="form-group">
						<label for="mail">E-Mail Adresse</label>
						<input name="mail" class="form-control" id="mail" required pattern="([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})">
					</div>
					<div class="form-group">
						<label for="gebdat">Geburtsdatum</label>
						<input type="date" name="gebdat" class="form-control" id="gebdat" required pattern="(19|20)\d\d[.](0[1-9]|1[012])[.](0[1-9]|[12][0-9]|3[01])">
					</div>
				</fieldset>
				<fieldset>
						<h3>Anzahl Erwachsene und Kinder:</h3>
						<div class="form-group">
								<td><label for="numbadult"><b>Anzahl</b> Erwachsene</label></td>
								<td><input name="numbadult" class="form-control" id="numbadult" required></td>
						</div>
						<div class="form-group">
							<td><label for="agechild1">Kind 1, bitte <b>Alter</b> angeben</label></td>
							<td><input name="agechild1" class="form-control" id="agechild1"></td>
						</div>
						<div class="form-group">
							<td><label for="agechild2">Kind 2, bitte <b>Alter</b> angeben</label></td>
							<td><input name="agechild2" class="form-control" id="agechild2"></td>
							</tr>
							<div class="form-group">
								<td><label for="agechild3">Kind 3, bitte <b>Alter</b> angeben</label></td>
								<td><input name="agechild3" class="form-control" id="agechild3"></td>
						</div>
						<div class="form-group">
							<td><label for="agechild4">Kind 4, bitte <b>Alter</b> angeben</label></td>
							<td><input name="agechild4" class="form-control" id="agechild4"></td>
						</div>
						<div class="form-group">
							<td><label for="agechild5">Kind 5, bitte <b>Alter</b> angeben</label></td>
							<td><input name="agechild5" class="form-control" id="agechild5"></td>
						</div>
					</fieldset>
					<fieldset>
						<h3>Sitzplatz-Sektor, Newsletter, Anmeldung</h3>
						<div class="form-group">
							<label for="sector">Sitzplatz-Sektor:</label>
							<select class="form-control" name="sector" size="1">
								<option>vorne</option>
								<option>mitte</option>
								<option>hinten</option>
							</select>
						</div>		
						<div class="form-check form-check-inline">	
							<input type="checkbox" class="form-check-input" name="newsl">
							<label for="newsl" class="form-check-label">Newsletter bestellen</label>
						</div>
						<br>
						<button type="submit" name="send" class="btn btn-primary" value="0">send</button>
						<button type="reset" name="send" class="btn btn-danger" value="0">reset</button>		
					</fieldset>
				</form>	
				<a href="../index.php" titel="| zurück zur Startseite |">| zurück zur Startseite |</a>	
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
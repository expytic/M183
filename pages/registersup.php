<?php
	include_once "../includes/head.php";
?>
	<main>
		<article>
			<p>
				<h4>Für 50 Franken pro Jahr wirst du Supporter von Doppelklang!</h4>
				<h4>Du bekommst diverse Vergünstigungen und exklusive Zusatzinfos.</h4>
			</p>	
			<form name="registersup" action="confirmsup.php" method="POST">
				<fieldset>
					<h3><b>Registrierung als Supporter*in</b></h3>
					<div class="form-row">
						<div class="from-group col-md-6">
							<label for="vorname">Vorname</label>
							<input name="vorname" class="form-control" id="vorname" autofocus required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .-]{1,50}">
						</div>
						<div class="from-group col-md-6">
							<label for="famname">Familienname</label>
							<input name="famname" class="form-control" id="famname" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð .-]{1,50}">
						</div>
					</div>
					<div class="form-group">
						<td><label for="gebdat">Geburtsdatum</label></td>
						<td><input type="date" name="gebdat" class="form-control" id="gebdat" required></td>
						</div>
					<div class="form-group">
						<td><label for="mail">E-Mail Adresse (=Username)</label></td>
						<td><input name="mail" class="form-control" id="mail" required pattern="([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$"></td>
						</div>
					<div class="form-row">
						<div class="from-group col-md-6">
							<td><label for="passw">Passwort</label></td>
							<td><input type="password" name="passw" class="form-control" id="passw" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"></td>
						</div>
						<div class="from-group col-md-6">
							<td><label for="passwrep">Passwort wiederholen</label></td>
							<td><input type="password" name="passwrep" class="form-control" id="passwrep" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"></td>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<br>
					<td><button type="submit" class="btn btn-primary" name="send" value="0">Registrieren</button></td>
					<td><button type="reset" class="btn btn-danger" name="send" value="0">neu ausfüllen</button></td>
				</fieldset>
			</form>	
		<td><a href="../index.php" titel=" | zurück zur Startseite |">| zurück zur Startseite |</a></td>
		</article>
	</main>
		<?php
			include_once "../includes/footer.php";
		?>
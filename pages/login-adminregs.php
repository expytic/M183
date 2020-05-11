<?php
	include_once "../includes/head.php";
	if(isset($_SESSION['AdminPlus']) && $_SESSION['AdminPlus']){
		header('Location: ./adminregs.php');
		exit;
	}
?>
	<main>
		<article>
		<p>
			<h4>Anmeldungen administrieren (nur mit AdminPlus-Login)</h4>
		</p>	
			<form name="login-showregs" action="checkadminregs.php" method="POST">
				<fieldset>
					<table>
						<legend>AdminPlus-Login</legend>
						<tr>
							<td><label for="user">User:*</label></td>
							<td><input type="text" name="user" id="user"/></td>
						</tr>
						<tr>
							<td><label for="pass">Passwort:*</label></td>
							<td><input type="password" name="pass" id="pass"
							/></td>
						</tr>
						<tr>
							<td>
								<button type="submit" id="send">absenden</button>
							</td>
							<td>
								<input type="reset" value="verwerfen" />
							</td>
						</tr>
						</table>
					</fieldset>
				</form>	
			</article>
		<p>
				<a href="index.php" title="zur Startseite">zur Startseite</a><br>
				<hr>
			</p>
			</article>
		</main> 
 
		<?php
			include_once "../includes/footer.php";
		?>
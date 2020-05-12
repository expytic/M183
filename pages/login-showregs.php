<?php
	include_once "../includes/head.php";
	if(isset($_SESSION['Admin']) && $_SESSION['Admin']){
		header('Location: ./showregs.php');
		exit;
	}
?>
	<main>
		<article>
			<p>
				<h4>alle Anmeldungen anzeigen (nur mit Admin-Login)</h4>
			</p>	
			<form name="login-showregs" action="checkshowregs.php" method="POST">
				<fieldset>
					<h3>Admin-Login</h3>
					<div class="form-group">
							<td><label for="user">User:*</label>
							<td><input type="text" class="form-control" name="user" id="user"/>
					</div>
					<div class="form-group">
						<td><label for="pass">Passwort:*</label>
						<td><input type="password" class="form-control" name="pass" id="pass"/>
					</div>
					<button type="submit" class="btn btn-primary" id="send">absenden</button>
					<input type="reset" class="btn btn-danger" value="verwerfen" />
				</fieldset>
			</form>	
			<p>
				<a href="../index.php" title="zur Startseite">zur Startseite</a><br>
			</p>
		</article>
	</main> 
 
	<?php
		include_once "../includes/footer.php";
	?>
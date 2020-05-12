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
					<h2>AdminPlus-Login</h3>
					<div class="form-group">
						<label for="user">User:*</label>
						<input class="form-control" type="text" name="user" id="user"/>
					</div>
					<div class="form-group">
						<label for="pass">Passwort:*</label></td>
						<input type="password" class="form-control" name="pass" id="pass"/>
					</div>
					<button type="submit" id="send" class="btn btn-primary">absenden</button>
					<input type="reset" value="verwerfen" class="btn btn-danger"/>
				</fieldset>
			</form>	
		</article>
			<p>
				<a href="../index.php" title="zur Startseite">zur Startseite</a><br>
				<hr>
			</p>
			</article>
	</main> 
	<?php
		include_once "../includes/footer.php";
	?>
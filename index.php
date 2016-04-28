<!DOCTYPE html>
<html>
	<head>
		<title>Server Control Center</title>
		<style>
			body {
				font-family: Verdana, Geneva, Arial, sans-serif;
				text-align: center;
			}

			form {
				outline: 1px solid silver;
				margin: 10px auto;
				padding: 20px;
				width: 50%;
			}
		</style>
	</head>
	<body>
		<h1>Freeminer Server Control Panel</h1>
		<h2>Status</h2>
		<p><?php echo(exec("sudo service freeminer site_status")); ?></p>
		<hr>
		<h2>Control</h2>
		<form action="index.php" method="post">
			<label><input type="radio" name="action" value="start"></input>Start</label><br>
			<label><input type="radio" name="action" value="stop"></input>Stop</label><br>
			<input type="submit" name="submit" value="Go!!"></input><br>
			<?php
				if (isset($_POST['submit'])){
					if (isset($_POST['action'])){
						if ($_POST['action'] == 'start'){
							exec("sudo service freeminer start");
								echo("Freeminer has been started.");
						} else if ($_POST['action'] == 'stop') {
							exec("sudo service freeminer stop");
							echo("Freeminer has been stopped.");
						}
					} else {
						echo("You didn't select anything.<br>You silly goose.");
					}
				}
			?>
		</form>
	</body>
</html>

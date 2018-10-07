<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- create your css -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Bootstrap Css below this can use bootstrap and design -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<header>
	<nav>
		<div class="min-wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
			</ul>
			<div class="nav-login">
				<?php
					if(isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST">
						<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Logout</button></form>';
					} else {
						echo '<form action="includes/login.inc.php" method="POST">
					<input class="form-control" type="text" name="uid" placeholder="Username/e-mail" required>
					<input class="form-control" type="password" name="pwd" placeholder="password" required>
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
				</form>
				<a href="signup.php">Sign up</a>';
					}
				?>
			</div>
		</div>
	</nav>
</header>
<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input class="form-control" type="text" name="first" placeholder="Firstname" required>
			<input class="form-control" type="text" name="last" placeholder="Lastname" required>
			<input class="form-control" type="email" name="email" placeholder="E-mail" required>
			<input class="form-control" type="text" name="uid" placeholder="Username"  required>
			<input class="form-control" type="password" name="pwd" placeholder="Password" required>		
 			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>
		</form>


	</div>	

</section>

</body>
</html>

<?php
	include_once 'footer.php'
?>
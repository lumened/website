<?php $page_title = "LumenEd | Sign In";
$page_description = "Login to see the latest videos and messages from your pen pal";
?>

<?php include("includes/head.php"); ?>
	<body class="signin-page" style="overflow-x:hidden;">
		<?php include ('includes/nav.php');?>
		
		<div class="container-fluid orange-panel signin-panel">
			<form class="form-signin">
				<h2 class="form-signin-heading">Please sign in</h2>
				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" autocomplete="off">
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" autocomplete="off">
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="remember-me"> Remember me
				  </label>
				</div>
				<button class="btn btn-lg btn-transparent btn-block" type="submit">Sign in</button>
				<h5><a href="newaccount">Don't have an account? Create one.</a></h5>
			</form>
		</div>
		
		
		<?php include ('includes/footer.php');?>
		<?php include ('includes/scripts.php');?>
	</body>
</html>
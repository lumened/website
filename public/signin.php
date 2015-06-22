<?php $page_title = "LumenEd | Sign In";
$page_description = "Login to see the latest videos and messages from your pen pal";
?>

<?php include("includes/head.php"); ?>
	<body class="signin-page orange-background" style="overflow-x:hidden;">
		<?php include ('includes/nav.php');?>
		
		<div class="container-fluid orange-panel signin-panel">
			<form id="signinForm" class="form-signin" action="utils/login.php" method="post">
				<h2 class="form-signin-heading">Please sign in</h2>
				<input type="text" id="email" class="form-control" placeholder="Email address" required="" autofocus="" autocomplete="off">
				<input type="password" id="password" class="form-control" placeholder="Password" required="" autocomplete="off">
				
				<div class="checkbox"><label><input type="checkbox" value="remember-me"> Remember me</label></div>
				
				<button class="btn btn-lg btn-transparent btn-block row-margin" type="submit">Sign in</button>
				<h5><a href="newaccount">Don't have an account? Create one.</a></h5>
			</form>
			<div id="incompleteMessage" class="statusMessage"><h3 class="text-center">Please complete all the fields before sending.</h3></div>
			<div id="successMessage" class="statusMessage"><h3 class="text-center">Login was successful.</h3></div>
			<div id="failureMessage" class="statusMessage"><h3 class="text-center">Your email or password is incorrect</h3></div>
		</div>
		
		
		<?php include ('includes/footer.php');?>
		<?php include ('includes/scripts.php');?>
	</body>
</html>
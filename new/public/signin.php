<?php $page_title = "LumenEd | Sign In";
$page_description = "Login to see the latest videos and messages from your pen pal";
?>

<?php include("includes/head.php"); ?>
	<body class="signin-page" style="overflow-x:hidden;">
		<?php include ('includes/nav.php');?>

<!-- 		<div class="container-fluid cover row">
			<div class="row text-center">
				<div class="col-sm-10 col-sm-offset-1">
					<h1>Join the team</h1>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-xs-12">
					<a class="btn btn-transparent btn-lg" role="button" href="LumenEdPressKit.zip">Download Press Kit</a>
				</div>
			</div>
		</div> -->
		
<!-- 		<div class="container-fluid orange-panel heading-panel">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h1 class="heading">Video Pen Pal Program 2015-16</h1>
				</div>
			</div>
		</div> -->
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
			  </form>
		</div>
		
		
		<?php include ('includes/footer.php');?>
		<?php include ('includes/scripts.php');?>
	</body>
</html>
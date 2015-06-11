<?php $page_title = "LumenEd | Pen Pal Program";
$page_description = "Login to see the latest videos and messages from your pen pal";
?>

<?php include("includes/head.php"); ?>
	<body class="newaccount-page" style="overflow-x:hidden;">
		<?php include ('includes/nav.php');?>
		
		<div class="container-fluid orange-panel signin-panel">
			<form class="form-signin">
				  
				  <h2 class="form-signin-heading">Create an account</h2>

				  <label class="sr-only" for="firstname"></label>  
				  <input id="firstname" type="text" placeholder="First name" class="form-control" required="" autofocus="">
				  
				  <label class="sr-only" for="lastname"></label>  
				  <input id="lastname" type="text" placeholder="Last name" class="form-control" required="">
				  
				  <div class="row-margin"></div>
				  
				  <label class="sr-only" for="inputEmail"></label>  
				  <input id="inputEmail" type="email" placeholder="Email address" class="form-control" required="">
				  
				  <label for="inputPassword1" class="sr-only">Password</label>
				  <input type="password" id="inputPassword1" class="form-control" placeholder="Password" required="" autocomplete="off">
				  
				  <label for="inputPassword2" class="sr-only">Password</label>
				  <input type="password" id="inputPassword2" class="form-control" placeholder="Re-enter password" required="" autocomplete="off">
				  <span class="help-block" style="color:white;">Must be at least 8 characters long</span>
				  
				  <button class="btn btn-lg btn-transparent btn-block" type="submit">Create account</button>
			</form>

		</div>
		
		
		<?php include ('includes/footer.php');?>
		<?php include ('includes/scripts.php');?>
	</body>
</html>
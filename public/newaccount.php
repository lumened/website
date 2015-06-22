<?php $page_title = "LumenEd | Pen Pal Program";
$page_description = "Login to see the latest videos and messages from your pen pal";
?>

<?php include("includes/head.php"); ?>
	<body class="newaccount-page orange-background" style="overflow-x:hidden;">
		<?php include ('includes/nav.php');?>
		
		<div class="container-fluid orange-panel signin-panel">
			<form class="form-signin">
				  
				  <h2 class="form-signin-heading">Create an account</h2>
				  
				  <div class="form-group">
					<label class="control-label" >Name</label>
					  <input id="firstname" type="text" placeholder="First" class="form-control" required="" autofocus="">
					   
					  <input id="lastname" type="text" placeholder="Last" class="form-control" required="">
				  </div>
				  
				  <div class="form-group">
					<input id="school" type="text" placeholder="School name" class="form-control" required="">
				  </div>
				  
				  <div class="form-group grade-level">
					  <label class="control-label" >Grade Level</label>
						<select id="grade" name="grade" class="form-control">
						  <option value="2">2nd</option>
						  <option value="3">3rd</option>
						  <option value="4">4th</option>
						  <option value="5">5th</option>
						  <option value="6">6th</option>
						  <option value="7">7th</option>
						  <option value="8">8th</option>
						  <option value="9">9th</option>
						</select>
					</div>
					
				  <div class="form-group">
					<label class="control-label">Location</label>
					<input id="city" type="text" placeholder="City/Town" class="form-control" required="">
					<input id="state" type="text" placeholder="State" class="form-control" required="">
					<input id="country" type="text" placeholder="Country" class="form-control" required="">
				  </div>
				  
				  <div class="form-group">
					<label class="control-label">Email and Password</label>
					  <input id="inputEmail" type="email" placeholder="Email address" class="form-control" required="">
					  
					  <input type="password" id="inputPassword1" class="form-control" placeholder="Create a password" required="" autocomplete="off">
					  
					  <input type="password" id="inputPassword2" class="form-control" placeholder="Confirm your password" required="" autocomplete="off">
					  <span class="help-block" style="color:white;">Must be at least 8 characters long</span>
				  </div>
				  
				  <button class="btn btn-lg btn-transparent btn-block" type="submit">Create account</button>
			</form>

		</div>
		
		
		<?php include ('includes/footer.php');?>
		<?php include ('includes/scripts.php');?>
	</body>
</html>
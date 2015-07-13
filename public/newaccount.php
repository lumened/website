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
				  <label class="control-label" >School and Grade Level</label>
					<input id="school" type="text" placeholder="School name" class="form-control" required="">
				  </div>
				  
				  <div class="form-group grade-level">
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
					<!-- <input id="state" type="text" placeholder="State" class="form-control" required=""> -->
					<select id="state" name="state" class="form-control">
						<option value="None">State (US Only)</option>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
					<!-- <input id="country" type="text" placeholder="Country" class="form-control" required=""> -->
					<select id="Country" name="country" class="form-control">
						  <option value="None">Country</option>
						  <option value="GH">Ghana</option>
						  <option value="IN">India</option>
						  <option value="KR">South Korea</option>
						  <option value="SN">Senegal</option>
						  <option value="US">United States</option>
					</select>
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
<?php $page_title = "LumenEd | Pen Pal Program";
$page_description = "The latest videos and messages from your pen pals";
?>

<?php include("includes/head.php"); ?>
	<body class="editprofile-page orange-background" style="overflow-x:hidden;">
		<?php include ('includes/navPenpal.php');?>
		
		<div class="container-fluid orange-panel">
			
			<form action="includes/processupload.php" method="post" enctype="multipart/form-data" class="form-signin" id="MyUploadForm">
				<h2 class="text-center heading">Edit Profile</h2>
				  
				<div class="form-group">
				<img class="img-thumbnail img-responsive row-margin" src="img/penpal_oval.jpg" alt="Display Picture" style="width: 140px; height: 140px;">
				
				<div class="row-margin"></div>
				
				<input name="image_file" id="imageInput" type="file"/>
				
				<div class="row-margin"></div>
				
				<button class="btn btn-sm btn-block btn-transparent pic-btn" type="submit">Upload</button>
				<img src="img/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
				</div>
				<div id="output"></div>
			</form>
			
			<form class="form-signin">
				  <div class="form-group">
				  <label class="control-label" >Display Name</label>
				  <input id="displayname" type="text" placeholder="Display name" class="form-control">
				  <span class="help-block" style="color:white;"><i>The name displayed when you send a message</i></span>
				  </div>
				  
				  <div class="form-group">
						<div class="input-group profile-about">
							<textarea class="form-control" id="about" placeholder="A short description of your class (optional)" rows="3" maxlength="10000"></textarea>
						</div>
				  </div>

				  
				  <div class="form-group">
					<label class="control-label">Change Password</label>				
					
					<input type="password" id="oldPassword" class="form-control" placeholder="Existing password" autocomplete="off">
					
					<div class="row-margin"></div>
					
					<input type="password" id="newPassword1" class="form-control" placeholder="New password" autocomplete="off">
					<input type="password" id="newPassword2" class="form-control" placeholder="Confirm your new password" autocomplete="off">
					<span class="help-block" style="color:white;">Must be at least 8 characters long</span>
				  </div>
				  
				  <button class="btn btn-lg btn-transparent btn-block" type="submit">Save Changes</button>
			</form>

		</div>

		
		<?php include ('includes/footer.php');?>
		<?php include ('includes/scripts.php');?>
		<script type="text/javascript" src="js/jquery.form.min.js"></script>
		<script type="text/javascript" src="js/picUpload.js"></script>
	</body>
</html>
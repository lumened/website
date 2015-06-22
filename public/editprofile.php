<?php $page_title = "LumenEd | Pen Pal Program";
$page_description = "The latest videos and messages from your pen pals";
?>

<?php include("includes/head.php"); ?>
	<body class="editprofile-page orange-background" style="overflow-x:hidden;">
		<?php include ('includes/navPenpal.php');?>
		
		<div class="container-fluid orange-panel">
			<form class="form-signin">
				  
				  <h2 class="text-center heading">Edit Profile</h2>
				  
				  <img class="img-thumbnail img-responsive row-margin" src="img/penpal_oval.jpg" alt="Display Picture" style="width: 140px; height: 140px;">
				  
				  <div class="row-margin"></div>
				  
				  <input id="displayname" type="text" placeholder="Display name" class="form-control" required="" autofocus="">
				  
				  <div class="row-margin"></div>
				  
				  <input id="name" type="text" placeholder="Display name" class="form-control" required="" autofocus="">
				  
				  <div class="row-margin"></div>
				  
				  <button class="btn btn-lg btn-transparent btn-block" type="submit">Save Changes</button>
			</form>

		</div>

		
		<?php include ('includes/footer.php');?>
		<?php include ('includes/scripts.php');?>
	</body>
</html>
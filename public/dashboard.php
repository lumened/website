<?php $page_title = "LumenEd | Pen Pal Program";
$page_description = "The latest videos and messages from your pen pals";
?>

<?php include("includes/head.php"); ?>
	<body class="dashboard-page orange-background" style="overflow-x:hidden;">
		<?php include ('includes/navPenpal.php');?>
		
		<div class="container-fluid orange-panel dashboard-heading">
			<div class="row row-margin">
				<div class="col-sm-2 text-center">
					<img class="img-thumbnail img-responsive" src="img/penpal_oval.jpg" alt="Display Picture" style="width: 140px; height: 140px;">
					<p><a class="btn btn-transparent" href="penpal" role="button">Edit Profile</a></p>
				</div>
				<div class="col-sm-10 text-left welcome-message">
					<h2>Welcome, Ms. Harrison 2nd Grade Class!</h2>
					<h4>Your next video is due in 2 days!</h4>
				</div>
			</div>
		</div>

		
		<?php include ('includes/footer.php');?>
		<?php include ('includes/scripts.php');?>
	</body>
</html>
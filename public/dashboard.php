<?php $page_title = "LumenEd | Pen Pal Program";
$page_description = "The latest videos and messages from your pen pals";
?>

<?php include("includes/head.php"); ?>
	<body class="dashboard-page orange-background" style="overflow-x:hidden;">
		<?php include ('includes/navPenpal.php');?>
		
		<div class="container-fluid orange-panel dashboard-heading">
			<div class="media">
			  <div class="media-left">
				  <img class="media-object" src="img/penpal_oval.jpg" alt="Display Picture">
				  <p><a class="btn btn-transparent btn-block" href="editprofile" role="button">Edit Profile</a></p>
			  </div>
			  <div class="media-body">
				<h2 class="media-heading welcome-message">Welcome, Ms. Harrison 2nd Grade Class</h2>
				<h4>Your next video is due in 2 days!</h4>
			  </div>
			</div>
		</div>
		
		<div class="container-fluid orange-panel dashboard-main" id="dashboard-chat">
			<div class="row">
				<div class="col-sm-12">
					<!-- tabs left -->
					<div class="tabbable">
						<ul class="nav nav-pills nav-stacked col-sm-2 text-center">
							<h4 class="heading">Contacts</h4>
							<li class="active"><a href="#a" data-toggle="tab">Pen Pal</a></li>
							<li><a href="#b" data-toggle="tab">Community</a></li>
							<li><a href="#c" data-toggle="tab">LumenEd</a></li>
						</ul>
						<div class="tab-content col-sm-10">
							<h4 class="heading text-center">Message Board</h4>
							<div class="tab-pane active" id="a">Lorem ipsum dolor sit amet, charetra varius rci quis tortor imperdiet venenatis quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</div>
							<div class="tab-pane" id="b">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.</div>
							<div class="tab-pane" id="c">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum auctor accumsan. Duis pharetra
							varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
						</div>
					</div>
					<!-- /tabs -->
				</div>
			</div>
		</div>

		
		<!-- <?php include ('includes/footer.php');?> -->
		<?php include ('includes/scripts.php');?>
	</body>
</html>
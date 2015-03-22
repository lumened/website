<?php $page_title = "LumenEd | Press";
$page_description = "Want to write about us? Get in touch";
?>

<?php include("includes/head.php"); ?>
	<body class="press-page" style="overflow-x:hidden;">
		<?php include ('includes/nav.php');?>

		<div class="container-fluid cover row">
<!-- 			<div class="row text-center">
				<div class="col-sm-10 col-sm-offset-1">
					<h1>Help us spread the word!</h1>
				</div>
			</div> -->
			<div class="row text-center">
				<div class="col-xs-12">
					<a class="btn btn-transparent btn-lg" role="button" href="#contact">Media Inquiry</a>
				</div>
			</div>
		</div>
		
		<div class="container-fluid inthepress-panel white-panel">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h3 class="heading">In The Press</h3>
				</div>
			</div>
			<div class="row row-margin">
				<div class="col-sm-3 col-sm-offset-1">
					<img class="img-responsive" src="img/yourstory_logo.png" height="10px";/>
				</div>
				<div class="col-sm-4">
					<h4><a href="http://social.yourstory.com/2014/11/lumened-education/" target="_blank">How this 'bright orange box' can aid thousands of under-resourced classrooms in India</a></h4>
				</div>
				<div class="col-sm-2">
					<h4>December 2014</h4>
				</div>
			</div>
			<div class="row row-margin">
				<div class="col-sm-3 col-sm-offset-1">
					<img src="img/wobc-npr-logo.png" height=50px;/>
				</div>
				<div class="col-sm-4">
					<h4><a href="http://www.wobc.org/2014/09/lumened-oberlin-students-create-international-classroom-connections/" target="_blank">Audio: Oberlin students create international classroom connections</a></h4>
				</div>
				<div class="col-sm-2">
					<h4>September 2014</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1">
					<img src="img/oberlin-logo.jpg" height=50px;/>
				</div>
				<div class="col-sm-4">
					<h4><a href="http://news.oberlin.edu/articles/orange-new-learning-tool/" target="_blank">Orange is the new learning tool</a></h4>
				</div>
				<div class="col-sm-2">
					<h4>July 2014</h4>
				</div>
			</div>
		</div>
		
		
		<?php $contact_header = "Media Inquiry";
		$contact_subheader = "Want to write about us? Send us a message below!";?>
		<?php include ('includes/contact.php');?>
		
		<?php include ('includes/footer.php');?>
		<?php include ('includes/scripts.php');?>
	</body>
</html>
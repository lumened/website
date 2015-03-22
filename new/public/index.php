<?php $page_title = "LumenEd | Home";
$page_description = "We connect classrooms around the world and bring digital resources to under-resourced classrooms in developing countries";
?>

<?php include("includes/head.php"); ?>
	<body class="home-page" style="overflow-x:hidden;">
		<?php include ('includes/nav.php');?>

		
		<!-- Landing Page -->
		<!-- <div class="container-fluid cover" id="cover"> -->
		<div class="cover-overlay">
			<div id="video-sec" class="container-fluid cover player lg md sm" data-property="{videoURL:'https://www.youtube.com/watch?v=Ws2YfdU4f28',containment:'self',autoPlay:true, mute:true, startAt:60, stopAt:80, opacity:.7,mute: true,showControls:false}">
				<div class="row text-center pre-video">
					<div class="col-xs-12">
						<h1>Connecting classrooms around the world</h1>
					</div>
				</div>
				<div class="row text-center pre-video">
					<div class="col-xs-12">
						<a onclick="unhide('video-play', 'video-sec')" id="play-video-btn" class="btn btn-primary btn-transparent btn-lg" role="button" href="#">Watch Video &nbsp;<span class="glyphicon glyphicon-play" aria-hidden="true"></span></a>
						<!-- <a class="btn btn-primary btn-transparent btn-lg" role="button" href="#contact">Get In Touch</a> -->
					</div>
				</div>
			</div>
			<div id="pic-sec" class="container-fluid cover cover-mobile xs">
				<div class="row text-center pre-video">
					<div class="col-xs-12">
						<h1>Connecting classrooms around the world</h1>
					</div>
				</div>
				<div class="row text-center pre-video">
					<div class="col-xs-12">
						<a onclick="unhide('video-play', 'pic-sec')" id="play-video-btn" class="btn btn-primary btn-transparent btn-lg" role="button" href="#">Watch Video</a>
						<!-- <a class="btn btn-primary btn-transparent btn-lg" role="button" href="#contact">Get In Touch</a> -->
					</div>
				</div>
			</div>
			<div class="container-fluid row hidden" id="video-play">
					<iframe id="myplayer" src="https://www.youtube.com/embed/Ws2YfdU4f28?rel=0&amp;showinfo=0&" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="container-fluid white-panel three-things">
			<div class="row">
				<div class="col-sm-4 text-center">
					<img class="img-circle" src="img/penpal_oval.jpg" alt="Pen Pal Oval" style="width: 140px; height: 140px;">
					<h3>Video Pen Pal Program</h3>
					<p>We facilitate video conversations between classrooms across the globe.</p>
					<p><a class="btn btn-blue" href="penpal.php" role="button">Get details</a></p>
				</div>
				<div class="col-sm-4 text-center">
					<img class="img-circle" src="img/device_oval.jpg" alt="Device Oval" style="width: 140px; height: 140px;">
					<h3>Bright Orange Box</h3>
					<p>Our battery-powered smart projector brings digital resources to offline classrooms.</p>
					<p><a class="btn btn-blue" href="box.php" role="button">Learn more</a></p>
				</div>
				<div class="col-sm-4 text-center">
					<img class="img-circle" src="img/team_oval.jpg" alt="Team Oval" style="width: 140px; height: 140px;">
					<h3>About Us</h3>
					<p>We're a team of students passionate about improving education through technology.</p>
					<p><a class="btn btn-blue" href="about.php" role="button">Meet the team</a></p>
				</div>
			</div>
		</div>
		
		<?php $contact_header = "Contact Us";
		$contact_subheader = "Send us a message. We'd love to hear from you.";?>
		<?php include ('includes/contact.php');?>
		
		<?php include ('includes/footer.php');?>
		<?php include ('includes/scripts.php');?>
		
	</body>
</html>
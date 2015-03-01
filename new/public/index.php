<?php $page_title = "LumenEd | Home";
$page_description = "Description of this page";
?>

<?php include("includes/head.php"); ?>
	<body>
		<?php include ('includes/nav.php');?>

		
		<!-- Landing Page -->
		<!-- <div class="container-fluid cover" id="cover"> -->
		<div id="video-sec" class="container-fluid cover row player" data-property="{videoURL:'https://www.youtube.com/watch?v=Ws2YfdU4f28',containment:'self',autoPlay:false, mute:true, startAt:55, stopAt:90, opacity:1,mute: true,showControls:false}">
			<div class="row text-center">
				<div class="col-xs-12">
					<h1>Meaningful video dialogues between classrooms</h1>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-xs-12">
					<a class="btn btn-primary btn-transparent btn-lg" role="button" href="#">Watch Video</a>
					<a class="btn btn-primary btn-transparent btn-lg" role="button" href="#">Get In Touch</a>
				</div>
			</div>
		</div>
		
		<div class="container three-things">
			<div class="row">
				<div class="col-md-4 text-center">
					<img class="img-circle" src="img/penpal_oval.jpg" alt="Pen Pal Oval" style="width: 140px; height: 140px;">
					<h2>Video Pen Pal Program</h2>
					<p>We facilitate video conversations between classrooms across the globe.</p>
					<p><a class="btn btn-blue" href="#" role="button">Get details</a></p>
				</div>
				<div class="col-md-4 text-center">
					<img class="img-circle" src="img/device_oval.jpg" alt="Device Oval" style="width: 140px; height: 140px;">
					<h2>Bright Orange Box</h2>
					<p>Our battery-powered smart projector brings digital resources to any classroom, even those without internet or reliable electricity</p>
					<p><a class="btn btn-blue" href="#" role="button">Learn More</a></p>
				</div>
				<div class="col-md-4 text-center">
					<img class="img-circle" src="img/team_oval.jpg" alt="Team Oval" style="width: 140px; height: 140px;">
					<h2>About Us</h2>
					<p>We're a group of students passionate about changing the world through conversation and technology</p>
					<p><a class="btn btn-blue" href="#" role="button">Learn More</a></p>
				</div>
			</div>
		</div>
		
		<?php include ('includes/contact.php');?>
		
		<?php include ('includes/footer.php');?>
		<?php include ('includes/scripts.php');?>
		
	</body>
</html>
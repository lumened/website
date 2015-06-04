<?php $page_title = "LumenEd: Connecting classrooms around the world";
$page_description = "LumenEd connects classrooms around the world and bring digital resources to under-resourced classrooms in developing countries";
?>

<?php include("includes/head.php"); ?>
	<body class="home-page" style="overflow-x:hidden;">
		<?php include ('includes/nav.php');?>

		
		
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
			<div id="pic-sec" class="container-fluid cover cover-mobile lg md sm xs">
				<div class="row text-center pre-video">
					<div class="col-xs-12">
						<h1>Connecting classrooms around the world</h1>
					</div>
				</div>
				<div class="row text-center pre-video">
					<div class="col-xs-12">
						<a onclick="unhide('video-play', 'pic-sec', 'video-sec')" id="play-video-btn" class="btn btn-primary btn-transparent btn-lg" role="button">Watch Video &nbsp;<span class="glyphicon glyphicon-play" aria-hidden="true"></span></a>
				<!-- 		<a class="btn btn-primary btn-transparent btn-lg" href="http://bit.ly/lumenedkickstarter" role="button" target="_blank">Back us on Kickstarter</a> -->
					</div>
				</div>
			</div>
        </div>
      </div>
      <a class="left carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
		
		<!-- Landing Page -->
		<!-- <div class="container-fluid cover" id="cover"> -->
		<div class="cover-overlay">
<!-- 			<div id="video-sec" class="container-fluid cover player lg md sm" data-property="{videoURL:'http://www.youtube.com/watch?v=Ws2YfdU4f28',containment:'self',autoPlay:true, mute:true, startAt:135, stopAt:151, opacity:.7,mute: true,showControls:false}">
				<div class="row text-center pre-video">
					<div class="col-xs-12">
						<h1>Connecting classrooms around the world</h1>
					</div>
				</div>
				<div class="row text-center pre-video">
					<div class="col-xs-12">
						<a onclick="unhide('video-play', 'pic-sec', 'video-sec')" id="play-video-btn" class="btn btn-primary btn-transparent btn-lg" role="button">Watch Video &nbsp;<span class="glyphicon glyphicon-play" aria-hidden="true"></span></a>
					</div>
				</div>
			</div> -->
			<div id="pic-sec" class="container-fluid cover cover-mobile lg md sm xs">
				<div class="row text-center pre-video">
					<div class="col-xs-12">
						<h1>Connecting classrooms around the world</h1>
					</div>
				</div>
				<div class="row text-center pre-video">
					<div class="col-xs-12">
						<a onclick="unhide('video-play', 'pic-sec', 'video-sec')" id="play-video-btn" class="btn btn-primary btn-transparent btn-lg" role="button">Watch Video &nbsp;<span class="glyphicon glyphicon-play" aria-hidden="true"></span></a>
				<!-- 		<a class="btn btn-primary btn-transparent btn-lg" href="http://bit.ly/lumenedkickstarter" role="button" target="_blank">Back us on Kickstarter</a> -->
					</div>
				</div>
			</div>
			<div class="container-fluid hidden" id="video-play">
					<iframe id="myplayer" src="https://www.youtube.com/embed/Ws2YfdU4f28?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		
<!-- 		<div class="container-fluid blue-panel psa">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h4>We just launched our Kickstarter and need your support!</h4>
				</div>
			</div> -->

		</div>
<!-- 		<div class="container-fluid summary-panel white-panel">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h3>We make better learning possible through an accessible education platform that brings communities together.
					</h3>
				</div>
			</div>
		</div> -->
		<div class="container-fluid white-panel three-things">
			<div class="row">
				<div class="col-sm-4 text-center">
					<img class="img-circle" src="img/penpal_oval.jpg" alt="Pen Pal Oval" style="width: 140px; height: 140px;">
					<h3>Video Pen Pal Program</h3>
					<p>We facilitate video conversations between classrooms across the globe.</p>
					<p><a class="btn btn-blue" href="penpal" role="button">Get details</a></p>
				</div>
				<div class="col-sm-4 text-center">
					<img class="img-circle" src="img/device_oval.jpg" alt="Device Oval" style="width: 140px; height: 140px;">
					<h3>Bright Orange Box</h3>
					<p>Our battery-powered smart projector brings digital resources to offline classrooms.</p>
					<p><a class="btn btn-blue" href="box" role="button">Learn more</a></p>
				</div>
				<div class="col-sm-4 text-center">
					<img class="img-circle" src="img/team_oval.jpg" alt="Team Oval" style="width: 140px; height: 140px;">
					<h3>About Us</h3>
					<p>We're a team of students passionate about improving education through technology.</p>
					<p><a class="btn btn-blue" href="about" role="button">Meet the team</a></p>
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
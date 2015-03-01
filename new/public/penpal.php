<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="LumenEd creates conversations between classrooms">
		<meta name="author" content="Prakash Paudel and Henry Harboe">
			<!-- <link rel="shortcut icon" href="img/logo.jpg"> -->
			<!--Font link via google fonts-->
			<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
			
		<title>LumenEd | Video Pen Pal Program</title>

		<!-- CSS -->
		<link href="css/styles.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		</head>
	<body>
		<?php include ('includes/nav.php');?>
		
		<!-- Landing Page -->
		<!-- <div class="container-fluid cover" id="cover"> -->
		<div id="video-sec" class="container-fluid cover row player" data-property="{videoURL:'https://www.youtube.com/watch?v=Ws2YfdU4f28',containment:'self',autoPlay:true, mute:true, startAt:55, stopAt:90, opacity:1,mute: true,showControls:false}">
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
		
		<div class="container quote">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<h1>"By creating conversations between students across all divides, LumenEd is running this game."</h1>
				</div>
				<div class="col-xs-12 text-right">
					<h2>-Drake</h2>
				</div>
			</div>
		</div>
		
		<div class="container three-things">
			<div class="row">
				<div class="col-md-4 text-center">
					<img class="img-circle" src="http://placehold.it/150x150" alt="Generic placeholder image" style="width: 140px; height: 140px;">
					<h2>Video Pen Pal Program</h2>
					<p>We facilitate video conversations between classrooms across the globe.</p>
					<p><a class="btn btn-blue" href="#" role="button">Get details</a></p>
				</div>
				<div class="col-md-4 text-center">
					<img class="img-circle" src="http://placehold.it/150x150" alt="Generic placeholder image" style="width: 140px; height: 140px;">
					<h2>Bright Orange Box</h2>
					<p>Our battery-powered smart projector brings digital resources to any classroom, even those without internet or reliable electricity</p>
					<p><a class="btn btn-blue" href="#" role="button">Learn More</a></p>
				</div>
				<div class="col-md-4 text-center">
					<img class="img-circle" src="http://placehold.it/150x150" alt="Generic placeholder image" style="width: 140px; height: 140px;">
					<h2>About Us</h2>
					<p>We're a group of students passionate about changing the world through conversation and technology</p>
					<p><a class="btn btn-blue" href="#" role="button">Learn More</a></p>
				</div>
			</div>
		</div>
		<div class="container-fluid contact">
			<div class="row">
				<div class="col-xs-12 text-center">
				<h1>Send us a message</h1>
				</div>
			</div>
			<form id="contactForm" action="processForm.php" method="post">
				<div class="row">
					<div class="col-xs-12">
						<div class="input-group">
							<input type="text" name="senderName" class="form-control" id="senderName" placeholder="Name" required="required" maxlength="40"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="input-group">
							<input type="email" name="senderEmail" class="form-control" id="senderEmail" placeholder="Email" required="required" maxlength="50" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="input-group">
							<input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" maxlength="200"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="input-group">
							<textarea name="message" class="form-control" id="message" placeholder="Message" required="required" rows="6" maxlength="10000"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="formButtons">
						<p class="text-center"><input type="submit" id="sendMessage" name="sendMessage" class="btn btn-orange" role="button" Value="Send"/></p>
					</div>
				</div>
			</form>
		</div>
		
		<?php include ('includes/footer.php');?>
		
		
		<div class="end-scripts">
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/script.js"></script>
		<!-- BACKGROUND VIDEO PLUGIN  -->
		<script src="js/jquery.mb.YTPlayer.js"></script>
		<!-- <script src="../../dist/js/bootstrap.min.js"></script> -->
		<!-- <script src="../../assets/js/docs.min.js"></script> -->
		<!-- Analytics Script <script>	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-50216340-1', 'lumened.org');
		ga('send', 'pageview');
		</script> -->
		</div>
	</body>
</html>
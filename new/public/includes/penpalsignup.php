<div class="container-fluid contact blue-panel">
	<div class="row">
		<div class="col-xs-12 text-center">
		<h2 class="heading">Send us a message</h2>
		</div>
	</div>
	<div class="row">
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
				<!-- <div class="row">
					<div class="col-xs-12">
						<div class="input-group">
							<input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" maxlength="200"/>
						</div>
					</div>
				</div> -->
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
	<!-- <div class="row">
		<form id="contactForm" action="processForm.php" method="post">
			<div class="col-md-6 col-md-offset-3">
				<div class="input-group">
					<input type="email" name="senderEmail" class="form-control" id="senderEmail" placeholder="Email" required="required" maxlength="50" />
					<input type="subscribe" id="subscribe" name="subscribe" class="btn btn-orange" role="button" Value="Sign Up for Updates"/>
					<input type="submitMessage" id="sendMessage" name="sendMessage" class="btn btn-orange" role="button" Value="Send a message"/>
				</div>
			</div>
		</form>
	</div> -->
	
	<!--<div class="row forms">
		<div class="col-md-4 col-md-offset-1">
			<form id="emailList" action="php/processEmailList.php" method="post">
				<h1 class="text-center">Sign up for Updates</h1>
				<div class="input-group">
					<input type="email" name="senderEmail" class="form-control" id="senderEmail" placeholder="Email*" required="required" maxlength="50" />
				</div>
				<div id="formButtons">
					<input type="subscribe" id="subscribe" name="subscribe" class="btn btn-orange" role="button" Value="Get Updates"/>
				</div>
			</form>
		</div>
		<div class="col-md-2 text-center">
			<h1>or</h1>
		</div>
		<div class="col-md-4">
			<form id="contactForm" action="php/processForm.php" method="post">
				<h1 class="text-center">Send us a message</h1>
				<div class="input-group">
					<input type="text" name="senderName" class="form-control" id="senderName" placeholder="Name" required="required" maxlength="40"/>
				</div>		
				<div class="input-group">
					<input type="email" name="senderEmail" class="form-control" id="senderEmail" placeholder="Email*" required="required" maxlength="50" />
				</div>
				<div class="input-group">
					<textarea name="message" class="form-control" id="message" placeholder="Message*" required="required" rows="6" maxlength="10000"></textarea>
				</div>
				<div id="formButtons">
					<input type="submit" id="sendMessage" name="sendMessage" class="btn btn-orange" role="button" Value="Send Message"/>
				</div>
			</form>
	</div> -->
		<!--
		<form id="emailList" action="php/processEmailList.php" method="post">
			<div class="col-md-2 col-md-offset-1">
				<div class="input-group">
					<input type="email" name="senderEmail" class="form-control" id="senderEmail" placeholder="Email*" required="required" maxlength="50" />
				</div>
			</div>
			<div class="col-md-2">
				<div id="formButtons">
					<input type="subscribe" id="subscribe" name="subscribe" class="btn btn-orange" role="button" Value="Get Updates"/>
				</div>
			</div>
		</form>
		<div class="col-md-2 text-center">
			<h1>or</h1>
		</div>
		<form id="contactForm" action="php/processForm.php" method="post">
			<div class="col-md-4">
				<div class="input-group">
					<input type="text" name="senderName" class="form-control" id="senderName" placeholder="Name" required="required" maxlength="40"/>
				</div>		
				<div class="input-group">
					<input type="email" name="senderEmail" class="form-control" id="senderEmail" placeholder="Email*" required="required" maxlength="50" />
				</div>
				<div class="input-group">
					<textarea name="message" class="form-control" id="message" placeholder="Message*" required="required" rows="6" maxlength="10000"></textarea>
				</div>
				<div id="formButtons">
					<input type="submit" id="sendMessage" name="sendMessage" class="btn btn-orange" role="button" Value="Send Message"/>
				</div>
			</div
		</form>
		-->
</div>
<div id="contact" class="container-fluid contact orange-panel">
	<div class="row">
		<div class="col-xs-12 text-center">
			<h3 class="heading"><?php echo $contact_header; ?></h3>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 text-center">
			<h4 class="heading"><?php echo $contact_subheader; ?></h4>
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
						<p class="text-center"><input type="submit" id="sendMessage" name="sendMessage" class="btn btn-transparent" role="button" Value="Send"/></p>
					</div>
				</div>
			</form>
	</div>
	<div id="sendingMessage" class="statusMessage"><h3>Sending your message...</h3></div>
	<div id="successMessage" class="statusMessage"><h3>Thanks for the message! We'll get back to you shortly.</h3></div>
	<div id="failureMessage" class="statusMessage"><h3>Oops, looks like something went wrong. You can email us at contact@lumened.org with your message instead.</h3></div>
	<div id="incompleteMessage" class="statusMessage"><h3>Please complete all the fields before sending.</h3></div>
</div>

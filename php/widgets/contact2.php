<div class="container-fluid px-3 py-5 bg-color2">
	<div class="container">
		<div class="row widget border-radius-3">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
				<h3 class="t-color3">Get In Touch</h3>
				<?php @session_start();?>
				
				<?php $_SESSION['token'] = md5(microtime()); 
				?>
				<form action="contact2.php" method="post">
					<div class="row">
						<div class="col-md-4">
							<input name="firstname" type="text" id="firstname" class="customclass">
							<div class="form-group">
									<input required type="text"
													value=""
													placeholder="Name *" 
													data-msg-required="Please enter your name."
													class="form-control"
													name="name" id="name">
							</div>
						</div>
					
						<div class="col-md-4">
							<div class="form-group">
									<input required type="email" 
													value=""
													placeholder="Email *" 
													data-msg-required="Please enter your email address."
													data-msg-email="Please enter a valid email address."
													class="form-control"
													name="email"
													id="email">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
									<input required type="tel"
													maxlength="15"
													minlength="10" 
													value=""
													placeholder="Phone *" 
													data-msg-required="Please enter the phone."
													class="form-control"
													name="phone"
													id="phone">
							</div>
						</div>
					</div>
					<div class="row align-items-center">					
						<div class="col-md-4">
							<div class="form-group">
								<label class="t-color2"><i class="fa fa-list t-color2"></i> Write the Code</label>
								<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
								<img src="captcha.php" /><br>
								<input name="captcha" class="form-control" type="text" required><br>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
									<input required type="text"
													value=""
													placeholder="Subject *" 
													data-msg-required="Please enter your subject."
													class="form-control"
													name="subject" id="subject">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
									<textarea
									data-msg-required="Please enter your message."
									rows="1"
									placeholder="Message *" 
									class="form-control"
									name="message"
									id="message"></textarea>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12 text-right">	
							<input type="submit" value="Send Message" class="boton4-hover font100" data-loading-text="Loading...">
						</div>
					</div>
					<input type="hidden" name="url" id="dir"/>
				</form>
			</div>
		</div>
	</div>
</div>
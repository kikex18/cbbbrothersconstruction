<div class="container-fluid px-2 py-4 bg-light">
	<div class="container">
		<div class="row widget border-radius-3">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
				<h4 class="t-color3"><?php echo $Estimates; ?></h4>
				<form action="contact2.php" method="post">
					<div class="row">
						<div class="col-md-12">
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
					
						<div class="col-md-12">
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

						<div class="col-md-12">
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

						<div class="col-md-12">
							<div class="form-group">
									<input required type="text"
													value=""
													placeholder="Subject *" 
													data-msg-required="Please enter your subject."
													class="form-control"
													name="subject" id="subject">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
									<textarea
									data-msg-required="Please enter your message."
									rows="4"
									placeholder="Message *" 
									class="form-control"
									name="message"
									id="message"></textarea>
							</div>
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="form-group">
								<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" >
								<img src="captcha.php" /><br>
								<input name="captcha" class="form-control" type="text" required placeholder="Write The Code"><br>
							</div>
						</div>
						<div class="col-md-6 text-center">	
							<input type="submit" value="Send Message" class="btn btn-sm bg-color1 text-white" data-loading-text="Loading...">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="padding3">
	<div class="container">		
		<div class="row padding3">
			<div class="col-12 col-sm-12 col-md-6 border bordering bg-color4 border-radius-3 padding1 px-3">
				<div class="row widget bordering">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<h3 class="text-center t-color1"><?php echo "Get In Touch";?></h3><hr class="border2">
						<?php @session_start();?>
						<?php 
							$_SESSION['token'] = md5(microtime());
						?>
						<form action="contact2.php" method="post">
							<div class="row">
								<div class="col-md-6">									
									<div class="form-group">
										<label class="t-color1"><i class="fa fa-user t-color3"></i> Name <span class="required">*</span></label>
											<input name="firstname" type="text" id="firstname" hidden>
											<input required type="text"
															value=""
															data-msg-required="Please enter your name."
															class="form-control"
															name="name" id="name">
									</div>
								</div>
							
								<div class="col-md-6">
									<div class="form-group">
										<label class="t-color1"><i class="fa fa-envelope t-color3"></i> Email <span class="required">*</span></label>
											<input required type="email" 
															value=""
															data-msg-required="Please enter your email address."
															data-msg-email="Please enter a valid email address."
															class="form-control"
															name="email"
															id="email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="t-color1"><i class="fa fa-phone t-color3"></i> Phone <span class="required">*</span></label>
											<input required type="tel"
															maxlength="15"
															minlength="10" 
															value=""
															data-msg-required="Please enter the phone."
															class="form-control"
															name="phone"
															id="phone">
									</div>
								</div>
							
								<div class="col-md-6">
									<div class="form-group">
										<label class="t-color1"><i class="fa fa-list t-color3"></i> Write the Code</label>
										<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
										<img src="captcha.php" /><br>
										<input name="captcha" class="form-control" type="text" required><br>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">									
									<div class="form-group">
										<label class="t-color1"><i class="fa fa-user t-color3"></i> Subject <span class="required">*</span></label>
										<input required type="text"
												value=""
												data-msg-required="Please enter your subject."
												class="form-control"
												name="subject" id="subject">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="t-color1"><i class="fa fa-comment t-color3"></i> Message <span class="required">*</span></label>
											<textarea
											data-msg-required="Please enter your message."
											rows="4"
											class="form-control"
											name="message"
											id="message"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">									
									<input type="submit" value="Send Message" class="boton3" data-loading-text="Loading...">									
								</div>
							</div>
							<input type="hidden" name="url" id="dir"/>
						</form>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6">
				<h3 class="t-color5 mt-3font-h2">Contact Us</h3>
				<hr class="border3 float-left">
				<div class="row mt-5">
					<div class="col-md-12 t-color2">
						<p><i class="fa fa-home btn t-color5 font-h4 px-2 py-2 border-none"></i> <?php echo "$Address" ?></p>
						<p><i class="fa fa-phone btn t-color5 font-h4 px-2 py-2 border-none"></i> <a href="<?php echo "$PhoneRef";?>" class="t-color2 t-color5-hover" title="<?php echo "$Phone";?>"> <?php echo "$Phone";?> To go!</a></p>
						<?php if ($Phone2!='') { ?><p><i class="fa fa-phone btn t-color5 font-h4 px-2 py-2 border-none"></i>  <a href="<?php echo "$Phone2Ref";?>" class="t-color2 t-color5-hover" title="<?php echo "$Phone2";?>"><?php echo "$Phone2".'&emsp;';?></a> </p><?php } ?>
						<p><i class="fa fa-envelope btn t-color5 font-h4 px-2 py-2 border-none"></i> <a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>" class="t-color2 t-color5-hover"><?php echo "$Mail";?></a></p>
						<!-- <p><i class="fa fa-envelope btn t-color5 font-h4 px-2 py-2 border-none"></i> <a href="<?php echo "$Mail2Ref";?>" title="<?php echo "$Mail2";?>" class="t-color2 t-color5-hover font-info"><?php echo "$Mail2";?></a></p> -->
						<p><i class="fa fa-clock-o btn t-color5 font-h4 px-2 py-2 border-none"></i><?php echo "$Schedule"; if ($Schedule2!='') { echo '. '."$Schedule2";}?></p>
						
					
						<p><i class="fa fa-file btn t-color5 font-h4 px-2 py-2 border-none"></i> <?php echo "$License" ;if ($License1!='') { echo '. ' .$License1;} ?></p>
						<p><i class="fa fa-group btn t-color5 font-h4 px-2 py-2 border-none"></i> <?php echo "$Experience";?></p>
						<p><i class="fa fa-user btn t-color5 font-h4 px-2 py-2 border-none"></i> <?php echo "$Bilingual";?></p>
						<!-- <p><i class="fa fa-map-marker btn t-color5 font-h4 px-2 py-2 border-none"></i> <?php echo "$Cover";?></p> -->
						<!-- <p><i class="fa fa-file btn t-color5 font-h4 px-2 py-2 border-none"></i> <?php echo "$Estimates";?></p> -->
						<p><i class="fa fa-money btn t-color5 font-h4 px-2 py-2 border-none"></i> <?php echo "$Payment";?></p>
						<!-- <p><img src="images/elements/cards.png" class="img-fluid"/></p> -->
					</div>
				</div>
				<div class="col-md-12 text-center1 my-1">
	                <a href="<?php echo $facebook;?>" target="blank"><img src="images/elements/brands/facebook.png" class="img-fluid"/></a>
	                <a href="<?php echo $googleplus;?>" target="blank"><img src="images/elements/brands/googleplus.png" class="img-fluid"/></a>
				</div>
			</div>
		</div>
	</div>
</div>
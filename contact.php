<?php include 'php/section/header.php'; include 'php/section/pagename.php'; include 'php/section/click2-to-call.php';?>
<div>
	<div class="container py-5 content">
		<div class="row">
			<div class="col-md-12">
				<?php echo $GoogleMap;?>
			</div>
		</div>
		<div class="row mt-5 mb-3">
			<div class="col-md-6 p-1 footer-font">
				<div class="widget p-2">
					<h3 class="t-color3 font-h3">Contact Info</h3>
					<span class="badge bg-color3 t-color1">Phone:</span>
					<ul class="icon-align-ul pt-3">
						<li>
							<i class="fa fa-phone icon-align"></i> <a href="<?php echo $PhoneRef;?>" class="t-color2 t-color3-hover"><b><?php echo $Phone;?></b></a>
						</li>
						<?php if ($Phone2!='') { ?>
							<li>
								<i class="fa fa-phone icon-align"></i> <a href="<?php echo $Phone2Ref;?>" class="t-color2 t-color3-hover"><b><?php echo $Phone2Name.$Phone2;?></b></a>
							</li>
						<?php } ?>
					</ul>
					<span class="badge bg-color3 t-color1">E-Mail:</span>
					<ul class="icon-align-ul pt-3">
						<li>
							<i class="fa fa-envelope icon-align"></i> <a href="<?php echo $MailRef;?>" class="t-color2 t-color3-hover d-block d-md-none"><b>Send an E-Mail</b></a>
							<a href="<?php echo $MailRef;?>" class="t-color2 t-color3-hover d-none d-md-block"><b><?php echo $Mail;?></b></a>
						</li>
						<?php if ($Mail2!='') { ?>
							<li>
								<i class="fa fa-envelope icon-align"></i> <a href="<?php echo $Mail2Ref;?>" class="t-color2 t-color3-hover"><b><?php echo $Mail2;?></b></a>
							</li>
						<?php } ?>
						
					</ul>
					<span class="badge bg-color3 t-color1">Location and Schedule</span>
					<ul class="icon-align-ul pt-3">
						<li>
							<?php if ($Address!='') { ?>
								<i class="fa fa-home icon-align"></i> <?php echo $Address;?><br>
							<?php } ?>							
							<?php if ($ScheduleMobile!='') { ?>
								<span class="d-block d-md-none"><i class="fa fa-clock-o icon-align"></i> <?php echo $ScheduleMobile;?></span>
							<?php } ?>
							<?php if ($Schedule!='') { ?>
								<span class="d-none d-md-block"><i class="fa fa-clock-o icon-align"></i> <?php echo $Schedule;?></span>
							<?php } ?>
							<?php if ($Schedule2!='') { ?>
								<i class="fa fa-clock-o icon-align"></i> <?php echo $Schedule2;?><br>
							<?php } ?>
							<?php if ($Schedule3!='') { ?>
								<i class="fa fa-clock-o icon-align"></i> <?php echo $Schedule3;?><br>
							<?php } ?>
							<?php if ($Cover!='') { ?>
								<i class="fa fa-map-marker icon-align"></i> <?php echo $Cover;?><br>
							<?php } ?>
						</li>
					</ul>
					<span class="badge bg-color3 t-color1">More Info</span>
					<ul class="icon-align-ul pt-3">
						
						<?php if ($License!='') { ?>
							<li>
								<i class="fa fa-file icon-align"></i> <?php echo $License;?> 
							</li>
						<?php } ?>
						<?php if ($Certification!='') { ?>
							<li>
								<i class="fa fa-certificate icon-align"></i> <?php echo $Certification;?> 
							</li>
						<?php } ?>
						<?php if ($Experience!='') { ?>
							<li>
								<i class="fa fa-user icon-align"></i> <?php echo $Experience;?> 
							</li>
						<?php } ?>
						<?php if ($Bilingual!='') { ?>
							<li>
								<i class="fa fa-file icon-align"></i> <?php echo $Bilingual;?> 
							</li>
						<?php } ?>
						<?php if ($Estimates!='') { ?>
							<li>
								<i class="fa fa-check icon-align"></i> <?php echo $Estimates;?> 
							</li>
						<?php } ?>	
						<?php if ($Services!='') { ?>
							<li>
								<i class="fa fa-check icon-align"></i> <?php echo $Services;?> 
							</li>
						<?php } ?>	
						<?php if ($Payment!='') { ?>
							<li class="d-none d-md-block">
								<i class="fa fa-money icon-align"></i> <?php echo $Payment;?> 
							</li>
						<?php } ?>
						<?php if ($PaymentMobile!='') { ?>
							<li class="d-block d-md-none">
								<i class="fa fa-money icon-align"></i> <?php echo $PaymentMobile;?> 
							</li>
						<?php } ?>
					</ul>
					<p><img src="images/elements/cards.png" class="img-fluid"/></p>
					
					<!-- <span class="badge bg-color3 t-color1">Follow Us</span>
					<p class="pt-2">
		                <a class="btn btn-sm mx-1 btn-primary" href="<?php echo $facebook;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                		<a class="btn btn-sm mx-1 btn-light t-color2-hover border border-dark" href="<?php echo $instagram;?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                		<a class="btn btn-sm mx-1 btn-danger" href="<?php echo $youtube;?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
		            </p> -->              
				</div>
			</div>
			<div class="col-md-6 service-height pt-3">
				<h3 class="t-color3"><?php echo 'Contact Us';?></h3>
				<?php include 'php/section/formulario.php';?>
			</div>
		</div>
	</div>
</div>
<?php include 'php/section/footer.php';?>
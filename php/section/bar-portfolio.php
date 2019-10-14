<div class="bg-light">	
	<div class="container-fluid bg-color2">
		<div class="row">			
			<div class="col-12 col-sm-12 col-lg-6 col-xl-6 no-padding py-5">
				<div class="">
					<div class="container bgSec px-3 px-md-5" data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
						<em class="t-color1"><?php echo $Estimates;?></em>
						<h3 class="t-color1"><?php echo $Phrase[0];?></h3>
						<p class="t-color1 pt-2"><?php echo $Home[0]; ?></p>
						<p class="t-color1 pb-2"><?php echo $Home[2]; ?></p>
						<a href="contact.php" class="btn rounded-5 bg-light text-dark"><i class="fa fa-pencil"></i> Contáctanos</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-lg-6 bg-light py-5">
				<div class="row py-2 px-lg-2">
					<div class="col-12 col-md-12 mx-auto text-center" data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
						<h3 class="t-color3 pt-4"><?php echo $Phrase[2];?></h3><hr class="w-25">
					</div>
				</div>
				<div class="row mt-2 pb-3">
					<?php for($i=1;$i<=8;$i++){ ?>
						<div class="col-6 col-sm-4 col-md-3 p-3" data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
							<div class="container-overlay img-thumbnail">
								<a data-fancybox="gallery" data-caption="<?php echo $Company; ?>" href="images/portfolio/full/<?php echo $i;?>.jpg">
									<img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-responsive img-thumbnail" alt="Portfolio-<?php echo $i;?>">
								</a>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>
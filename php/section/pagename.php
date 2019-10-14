<section itemscope itemtype="http://schema.org/WPHeader" class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12 pt-3 pb-2">
				<h2 itemprop="headline" itemprop="name" class="text-center breadcumb-title">
					<?php if ($page_name=="about.php") { ?>
			      		<p class="t-color2 h5"><?php echo $Phrase[0]; ?></p>
			      	<?php } elseif ($page_name=="services.php") { ?>
			      		<p class="t-color2 h5"><?php echo $Phrase[1]; ?></p>
			        <?php } elseif ($page_name=="gallery.php") { ?>
			         	<p class="t-color2 h5"><?php echo $Phrase[2]; ?></p>
			        <?php } elseif ($page_name=="video.php") { ?>
			          <p class="t-color2 h5"><?php echo $Phrase[3] ;?></p>
		          	<?php } elseif ($page_name=="services.php") { ?>
			          <p class="t-color2 h5"><?php echo $Phrase[3] ;?></p>
			         <?php } elseif ($page_name=="blog.php") { ?>
			          <p class="t-color2 h5"><?php echo $Phrase[4] ;?></p>
			        <?php } elseif ($page_name=="testimonials.php") { ?>
			          <p class="t-color2 h5"><?php echo $Phrase[0]; ?></p>
			        <?php } elseif ($page_name=="contact.php") { ?>
			         	<p class="t-color2 h5"><?php echo $Estimates; ?></p>
			        <?php } elseif ($page_name==$LandingURL[1].".php") { ?>
						<p class="h5"> <?php echo $Phrase[4]; ?></p>
					<?php } elseif ($page_name==$LandingURL[2].".php") { ?>
						<p class="h5"> <?php echo $Phrase[0]; ?></p>
					<?php } elseif ($page_name==$LandingURL[3].".php") { ?>
						<p class="h5"> <?php echo $Phrase[3]; ?></p>
					<?php } ?>
				</h2>
		    </div>
		</div>
	</div>
</section>
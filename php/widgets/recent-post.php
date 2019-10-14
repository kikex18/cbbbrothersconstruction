<div class="padding3 bg-color4">
	<div class="container widget">
		<div class="col-md-12 mt-3">
			<h3><strong class="uppercase">Recent Post</strong></h3>
		</div>
		<div class="row my-4">
			<div class="col-md-12 col-sm-12 col-12">
				<?php for ($i=1; $i <=3 ; $i++) { ?>
					<span><a href="blog.php" title="<?php echo $BlogEntryT[$i];?>"><?php echo $BlogEntryT[$i];?></a><br><?php echo $Date.$BlogDate[$i];?></span><hr>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
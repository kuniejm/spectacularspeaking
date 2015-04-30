<div class="col-md-6 col-sm-12">
	<div class="speaker-with-bio">
		<div class="speaker">
			<div class="image-holder">
				<?php 
				  $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), "full")[0];
				?>
				<div class="background-image" style="background-image: url(<?= $image_url ?>)"></div>
			</div>
		</div>

		<div class="speaker-description">
			<h2><?php the_title(); ?></h2>
			<?php the_field('short_description'); ?>
			
      <div class="speaker-buttons">
        <a href="<?php echo get_permalink(); ?>" class="text-link">Read more</a>
      </div>
		</div>
  </div>
</div>

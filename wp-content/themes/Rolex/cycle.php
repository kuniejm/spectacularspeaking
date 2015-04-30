<div style="position: relative;" id="cycle">
		
	<?php 
		$slide = get_option('role_slide_cat');
		$count = get_option('role_slide_count');
		$slide_query = new WP_Query( 'category_name='.$slide.'&posts_per_page='.$count.'' );
		while ( $slide_query->have_posts() ) : $slide_query->the_post();
	?>	

	<div class="slide">
		<div class="slide-content">
			<h2><?php the_title(); ?></h2>
			<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
			<div class="clear"></div>
			<a class="sl-more" href="<?php the_permalink() ?>">Read More</a>
		</div>
		
		<div class="slide-banner">
		
		<?php if (has_post_thumbnail()) : ?>
			<img class="slidepic" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=330&amp;w=580&amp;zc=1" alt=""/>
		<?php else: ?>
			<img class="slidepic" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php bloginfo('stylesheet_directory'); ?>/images/star.png&amp;h=330&amp;w=580&amp;zc=1" alt=""/>
		<?php endif; ?>
		</div>
		<div class="clear"></div>
	</div>
	<?php endwhile; ?>
	
</div>
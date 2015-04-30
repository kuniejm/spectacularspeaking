<?php get_header(); ?>
<div class="home-widget clearfix">

	<?php if( function_exists('dynamic_sidebar') && dynamic_sidebar('Services widgets') ) : else : ?>
	<?php endif; ?>
</div>
<?php 
$page_id = 162;
$page_data = get_page( $page_id );
echo apply_filters('the_content', $page_data->post_content);
?>
<div id="home-content">
<div class="container">
<div class="bloghead"><h4>Previously on Spectacular Speaking:</h4></div>
<?php $count = 0; ?>

<?php 

	$hcount = get_option('role_hcount');

	$new_query = new WP_Query( 'posts_per_page='.$hcount.'' );

	while ( $new_query->have_posts() ) : $new_query->the_post();

?>



<div class="box <?php if (++$count % 4 == 0) { echo "lastbox"; } ?>" id="post-<?php the_ID(); ?>">
	<?php if (has_post_thumbnail()) : ?>
	<div class="boxim">

		<a href="<?php the_permalink() ?>"><img class="boximg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=130&amp;w=210&amp;zc=1" alt=""/></a>

	</div>
	<?php else: ?>
	<div class="boxim">

		<a href="<?php the_permalink() ?>"><img class="boximg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php bloginfo('stylesheet_directory'); ?>/images/star.png&amp;h=130&amp;w=210&amp;zc=1" alt=""/></a>

	</div>
	<?php endif; ?>
	

	<div class="btitle">

		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

	</div>

	<div class="entry">

		<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>

		<div class="clear"></div>

	</div>

	<a class="bmore" href="<?php the_permalink() ?>">Read More</a>

</div>



<?php if(++$counter % 4 == 0) : ?>

<div class="clear"></div>

<?php endif; ?>



<?php endwhile; ?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>

<?php get_footer(); ?>
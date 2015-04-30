<?php get_header(); ?>

<div id="content" >

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post" id="post-<?php the_ID(); ?>">

<div class="entry">
<?php the_content('Read the rest of this entry &raquo;'); ?>
<div class="clear"></div>
</div>
</div>
<?php endwhile; endif; ?>
</div>		

<?php get_sidebar(); ?>
<?php get_footer(); ?>
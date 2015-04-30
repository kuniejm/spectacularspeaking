<?php get_header(); ?>

<div id="content" >
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post clearfix" id="post-<?php the_ID(); ?>">
<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="postmeta">
		<strong>Posted by </strong><span class="author"><?php the_author(); ?> </span> 
		<strong>Posted on</strong> <span class="clock"> <?php the_time('M - j - Y'); ?> </span>
	
</div>
<div class="entry entry-right">
<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
<div class="clear"></div>
</div>


</div>
<?php endwhile; ?>

<?php getpagenavi(); ?>

<?php else : ?>

<div class="title">
		<h2>Your search - <?php the_search_query();?> - did not match any entries.</h2>
</div>


<div class="entry">
<p>Suggestions:</p>
<ul>
   <li>  Make sure all words are spelled correctly.</li>
   <li>  Try different keywords.</li>
   <li>  Try more general keywords.</li>
</ul>
</div>


<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
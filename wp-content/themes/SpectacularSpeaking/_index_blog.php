<h1 class="text-white">Our blog</h1>

<div class="posts-list">
	<?php
  query_posts(Array(
    'posts_per_page' => 3,
    'category_name' => 'news'
  ));
  the_post();
  ?>
	<div class="post post-extended">
		<a href="<?php the_permalink(); ?>" class="post-title">
      <?php the_title(); ?>
    </a>
    
		<?php $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<!-- <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" class="post-thumbnail"> -->

		<div class="post-excerpt">
			<?php the_excerpt(); ?>
		</div>
  </div>

  <?php while(have_posts()): the_post(); ?>
		<div class="post post-short">
			<a href="<?php the_permalink(); ?>" class="post-title">
        <?php the_title(); ?>
      </a>
			<time class="post-date"><?php the_date(); ?></time>
		</div>
	<?php endwhile; ?>
	
	<a href="#" class="btn">More entries</a>
</div>

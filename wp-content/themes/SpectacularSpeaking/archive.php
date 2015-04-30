<?php
get_header();
?>

<section class="blog-posts subpage-content">
  <div class="container">
    <h1><?php single_cat_title(); ?></h1>

    <?php while (have_posts()): the_post(); ?>
      <div class="post">
        <a href="<?php the_permalink() ?>">
          <h1 class="post-title"><?php the_title(); ?></h1>

          <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>
        </a>

        <div class="post-content post-excerpt">
          <?php the_excerpt(); ?>
        </div>
      </div>
    <?php endwhile; ?>

    <?php wp_pagenavi();  ?>
  </div>
</section>

<?php get_footer();

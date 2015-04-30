<?php
get_header();
?>

<?php while (have_posts()): the_post(); ?>

<section class="blog-posts subpage-content">
  <div class="container">
    <h1 class="post-title"><?php the_title(); ?></h1>

    <div class="post-thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>

    <?php get_ssb(); ?>

    <div class="post-content">
      <?php the_content(); ?>
    </div>

    <?php get_ssb(); ?>
  </div>
</section>

<?php endwhile; ?>

<?php get_footer();

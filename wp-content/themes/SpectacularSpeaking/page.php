<?php 
get_header();
?>

<section class="subpage-content">
  <div class="container">
    <div class="row">
      <?php while (have_posts()): the_post();
      ?>
      <div class="col-sm-12">
        <h1><?php the_title(); ?></h1>
      </div>
    </div><!--end of row-->
    </div><!--end of container-->

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php the_content(); ?>
        </div><?php endwhile; ?>
      </div><!--end of row-->
    </div><!--end of container-->
</section>
<?php get_footer();

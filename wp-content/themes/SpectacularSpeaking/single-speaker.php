<?php
get_header();
?>
<?php the_post(); ?>

<section class="speaker-full subpage-content">
  <div class="container">
    <div class="speaker-left">
      <div class="speaker-with-bio speaker-with-bio__vertical">
        <div class="speaker">
          <div class="image-holder">
            <?php
              $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), "full")[0];
            ?>
            <div class="background-image" style="background-image: url(<?= $image_url ?>)"></div>
          </div>
        </div>

        <div class="speaker-description">
          <h1><?php the_title(); ?></h1>

          <?php if (get_field("twitter_handle")): ?>
            <a target="_blank" href="https://twitter.com/<?php the_field("twitter_handle") ?>" class="twitter-link">@<?php the_field("twitter_handle") ?></a>
          <?php endif ?>

          <div class="post-excerpt">
            <?php the_field('short_description'); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="post-content">
      <?php the_content(); ?>
    </div>

    <?php if (get_field("videos")): ?>
      <h2>Videos</h2>

      <div class="post-content">
        <?php the_field("videos") ?>
      </div>
    <?php endif ?>

    <?php if (get_field("gallery")): ?>
      <h2>Gallery</h2>

      <div class="post-content">
        <?php the_field("gallery") ?>
      </div>
    <?php endif ?>

    <?php if (get_field("testimonials")): ?>
      <h2>Testimonials</h2>

      <div class="post-content">
        <?php the_field("testimonials") ?>
      </div>
    <?php endif ?>
  </div>
</section>

<?php get_footer();

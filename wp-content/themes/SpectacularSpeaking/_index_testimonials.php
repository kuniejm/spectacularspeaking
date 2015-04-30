<div class="container">
  <h1 class="text-white">Testimonials</h1>

  <div class="owl-carousel testimonials-carousel">
    <?php
      query_posts(Array(
        'post_type' => 'testimonial',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1
      ));
      while (have_posts()): the_post();
    ?>
      <div class="testimonial">

        <?php
          $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id(), "full")[0];
        ?>
        <a href="<?= esc_attr(get_permalink(get_field("related_speaker")->ID)) ?>" rel="nofollow">
          <img src="<?= $thumbnail_url ?>" class="testimonial-photo" alt="<?= esc_attr(get_field("related_speaker")->post_title) ?>">
        </a>

  			<div class="testimonial-description">
          <a href="<?= esc_attr(get_permalink(get_field("related_speaker")->ID)) ?>" rel="nofollow">
            <div class="testimonial-title">
      				<?= get_field("related_speaker")->post_title ?>
            </div>
          </a>

  				<div class="testimonial-content">
            <?php the_content(); ?>
  				</div>

          <div class="testimonial-author">
            <?php the_field("quote_author"); ?>
          </div>
  			</div>

  		</div>
    <?php endwhile; ?>

	</div>
</div>

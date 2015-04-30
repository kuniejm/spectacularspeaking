<?php get_header(); ?>

<div class="main-container">
  <a id="home" class="in-page-link"></a>
  <?php include '_landing.php' ?>

	<a id="about" class="in-page-link"></a>
	<section class="inline-video" id="about-welcome">
    <?php query_posts(["pagename" => "frontpage-articles/welcome-frontpage"]); the_post(); ?>

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div><!--end of row-->
			<div class="row">
				<div class="col-md-6">
          <?php the_content(); ?>
					<a href="#tickets" class="btn">Get Tickets</a>
					<a href="#subscribe" class="btn btn-hollow">Subscribe</a>
				</div>
				<div class="col-md-6">
					<div class="embedded-video-holder">
						<?php echo get_theme_mod('welcome_video'); ?>
					</div>
				</div>
			</div><!--end of row-->
		</div><!--end of container-->
	</section>

	<section class="topics duplicatable-content overlay">

		<div class="background-image-holder parallax-background">
			<img class="background-image" alt="About Image" src="<?php bloginfo( 'template_url' ); ?>/img/topics.jpg">
		</div>

		<div class="container">
			<h1 class="text-white">Topics Covered</h1>

			<div class="row">
				<div class="col-md-6">
          <?php query_posts(["pagename" => "frontpage-articles/topics-covered-number-1"]); the_post(); ?>
          <?php the_content(); ?>
					<!-- <div class="topic">
						<i class="pe-7s-ribbon"></i>
						<h3 class="text-white">Content</h3>
						<p class="lead text-white">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
						</p>
						<ul class="ruled-list text-white">
							<li>Introduction to PHP</li>
							<li>How PHP changed the web</li>
							<li>Why developers love PHP</li>
							<li>Improving WordPress workflow</li>
						</ul>
					</div> -->
				</div>

				<div class="col-md-6">
          <?php query_posts(["pagename" => "frontpage-articles/topics-covered-number-2"]); the_post(); ?>
          <?php the_content(); ?>
				</div>
			</div>
		</div><!--end of container-->

	</section>

	<a id="speakers" class="in-page-link"></a>

	<section class="speakers duplicatable-content" id="speakers">

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Speakers</h1>
				</div>
			</div><!--end of row-->

			<div class="row">
        <?php
          query_posts(Array(
            'post_type' => 'speaker',
            'meta_key' => 'past_speaker',
            'meta_value' => "0",
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => 6
          ));
          while (have_posts()): the_post();
        ?>
        	<?php include "_index_speaker.php"; ?>
				<?php endwhile; ?>
			</div>
			<div class="centering">
				<a href="<?= esc_attr(home_url("speakers")) ?>" class="btn">More speakers</a>
			</div>
		</div><!--end of container-->
	</section>

	<section class="testimonials duplicatable-content">
		<?php include '_index_testimonials.php' ?>
	</section>

	<a id="schedule" class="in-page-link"></a>

	<section class="schedule schedule-with-text" id="agenda">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Agenda</h1>
				</div>

				<div class="col-md-6">
					<?php
					$day_number = 1;
					include "_index_schedule.php";
					?>
				</div>

				<div class="col-md-6">
					<?php
					$day_number = 2;
					include "_index_schedule.php";
					?>
				</div>
			</div><!--end of row-->
		</div><!--end of container-->
	</section>

  <?php
  $images = nggdb::get_gallery(FRONTPAGE_NEXTGEN_GALLERY_ID);
  ?>
  <section class="lightbox-gallery preserve-3d">

		<div class="gallery-holder">
			<ul>
        <?php foreach ($images as $image): ?>
  				<li>
            <div class="background-image-holder">
              <?= $image->get_href_thumb_link() ?>
            </div>
  				</li>
        <?php endforeach ?>
			</ul>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div>
						<i class="icon pe-7s-camera text-white"></i>
						<h1 class="text-white"><?php echo get_theme_mod('gallery_title'); ?></h1>
            <span class="lead text-white">
              See more photos in
              <a href="<?= home_url("gallery") ?>" class="text-white">our gallery</a>
            </span>
					</div>
				</div>
			</div><!--end of row-->
		</div><!--end of container-->
	</section>

	<a id="contact" class="in-page-link"></a>

  <section class="tickets duplicatable-content" id="tickets">
    <div class="container">
      <h1>Tickets</h1>
      <div class="row tickets-wrapper">
        <?php
        query_posts(Array(
          'posts_per_page' => -1,
          'post_type' => 'tickets',
          'orderby' => 'menu_order',
          'order' => 'ASC'
        ));

        // Defines the col width that we'll use for a ticket's section,
        // f.e. col-sm-4 when 3 posts
        //      col-sm-6 when 2 posts
        $section_col_size = 12 / $wp_query->post_count;

        while (have_posts()): the_post();
        ?>
        <div class="col-sm-<?= $section_col_size ?>">
          <div class="ticket-block side <?= get_field("is_special") ? 'featured' : '' ?>">
            <a class="buy-now" href="http://www.eventbrite.com/e/spectacular-speaking-barcelona-2015-tickets-12525182157">
              <header>
                <?php if (get_field("is_special")): ?>
                  <div class="pricing-ribbon">Special</div>
                <?php endif ?>
                <div class="ticket-price h1"><?php the_title(); ?></div>
              </header>
              <div class="pricing">
                <?php the_field('ticket_price'); ?>
              </div>
              <?php the_content(); ?>
              <a class="buy-now button" href="http://www.eventbrite.com/e/spectacular-speaking-barcelona-2015-tickets-12525182157">Buy now</a>
            </a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

  <section class="sponsors-content">
    <div class="container text-white">
      <h1 class="text-white">Partners</h1>

        <?php query_posts(["pagename" => "frontpage-articles/partners"]); the_post(); ?>
        <?php the_content(); ?>
      </div>
    </div>
  </section>

  <a id="venue" class="in-page-link"></a>

  <section class="venue-section" style="background-image:url(<?= esc_attr(get_theme_mod('venue_background_image')) ?>)">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-6">
          <h1>Venue</h1>

          <div class="venue-container">
            <div class="text-white">
              <?php query_posts(["pagename" => "frontpage-articles/venue-information"]); the_post(); ?>
              <?php the_content(); ?>

              <!-- <a href="<?= esc_attr(home_url("venue")) ?>" class="btn white-border readmore">Read more</a> -->
            </div>
          </div>
      </div>
      </div><!--end of row-->
    </div><!--end of container-->

    <div class="map-holder col-md-6 col-sm-4">
      <div class="contact-map" style="overflow:hidden; width: 100%; height: 600px">
        <iframe src="https://www.google.com/maps/embed/v1/place?q=Carrer%20de%20C%C3%B2rsega%2C%20286%2C%20Barcelona%2C%20Spain&key=AIzaSyA9rFHppP8sD3ntqq4HHqFUE7ncAQtITRA" width="100%" height="750px" frameborder="0" style="border:0; margin-top: -150px"></iframe>
      </div>
    </div>
  </section>

	<a id="subscribe" class="in-page-link"></a>

	<section class="subscribe-2" id="subscribe">

		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<i class="icon pe-7s-pen"></i>
					<i class="icon pe-7s-mail-open-file"></i>
					<i class="icon pe-7s-paper-plane"></i>
					<h1 class="large-h1">Subscribe to stay informed</h1>
				</div>
			</div><!--end of row-->

			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="email-subscribe mail-list-signup">
            <?php
            if( function_exists( 'mc4wp_form' ) ) {
                mc4wp_form();
            }
            ?>
          </div>

					<!-- <form class="email-subscribe mail-list-signup">
						<div class="col-sm-7">
							<input class="form-email signup-email-field" type="text" placeholder="Enter your email address">
						</div>

						<div class="col-sm-5">
							<input class="btn" type="submit" value="Subscribe">
						</div>

						<div class="col-sm-12 text-center">
							<span>* We never share your email with 3rd parties</span>
						</div>
					</form> -->
				</div>
			</div><!--end of row-->
		</div><!--end of container-->

	</section>
</div>

<?php get_footer();

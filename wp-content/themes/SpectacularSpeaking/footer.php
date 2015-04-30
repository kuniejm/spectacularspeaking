    </div>

		<div class="footer-container">
			<footer class="classic">
				<div class="container">
					<div class="row">
            <?php
              wp_nav_menu( array(
               'theme_location' => 'footer-menu',
               'menu_class' => 'menu',
               'menu_container' => 'div',
               'container_class' => 'col-sm-2'
              ) );
            ?>

						<div class="col-sm-6">
              <?php query_posts(["pagename" => "mission"]); the_post(); ?>
							<h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
						</div>

						<div class="col-sm-4">
							<ul class="contact-methods">
								<li><i class="icon pe-7s-mail"></i><span><?php echo get_theme_mod('email'); ?></span></li>
								<li><i class="icon pe-7s-phone"></i><span><?php echo get_theme_mod('phone'); ?></span></li>
								<li><i class="icon pe-7s-map-marker"></i><span><?php echo get_theme_mod('address'); ?></span></li>
							</ul>
						</div>
					</div><!--end of row-->

					<div class="row">
						<div class="col-sm-12 text-center">
							<ul class="social-profiles">
                <li><a href="https://www.facebook.com/SpectacularSpeaking?ref=stream&fref=nf"><i class="icon social_facebook"></i></a></li>
								<li><a href="https://twitter.com/SpecSpeak"><i class="icon social_twitter"></i></a></li>
							</ul>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</footer>
		</div>
		<!--  jQuery 1.7+  -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/owl_carousel/assets/js/jquery-1.9.1.min.js"></script>
    <!-- Include js plugin -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/owl_carousel/owl-carousel/owl.carousel.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/skrollr.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.plugin.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.countdown.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/lightbox.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/smooth-scroll.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>

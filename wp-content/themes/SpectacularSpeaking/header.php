<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" media="all"/>
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/js/owl_carousel/owl-carousel/owl.carousel.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/js/owl_carousel/owl-carousel/owl.theme.css">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <a id="top"></a>

    <div class="nav-container">
      <nav class="overlay-nav">
          <div class="container">
              <div class="row">
                  <div class="col-md-2">
                      <a href="<?php bloginfo( 'home' ); ?>">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 83.591 78.825" xml:space="preserve" class="logo logo-light">
                        <path d="M59.297,48.788l24.294-18.847H54.278c-0.958,1.507-2.083,2.78-2.882,2.78c-1.489,0-3.811-5.459-10.001-5.459
                          c-2.977,0-6.787,1.517-6.787,5.033c0,4.367,5.894,6.067,9.167,7.219c12.501,4.245,15.061,10.368,15.061,16.13
                          c0,4.301-1.86,9.206-6.165,12.374l16.614,10.808l-9.922-29.903L59.297,48.788z M40.383,48.125
                          C27.347,43.999,25.917,37.996,25.917,32.84c0-0.88,0.111-1.87,0.341-2.899H0l23.315,18.812l-8.61,30.072l15.907-10.348
                          c-3.719-2.331-6.302-6.093-6.302-11.378c0-5.153,3.037-8.187,3.632-8.187c1.011,0,0,12.311,12.798,12.311
                          c0.369,0,0.732-0.017,1.092-0.043l0.165-0.107l0.125,0.082c3.913-0.37,7.072-2.321,7.072-5.692
                          C49.194,51.036,43.836,49.216,40.383,48.125z M50.069,20.732L41.997,0l-7.861,20.413c1.973-0.829,4.359-1.338,7.259-1.338
                          C44.733,19.075,47.688,19.776,50.069,20.732z"/>
                        </svg>
                      </a>
                  </div>

                  <div class="col-md-10 text-right">
                      <ul class="menu social-links">
                        <li class="social-link"><a href="http://facebook.com/SpectacularSpeaking"><i class="icon social_facebook"></i></a></li>
                        <li class="social-link"><a href="http://twitter.com/SpecSpeak"><i class="icon social_twitter"></i></a></li>
                      </ul>

                      <?php
                       wp_nav_menu( array(
                         'theme_location' => 'main-menu',
                         'menu_class' => 'menu',
                         'menu_container' => 'div'
                       ) );
                      ?>

                      <div class="mobile-menu-toggle"><i class="icon icon_menu"></i></div>
                  </div>
              </div><!--end of row-->
          </div><!--end of container-->

          <div class="bottom-border"></div>

          <!-- <div class="sidebar-menu">
              <img alt="Logo" class="logo" src="<?php bloginfo( 'template_url' ); ?>/img/logo.png">
              <div class="bottom-border"></div>
              <div class="sidebar-content">

                  <div class="widget">
                      <ul class="menu" style="margin-right: 32px;">
                          <li><a class="inner-link" href="#home" target="default">home</a></li>

                          <li><a class="inner-link" href="#about" target="default">about</a></li><li><a class="inner-link" href="#speakers" target="default">speakers</a></li><li><a class="inner-link" href="#schedule" target="default">schedule</a></li><li><a class="inner-link" href="#contact" target="default">directions</a></li><li><a class="inner-link" href="#subscribe" target="default">subscribe</a></li>
                          <li class="social-link"><a href="#"><i class="icon social_twitter"></i></a></li>
                          <li class="social-link"><a href="#"><i class="icon social_facebook"></i></a></li>
                          <li class="social-link instagram-toggle"><a href="#" class="instagram-toggle-init"><i class="icon social_instagram"></i></a></li>
                      </ul>
                  </div>

                  <div class="widget">
                      <ul class="social-profiles">
                          <li><a href="#"><i class="icon social_twitter"></i></a></li>
                          <li><a href="#"><i class="icon social_facebook"></i></a></li>
                          <li><a href="#"><i class="icon social_dribbble"></i></a></li>
                          <li><a href="#"><i class="icon social_instagram"></i></a></li>
                          <li><a href="#"><i class="icon social_googleplus"></i></a></li>
                      </ul>
                  </div>

                  <div class="copy-text">
                      <span>© Copyright 2014 Meetup Inc.</span>
                  </div>
              </div>
          </div> -->

      </nav>
    </div>
    <div class="main-container">

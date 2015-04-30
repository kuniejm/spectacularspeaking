<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>



<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />



<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />





<?php 

 wp_enqueue_script('jquery');

 wp_enqueue_script('superfish', get_stylesheet_directory_uri() .'/js/superfish.js');

 wp_enqueue_script('cycle', get_stylesheet_directory_uri() .'/js/cycle.js');

 wp_enqueue_script('effects', get_stylesheet_directory_uri() .'/js/effects.js');



?>



<?php wp_get_archives('type=monthly&format=link'); ?>

<?php //comments_popup_script(); // off by default ?>



<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35278783-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>



<body <?php body_class(); ?>>



<div id="wrapper">  <!-- wrapper begin -->



<div id="masthead"><!-- masthead begin -->

	<div id="head">

		<div id="top"> 

			<div id="blogname">	

				<h1><a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><img src="<?php  bloginfo('template_url'); ?>/images/logo.png" /></a></h1>

			</div>

		</div>

		<div id="botmenu">

			<?php wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'primary','menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?>

		</div>

	</div><!--end masthead-->

</div>



<?php if ( is_front_page() ) { ?>

<div id="subhead" class="clearfix">

	<div class="insub clearfix">

	<div class="alignleft"> <h1><?php echo(' '); ?></h1></div>

	</div>

</div>	

<?php } elseif ( is_single() ) { ?>



<div id="subhead" class="clearfix">

	<div class="insub clearfix">

		<div class="alignleft"> <?php previous_post_link('%link', 'Previous', FALSE); ?> </div>

		<div class="alignright"> <?php next_post_link('%link', 'Next', FALSE); ?> </div>

	</div>

</div>

<?php } elseif ( is_page() || is_front_page() ){ ?>

<div id="subhead" class="clearfix">

	<div class="insub clearfix">

	<div class="alignleft"> <h1><?php echo(' '); ?></h1></div>

	</div>

</div>	

<?php } elseif ( is_archive() ){ ?>

<div id="subhead" class="clearfix">

	<div class="insub clearfix">

	<div class="alignleft"> Previously on Spectacular Speaking:</div>

	</div>

</div>	

<?php } elseif ( is_search() ){ ?>

<div id="subhead" class="clearfix">

	<div class="insub clearfix">

	<div class="alignleft"> <?php

				$mySearch =& new WP_Query("s=$s & showposts=-1");

				$num = $mySearch->post_count;

				echo $num.' search results for '; the_search_query();

			?> in <?php  get_num_queries(); ?> <?php timer_stop(1); ?> seconds.</div>

	</div>

</div>	

<?php } ?>





<div id="casing" class="otpad">
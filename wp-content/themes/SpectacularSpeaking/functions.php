<?php

define("FRONTPAGE_NEXTGEN_GALLERY_ID", 16);

/*sspeaking init thumbnails*/
function sspeaking_init_stuff() {
	add_theme_support('post-thumbnails');
}
add_action( 'init', 'sspeaking_init_stuff' );

/*sspeaking menus*/
function sspeaking_register_nav_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Main menu' ),
			'footer-menu' => __('Footer menu')
			)
	);
}
add_action( 'init', 'sspeaking_register_nav_menus' );

/*sspeaking post types*/
function sspeaking_init_acf_posts() {
	register_post_type('speaker', array(
		'labels' => array(
			'name' => __('Speakers'),
			'singular_name' => __('Speaker')
		),
		'public' => true,
    'supports' => Array('title', 'thumbnail', 'editor', 'page-attributes'),
  ));

	register_post_type('agenda_entry', array(
		'labels' => array(
			'name' => __('Agenda'),
			'singular_name' => __('Agenda entry')
		),
		'public' => false,
		'show_ui' => true,
    'supports' => Array('title'),
  ));

	register_post_type('tickets', array(
		'labels' => array(
			'name' => __('Tickets'),
			'singular_name' => __('Ticket')
		),
    'public' => false,
    'show_ui' => true,
    'supports' => Array('title', 'editor', 'page-attributes')
  ));

  register_post_type('testimonial', array(
    'labels' => array(
      'name' => __('Testimonials'),
      'singular_name' => __('Testimonial')
    ),
    'public' => false,
    'show_ui' => true,
    'supports' => Array('title', 'thumbnail', 'editor', 'page-attributes')
  ));
}
add_action('init', 'sspeaking_init_acf_posts');

/*excerpt customize*/
function sspeaking_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'the_content_more_link', 'modify_read_more_link');

function sspeaking_new_excerpt_more( $more ) {
	global $post;
	return ' <span>...   <a class="text-link" href="' . get_permalink($post->ID) . '"> Read more</a></span>';
}
add_filter('excerpt_more', 'sspeaking_new_excerpt_more');


/*Sspeaking customize*/
function sspeaking_theme_options( $wp_customize ) {

  /*
  Background image - landing page
  */
  $wp_customize->add_section(
  		'landing_background_section',
  		array(
  				'title' => 'Background image for the landing page.',
  				'priority' => 1
  			)
  	);
  $wp_customize->add_setting(
  		'choose_image_landing',
  		array(
  			'default' => ''
  			)
  		);
  $wp_customize->add_control(
  	new WP_Customize_Image_Control(
  	$wp_customize,
  	'image_background',
  	array(
  		'label'      => __( 'Background image for a landing page.', 'sspeaking' ),
  		'section'    => 'landing_background_section',
  		'settings'   => 'choose_image_landing',
  	) )
  );


  /*choose welcome video*/
  $wp_customize->add_section(
  		'welcome_video',
  		array(
  				'title' => 'Promo video',
  				'priority' => 3
  			)
  	);
  $wp_customize->add_setting(
  		'welcome_video',
  		array(
  			'default' => ' '
  			)
  		);
  $wp_customize->add_control(
  'welcome_video',
  		array(
  			'section' => 'welcome_video',
  			'label' => 'Add video with iframe tags.',
  			'priority' => 1
  			)
  		);


  // bg image in Venue section
  $wp_customize->add_section(
      'venue',
      array(
          'title' => 'Venue',
          'priority' => 4
        )
    );
  $wp_customize->add_setting(
      'venue_background_image',
      array(
        'default' => ''
        )
      );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
    $wp_customize,
    'image_background',
    array(
      'label'      => __( 'Background image for the venue.', 'sspeaking' ),
      'section'    => 'venue',
      'settings'   => 'venue_background_image',
    ) )
  );


  /*Footer mission*/
  $wp_customize->add_section(
  		'footer_data',
  		array(
  				'title' => 'Footer data',
  				'priority' => 5
  			)
  	);
  $wp_customize->add_setting(
  		'email',
  		array(
  			'default' => ''
  			)
  		);
  $wp_customize->add_setting(
  		'phone',
  		array(
  			'default' => ''
  			)
  		);
  $wp_customize->add_setting(
  		'address',
  		array(
  			'default' => ''
  			)
  		);
  $wp_customize->add_control(
  'email',
  		array(
  			'section' => 'footer_data',
  			'label' => 'Email',
  			'priority' => 1
  			)
  		);
  $wp_customize->add_control(
  'phone',
  		array(
  			'section' => 'footer_data',
  			'label' => 'Phone',
  			'priority' => 2
  			)
  		);
  $wp_customize->add_control(
  'address',
  		array(
  			'section' => 'footer_data',
  			'label' => 'Address',
  			'priority' => 2
  			)
  		);
}
add_action( 'customize_register', 'sspeaking_theme_options' );


// Remove unnecessary admin menu items.
add_action( 'admin_menu', 'jt_remove_admin_menu_items' );
function jt_remove_admin_menu_items() {
  remove_menu_page('edit-comments.php');
  remove_menu_page('tools.php');
}


add_editor_style();


// Disable custom styles & scripts of nextgen plugin
add_action('wp_print_styles', 'wpse_82982_removeStyles');
function wpse_82982_removeStyles() {
    wp_dequeue_style('nextgen_basic_album_style');
}
define('NGG_SKIP_LOAD_SCRIPTS', true);


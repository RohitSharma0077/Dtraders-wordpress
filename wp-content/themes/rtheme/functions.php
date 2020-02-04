
<?php 

function rtheme_fun(){


// 	// stylesheets

// main wp css is inclided
	wp_enqueue_style('mainstyle', get_stylesheet_uri());  

	wp_enqueue_style('font',get_template_directory_uri().'/lib/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('animate', get_template_directory_uri().'/lib/animate/animate.min.css');
	wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/lib/bootstrap/css/bootstrap.min.css');
	

// 	// javascripts

	wp_enqueue_script('jquery', get_template_directory_uri().'/lib/jquery/jquery.min.js', array(),'1.1', true);
	wp_enqueue_script('jquery-migrate', get_template_directory_uri().'/lib/jquery/jquery-migrate.min.js', array(),'1.1', true);
	wp_enqueue_script('bsapbundle-migrate', get_template_directory_uri().'/lib/bootstrap/js/bootstrap.min.js', array(),'1.1', true);
	wp_enqueue_script('easing', get_template_directory_uri().'/lib/easing/easing.min.js', array(),'1.1', true);
	wp_enqueue_script('wow', get_template_directory_uri().'/lib/wow/wow.min.js', array(),'1.1', true);
	wp_enqueue_script('waypoints', get_template_directory_uri().'/lib/waypoints/waypoints.min.js', array(),'1.1', true);
	wp_enqueue_script('counterup', get_template_directory_uri().'/lib/counterup/counterup.min.js', array(),'1.1', true);
	wp_enqueue_script('hoverIntent', get_template_directory_uri().'/lib/superfish/hoverIntent.js', array(),'1.1', true);
	wp_enqueue_script('superfish', get_template_directory_uri().'/lib/superfish/superfish.min.js', array(),'1.1', true);
	wp_enqueue_script('contactform', get_template_directory_uri().'/contactform/contactform.js', array(),'1.1', true);
	wp_enqueue_script('mainjs', get_template_directory_uri().'/js/main.js', array(),'1.1', true);

}

// attach action hook
 // wp_enqueue_scripts is used for linking style and scripts files  with theme

add_action("wp_enqueue_scripts","rtheme_fun");



// to active menu in admin panel

function register_rtheme_menu(){

	// menu register code

		register_nav_menus(

			array(
				 'primary-menu' => __('Primary Menu'),
				 'footer-menu' => __('footer Menu')
			)
		);

}

// attach action hook

add_action("init","register_rtheme_menu");



// register featured image

function featured_image(){
	add_theme_support("post-thumbnails");

	// images size

	add_image_size("small-thumbnail", 250,340,true);  // use this in index
	add_image_size("banner-image", 700,350,true);    // original size
}

add_action("after_setup_theme", "featured_image");


// widget :sidebar

function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Right-Sidebar', 'textdomain' ),
        'id'            => 'rsidebar',
        'description'   => __( 'This is my Right-Sidebar' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s" style=" padding: 20px 0px;">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle" style="  padding: 30px 0px;
    color:teal;">',
        'after_title'   => '</h2>',
    ) );


     register_sidebar( array(
        'name'          => __( 'Left-Sidebar', 'textdomain' ),
        'id'            => 'leftsidebar',
        'description'   => __( 'This is my Left-Sidebar' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s" style=" padding: 20px 0px;">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle"  style="  padding: 30px 0px;
    color:teal;">',
        'after_title'   => '</h2>',
    ) );
     
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


function wpb_image_editor_default_to_gd( $editors ) {
    $gd_editor = 'WP_Image_Editor_GD';
    $editors = array_diff( $editors, array( $gd_editor ) );
    array_unshift( $editors, $gd_editor );
    return $editors;
}
add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );


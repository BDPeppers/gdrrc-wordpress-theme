<?php 

function load_scripts(){
   
    // Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1', 'all' );
   
    // Bootstrap
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', array(),'4.1.3', 'all' );
    wp_enqueue_script('bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'), '4.1.3', true );

    // Google Fonts
    wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i', false );
    
    //jQuery
    //Wordpress loads its own version of jQuery
    // wp_enqueue_script( 'jquery' , 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array (), '4.1.3');

     // Custom CSS
     wp_enqueue_style( 'template', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all' );

    //Custom JavaScript
     wp_enqueue_script( 'script', get_template_directory_uri() . '/js/index.js', array('jquery'), null, true);
 
}
add_action('wp_enqueue_scripts', 'load_scripts');


//Theme Menus
register_nav_menus(
    array(
        'community' => 'Community',
        'adr' => 'ADR Project',
        'ed-resources' => 'Educational Resources',
        'participate' => 'Participate',

        'm-community' => 'mobile Community',
        'm-adr' => 'mobile ADR Project',
        'm-ed-resources' => 'mobile Educational Resources',
        'm-participate' => 'mobile Participate',

        'f-community' => 'footer Community',
        'f-adr' => 'footer ADR Project',
        'f-ed-resources' => 'footer Educational Resources',
        'f-participate' => 'footer Participate'

        
    )
);

//Theme Widgets
function gdrrc_widgets_init() {
 
    register_sidebar( array(
        'name'          => __('Search Bar', 'gdrrc'),
        'id'            => 'search-bar',
        'before_widget' => '<div class="search-bar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="search-widget-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'gdrrc_widgets_init' );


//Theme Support for more User Customizations
function gdrrc_config(){

//Theme Menus for the desktop and mobile menus as well as the footer menu
//NOTE: each dropdown/category (i.e. Community) is its own category
register_nav_menus(
    array(
        'community' => 'Community',
        'adr' => 'ADR Project',
        'ed-resources' => 'Educational Resources',
        'participate' => 'Participate',

        'm-community' => 'mobile Community',
        'm-adr' => 'mobile ADR Project',
        'm-ed-resources' => 'mobile Educational Resources',
        'm-participate' => 'mobile Participate',

        'f-community' => 'footer Community',
        'f-adr' => 'footer ADR Project',
        'f-ed-resources' => 'footer Educational Resources',
        'f-participate' => 'footer Participate'
 
    )
);

//Theme Support Functions
$args = array(
    'height' => 500,
    'width' => 500,
);
add_theme_support('custom-logo', $args );
//Function allows users to choose the favicon ~ tab logo

add_theme_support( 'post-thumbnails');
//allows for a featured image to be used with posts

add_theme_support( 'post-formats', array('video, image'));
//additional video and image post formats

}
add_action('after_setup_theme', 'gdrrc_config', 0);
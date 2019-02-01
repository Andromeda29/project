<?php


add_action( 'wp_enqueue_scripts', 'nation_scripts' );

function nation_scripts() {
    wp_enqueue_style( 'font-awesome',get_stylesheet_directory_uri().'/css/font-awesome.min.css' );
    wp_enqueue_style( 'jquery-ui', get_stylesheet_directory_uri(). '/css/jquery-ui.min.css' );
    wp_enqueue_style( 'bootstrap-datepicker', get_stylesheet_directory_uri(). '/css/bootstrap-datepicker.css' );
    wp_enqueue_style( 'vikbooking_styles', get_stylesheet_directory_uri(). '/css/vikbooking_styles.css' );
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri(). '/slick/slick.css' );

    wp_enqueue_style( 'photoswipe', get_stylesheet_directory_uri(). '/js/dist/photoswipe.css');

    wp_enqueue_style( 'photoswipe-skin', get_stylesheet_directory_uri(). '/js/dist/default-skin/default-skin.css');


    wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri(). '/slick/slick-theme.css' );
    wp_enqueue_style( 'style-main', get_stylesheet_directory_uri(). '/css/main.css' );
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');

    wp_enqueue_script('scripts-js', get_stylesheet_directory_uri(). '/js/bootstrap.min.js', array('jquery'), false, true);

    wp_enqueue_script('scripts-js', get_stylesheet_directory_uri(). '/js/scripts.js', array('jquery'), false, true);
    wp_enqueue_script('jquery-ui-js', get_stylesheet_directory_uri(). '/js/jquery-ui.min.js', array('jquery'), false, true);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri(). '/js/main.js', array('jquery'), false, true);
    wp_enqueue_script('datapicker-js', get_stylesheet_directory_uri(). '/js/datapicker-ru.js', array('jquery'), false, true);
    wp_enqueue_script('slick-js', get_stylesheet_directory_uri(). '/slick/slick.min.js', array('jquery'), false, true);
    wp_enqueue_script('photoswipe-js', get_stylesheet_directory_uri(). '/js/dist/photoswipe.min.js', array('jquery'), false, true);
    wp_enqueue_script('photoswipe-ui-js', get_stylesheet_directory_uri(). '/js/dist/photoswipe-ui-default.min.js', array('jquery'), false, true);
    wp_enqueue_script('photoswipe-inturist-js', get_stylesheet_directory_uri(). '/js/photoswipe-inturist.js', array('photoswipe-js'), false, true);
    
}












?>
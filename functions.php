<?php

function nebulanova_setup()
{
    add_theme_support('title-tag');
    load_theme_textdomain('nebulanova', get_template_directory_uri() . '/languages');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'nebulanova')
    ));
}

add_action('after_setup_theme', 'nebulanova_setup');


function nebulanova_assets()
{

    wp_enqueue_style('font-poppins', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(),  '1.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(),  '1.0.0', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(),  '1.0.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(),  '1.0.0', 'all');
    wp_enqueue_style('owl-corousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(),  '1.0.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(),  '1.0.0', 'all');
    wp_enqueue_style('responsive-css', get_stylesheet_uri() . '/assets/css/responsive.css', array(),  '1.0.0', 'all');
    wp_enqueue_style('style-theme', get_template_directory_uri());

    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('imageloaded', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'nebulanova_assets');

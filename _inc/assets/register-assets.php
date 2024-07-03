<?php

add_action('wp_enqueue_scripts', 'wct_register_assets');
function wct_register_assets()
{
    //REGISTER STYLES
    wp_register_style('wct-main-style', get_stylesheet_directory_uri() . '/style.css', '', '1.0.0');
    wp_register_style('wct-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', '', '1.0.0');
    wp_register_style('wct-swiper', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css', '', '1.0.0');

    wp_enqueue_style('wct-main-style');
    wp_enqueue_style('wct-bootstrap');
    wp_enqueue_style('wct-swiper');

    //REGISTER SCRIPTS
    wp_register_script('wct-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', '', '1.0.0', ['in_footer' => 'true']);
    wp_register_script('wct-custom-js', get_template_directory_uri() . '/assets/js/custom.js', '', '1.0.0', ['in_footer' => 'true']);
    wp_register_script('wct-swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', '', '1.0.0', ['in_footer' => 'true']);
    wp_register_script('wct-isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', '', '1.0.0', ['in_footer' => 'true']);
    wp_register_script('wct-smooth-scroll-js', get_template_directory_uri() . '/assets/js/SmoothScroll.min.js', '', '1.0.0', ['in_footer' => 'true']);
    wp_register_script('wct-rang-slider-js', get_template_directory_uri() . '/assets/js/rang_slider.min.js', '', '1.0.0', ['in_footer' => 'true']);


    wp_enqueue_script('wct-bootstrap-js');
    wp_enqueue_script('wct-custom-js');
    wp_enqueue_script('wct-swiper-js');
    wp_enqueue_script('wct-isotope-js');
    wp_enqueue_script('wct-smooth-scroll-js');
    wp_enqueue_script('wct-rang-slider-js');


    wp_localize_script('frontajax', 'frontajax', [
        'ajaxurl' => admin_url('admin-ajax.php'),
        '_nonce' => wp_create_nonce()
    ]);
}

<?php

add_action('wp_enqueue_scripts', 'wct_register_assets');
function wct_register_assets()
{
    //REGISTER STYLES
    wp_register_style('wct-main-style', get_stylesheet_directory_uri() . '/style.css', '', '1.0.0');
    wp_register_style('wct-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', '', '1.0.0');
    wp_register_style('wct-swiper', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css', '', '1.0.0');
    wp_register_style('wct-nice-select', get_stylesheet_directory_uri() . '/assets/css/nice-select.css', '', '1.0.0');

    wp_enqueue_style('wct-main-style');
    wp_enqueue_style('wct-bootstrap');
    wp_enqueue_style('wct-swiper');
    wp_enqueue_style('wct-nice-select');

    //REGISTER SCRIPTS
    wp_register_script('wct-bootstrap-js', THEME_URI . '/assets/js/bootstrap.bundle.min.js', ['jquery'], '1.0.0', ['in_footer' => 'true']);
    wp_register_script('wct-custom-js', THEME_URI . '/assets/js/custom.js', ['jquery'], '1.0.0', ['in_footer' => 'true']);
    wp_register_script('wct-swiper-js', THEME_URI . '/assets/js/swiper-bundle.min.js', ['jquery'], '1.0.0', ['in_footer' => 'true']);
    wp_register_script('wct-isotope-js', THEME_URI . '/assets/js/isotope.pkgd.min.js', ['jquery'], '1.0.0', ['in_footer' => 'true']);
    wp_register_script('wct-smooth-scroll-js', THEME_URI . '/assets/js/SmoothScroll.min.js', ['jquery'], '1.0.0', ['in_footer' => 'true']);
    wp_register_script('wct-rang-slider-js', THEME_URI . '/assets/js/rang_slider.js', ['jquery'], '1.0.0', ['in_footer' => 'true']);
    wp_register_script('wct-nice-select-js', THEME_URI . '/assets/js/jquery.nice-select.min.js', ['jquery'], '1.0.0', ['in_footer' => 'true']);



    wp_enqueue_script('wct-bootstrap-js');
    wp_enqueue_script('wct-custom-js');
    wp_enqueue_script('wct-swiper-js');
    wp_enqueue_script('wct-isotope-js');
    wp_enqueue_script('wct-smooth-scroll-js');
    wp_enqueue_script('wct-rang-slider-js');
    wp_enqueue_script('wct-nice-select-js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-core');
    wp_enqueue_script('jquery-migrate');


    wp_localize_script('frontajax', 'frontajax', [
        'ajaxurl' => admin_url('admin-ajax.php'),
        '_nonce' => wp_create_nonce()
    ]);
}

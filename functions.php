<?php
define('THEME_DIR', get_template_directory());

// THEME SUPPORT
function wct_theme_setup()
{
    add_theme_support('woocommerce');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'wct_theme_setup');


// REGISTER ASSETS
include_once THEME_DIR . '/_inc/assets/register-assets.php';

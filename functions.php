<?php

function wct_theme_setup()
{
    add_theme_support('woocommerce');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'wct_theme_setup');

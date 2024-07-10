<?php
define('THEME_DIR', get_template_directory());
define('THEME_URI', get_template_directory_uri());

// THEME SUPPORT
include_once THEME_DIR . '/_inc/theme-setup/theme-setup.php';

// REGISTER ASSETS
include_once THEME_DIR . '/_inc/assets/register-assets.php';

// GET CATEGORY THUMBNAIL URL --- UTILITY
include_once THEME_DIR . '/_inc/utility/utils.php';

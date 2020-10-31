<?php


function jw_enqueue() {

    $ver            = JW_DEV_MODE ? time() : false;

    // Register Style Sheets

    wp_register_style('jw_google_fonts','https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i',NULL, $ver);
    wp_register_style('jw_bootstrap',get_theme_file_uri('/assets/css/bootstrap.css'),NULL,$ver);
    wp_register_style('jw_style',get_theme_file_uri('/assets/css/style.css'),NULL,$ver);
    wp_register_style('jw_dark',get_theme_file_uri('/assets/css/dark.css'),NULL,$ver);
    wp_register_style('jw_font_icons',get_theme_file_uri('/assets/css/font-icons.css'),NULL,$ver);
    wp_register_style('jw_animate',get_theme_file_uri('/assets/css/animate.css'),NULL,$ver);
    wp_register_style('jw_magnific_popup',get_theme_file_uri('/assets/css/magnific-popup.css'),NULL,$ver);
    wp_register_style('jw_custom',get_theme_file_uri('/assets/css/custom.css'),NULL,$ver);
    wp_register_style('jw_responsive',get_theme_file_uri('/assets/css/responsive.css'),NULL,$ver);
 
    // Enqueue Styles

    wp_enqueue_style('jw_google_fonts');
    wp_enqueue_style('jw_bootstrap');
    wp_enqueue_style('jw_style');
    wp_enqueue_style('jw_dark');
    wp_enqueue_style('jw_font_icons');
    wp_enqueue_style('jw_animate');
    wp_enqueue_style('jw_magnific_popup');
    wp_enqueue_style('jw_custom');
    wp_enqueue_style('jw_responsive');

    // Register Scripts

    wp_register_script('jw_plugins_js',get_theme_file_uri('/assets/js/plugins.js'),NULL,$ver,true);
    wp_register_script('jw_functions_js',get_theme_file_uri('/assets/js/functions.js'),NULL,$ver,true);

    // Enqueue Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('jw_plugins_js');
    wp_enqueue_script('jw_functions_js');
}

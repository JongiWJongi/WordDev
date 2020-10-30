<?php


function jw_enqueue() {
    wp_register_style('jw_google_fonts','https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i');
    wp_register_style('jw_bootstrap',get_theme_file_uri('/assets/css/bootstrap.css'));
    wp_register_style('jw_style',get_theme_file_uri('/assets/css/style.css'));
    wp_register_style('jw_dark',get_theme_file_uri('/assets/css/dark.css'));
    wp_register_style('jw_font_icons',get_theme_file_uri('/assets/css/dark.css'));
    wp_register_style('jw_animate',get_theme_file_uri('/assets/css/animate.css'));
    wp_register_style('jw_magnific_popup',get_theme_file_uri('/assets/css/magnific-popup.css'));
    wp_register_style('jw_custom',get_theme_file_uri('/assets/css/custom.css'));
    wp_register_style('jw_responsive',get_theme_file_uri('/assets/css/responsive.css'));
    wp_register_style('jw_responsive',get_theme_file_uri('/assets/css/responsive.css'));
}
<?php

function jw_setup_theme() {
    register_nav_menu('primary',__( 'Primary Menu' ,'loxionmart'));
    register_nav_menu('footer',__( 'Footer Menu' ,'loxionmart'));
}
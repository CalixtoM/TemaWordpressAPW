<?php

add_theme_support('post-thumbnails');

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function registrar_menu_navegacao(){
    register_nav_menu('header-menu', 'main-menu');
}

add_action('init', 'registrar_menu_navegacao');
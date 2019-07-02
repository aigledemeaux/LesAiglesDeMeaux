<?php
function aigleDeMeaux_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('comment-list');
    add_theme_support('comment-form');
    register_nav_menus([
        'menu_lateral' => 'Menu de navigation qui apparait à droite de la page',

    ]);
}
add_action('after_setup_theme', 'aigleDeMeaux_setup');

function remove_links_tab_menu_pages() {

    remove_menu_page('edit.php');
}
add_action( 'admin_menu', 'remove_links_tab_menu_pages' );

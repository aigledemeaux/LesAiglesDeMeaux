<?php
function aigleDeMeaux_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('comment-list');
    add_theme_support('comment-form');
    register_nav_menus([
        'Mega Menu' => 'Menu de haut de page qui apparait en mode ordinateur',
        'Menu lateral' => 'Menu lateral pour le mode téléphone et tablette',
        'partenaire' => 'Menu qui se situe dans le pied de page pour recenser les partenaires',
        'menu lien direct' => 'Menu qui se situe dans le pied de page pour afficher la FAQ, le forum, ...',

    ]);
}
add_action('after_setup_theme', 'aigleDeMeaux_setup');

function remove_links_tab_menu_pages() {

    remove_menu_page('edit.php');
}
add_action( 'admin_menu', 'remove_links_tab_menu_pages' );

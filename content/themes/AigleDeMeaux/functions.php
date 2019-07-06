<?php
require('inc/theme-enqueue.php');
require('inc/theme-setup.php');
require('inc/theme-filter.php');
require('inc/theme-settings/theme-settings.php');



function my_pagination_rewrite() {
    add_rewrite_rule('([a-z]+)/page/?([0-9]{1,})/?$', 'index.php?category_name=$matches[1]&paged=$matches[2]', 'top');
    }
    add_action('init', 'my_pagination_rewrite');

    /*
 * Changer les options par defaut des images
 */


//$data = file_get_contents('https://api.meteo-concept.com/api/location/city?token=30cd2f3c81c6d780998c9905e7396bca93c3ed8895f593de25710d8a58d55c75&insee=77284');

//$data = file_get_contents('https://api.meteo-concept.com/api/observations/around?token=30cd2f3c81c6d780998c9905e7396bca93c3ed8895f593de25710d8a58d55c75&insee=77284&radius=50');









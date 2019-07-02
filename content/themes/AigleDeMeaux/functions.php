<?php
require('inc/theme-enqueue.php');
require('inc/theme-setup.php');
require('inc/theme-filter.php');
require('inc/theme-settings/theme-settings.php');



function my_pagination_rewrite() {
    add_rewrite_rule('([a-z]+)/page/?([0-9]{1,})/?$', 'index.php?category_name=$matches[1]&paged=$matches[2]', 'top');
    }
    add_action('init', 'my_pagination_rewrite');
<?php
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function aigleDeMeaux_custom_excerpt_length($length)
{
    return 25;
}
add_filter('excerpt_length', 'aigleDeMeaux_custom_excerpt_length', 999);
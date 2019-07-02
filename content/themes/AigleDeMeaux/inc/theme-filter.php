    
<?php
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function oblog_custom_excerpt_length($length)
{
    return 25;
}
add_filter('excerpt_length', 'oblog_custom_excerpt_length', 999);
<?php

register_nav_menus(array('primary' => 'Primary Menu'));
register_sidebar(array('name' => 'Sidebar'));
add_theme_support('automatic-feed-links');

function get_title()
{
    $title = get_bloginfo('name');
    $title .= wp_title( '|', false, 'left' );

    return $title;
}

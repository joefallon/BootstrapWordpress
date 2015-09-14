<!DOCTYPE html>
<!--header.php-->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title>TEST
        <?php
        if(!is_home()):
            wp_title('|', true, 'right');
        endif;
        bloginfo('name');
        ?> test
    </title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>

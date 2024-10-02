<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-bar'
                )
            )
                ?>
        </div>
    </header>
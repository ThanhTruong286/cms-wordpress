<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <title><?php wp_title('|', true, 'right'); ?></title>

    <!-- Link đến favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/riotfav.png" type="image/x-icon">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header"
        style="background-color: <?php echo get_theme_mod('header_background_color', '#ffffff'); ?>; height: <?php echo get_theme_mod('header_height', 80); ?>px;">
        <div class="header-inner">

            <!-- Logo -->
            <div class="site-branding">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    $custom_logo_width = get_theme_mod('custom_logo_width', 250); // Giá trị mặc định
                
                    if (has_custom_logo()) {
                        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" style="max-width:' . esc_attr($custom_logo_width) . 'px; height: auto;">';
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
                }
                ?>
            </div><!-- .site-branding -->

            <!-- Menu điều hướng -->
            <nav class="site-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu_primary',
                    'menu_class' => 'primary-menu',
                    'container' => false, // Không cần thẻ bao quanh (div, nav)
                ));
                ?>
            </nav><!-- .site-navigation -->

        </div><!-- .header-inner -->
    </header><!-- .site-header -->

    <div id="content" class="site-content">
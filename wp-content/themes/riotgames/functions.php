<?php
add_action('after_setup_theme', 'riotgames_after_setup_theme');
add_action('after_setup_theme', 'mytheme_custom_logo_setup');
add_action('customize_register', 'mytheme_customize_register');


function riotgames_after_setup_theme()
{
    register_nav_menus(
        array(
            'menu_primary' => esc_html__('Main Menu', 'riotgames'),
            'menu_footer' => esc_html__('Menu footer', 'riotgames')
        )
    );
}
function custom_breadcrumbs()
{
    // Thiết lập biến
    $separator = ' &gt; '; // Ký tự phân cách
    $home_title = 'Trang Chủ'; // Tiêu đề cho trang chủ

    // Nếu không phải là trang chính
    if (!is_front_page()) {
        echo '<a href="' . home_url() . '">' . $home_title . '</a>' . $separator;

        if (is_category() || is_single()) {
            the_category(' ' . $separator . ' ');
            if (is_single()) {
                echo $separator;
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
}

// Đăng ký hỗ trợ cho logo tùy chỉnh
function mytheme_custom_logo_setup()
{
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));
}

// Đăng ký tùy chỉnh trong Customizer
function mytheme_customize_register($wp_customize)
{
    // Phần Header
    $wp_customize->add_section('header_settings', array(
        'title' => __('Header Settings', 'mytheme'),
        'priority' => 30,
    ));

    // Màu nền Header
    $wp_customize->add_setting('header_background_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_background_color_control', array(
        'label' => __('Header Background Color', 'mytheme'),
        'section' => 'header_settings',
        'settings' => 'header_background_color',
    )));

    // Chiều rộng Logo
    $wp_customize->add_setting('custom_logo_width', array(
        'default' => 250,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('custom_logo_width_control', array(
        'label' => __('Logo Width', 'mytheme'),
        'section' => 'header_settings',
        'settings' => 'custom_logo_width',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 50,
            'max' => 600,
            'step' => 10,
        ),
    ));

    // Độ cao Header
    $wp_customize->add_setting('header_height', array(
        'default' => 80,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('header_height_control', array(
        'label' => __('Header Height (px)', 'mytheme'),
        'section' => 'header_settings',
        'settings' => 'header_height',
        'type' => 'number',
    ));

    // Kiểu chữ
    $wp_customize->add_setting('header_font_family', array(
        'default' => 'Arial, sans-serif',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('header_font_family_control', array(
        'label' => __('Header Font Family', 'mytheme'),
        'section' => 'header_settings',
        'settings' => 'header_font_family',
        'type' => 'text',
    ));
}
?>
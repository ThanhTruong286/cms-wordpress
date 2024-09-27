<?php
add_action('after_setup_theme', 'riotgames_after_setup_theme');

function riotgames_after_setup_theme()
{
    register_nav_menus(
        array(
            'menu_primary' => esc_html__('Main Menu', 'riotgames'),
            'menu_footer' => esc_html__('Menu footer', 'riotgames')
        )
    );
}
?>
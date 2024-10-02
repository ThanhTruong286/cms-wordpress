<?php
function riot_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'riot'),
    ));
}
add_action('init', 'riot_register_menus');

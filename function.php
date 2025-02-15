<?php
function assignment_one_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'assignment-one'),
    ));
}
add_action('after_setup_theme', 'assignment_one_theme_setup');


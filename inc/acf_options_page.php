<?php

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Social Links',
        'menu_title'    => 'Social Links',
        'menu_slug'     => 'social-links',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url'      => 'dashicons-share',
        'position'      => 30,
    ));

    acf_add_options_page(array(
        'page_title'    => 'Currencies',
        'menu_title'    => 'Currencies',
        'menu_slug'     => 'currency-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'position'      => 31,
        'icon_url'      => 'dashicons-admin-generic',
    ));

    if (function_exists('acf_add_options_page')) {
        $parent = acf_add_options_page([
            'page_title' => 'Theme General Settings',
            'menu_title' => 'Theme Settings',
            'redirect'   => false
        ]);
    }

}
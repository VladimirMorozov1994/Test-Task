<?php

/**
 * ACF Gutenberg Block "Home page main block"
 */
if (!function_exists('register_acf_block_homepage_main')) {

    function register_acf_block_homepage_main()
    {

        acf_register_block_type(
            [
                'name'            => 'acf_block_homepage_main',
                'title'           => __('Home page main block'),
                'description'     => __(''),
                'render_callback' => 'theme_acf_blocks_render_callback',
                'category'        => 'common',
                'icon'            => 'menu',
                'keywords'        => ['title', 'text', 'button' ],
                'mode'            => 'edit',
            ]
        );

    }

}

if (function_exists('register_acf_block_homepage_main')) {
    add_action('acf/init', 'register_acf_block_homepage_main');
}

/**
 * ACF Gutenberg Block "Hot News"
 */
if (!function_exists('register_acf_block_hot_news')) {

    function register_acf_block_hot_news()
    {

        acf_register_block_type(
            [
                'name'            => 'acf_block_hot_news',
                'title'           => __('Hot News'),
                'description'     => __(''),
                'render_callback' => 'theme_acf_blocks_render_callback',
                'category'        => 'common',
                'icon'            => 'megaphone',
                'keywords'        => ['title', 'subtitle', 'news' ],
                'mode'            => 'edit',
            ]
        );

    }

}

if (function_exists('register_acf_block_hot_news')) {
    add_action('acf/init', 'register_acf_block_hot_news');
}


/**
 * ACF Gutenberg Block "Merch slider"
 */
if (!function_exists('register_acf_block_merch_slider')) {

    function register_acf_block_merch_slider()
    {

        acf_register_block_type(
            [
                'name'            => 'acf_block_merch_slider',
                'title'           => __('Merch slider'),
                'description'     => __(''),
                'render_callback' => 'theme_acf_blocks_render_callback',
                'category'        => 'common',
                'icon'            => 'slides',
                'keywords'        => ['title', 'slider' ],
                'mode'            => 'edit',
            ]
        );

    }

}

if (function_exists('register_acf_block_merch_slider')) {
    add_action('acf/init', 'register_acf_block_merch_slider');
}

/**
 * ACF Gutenberg Block "Block Clients"
 */
if (!function_exists('register_acf_block_clients')) {

    function register_acf_block_clients()
    {

        acf_register_block_type(
            [
                'name'            => 'acf_block_clients',
                'title'           => __("Block Clients"),
                'description'     => __(''),
                'render_callback' => 'theme_acf_blocks_render_callback',
                'category'        => 'common',
                'icon'            => 'businessman',
                'keywords'        => ['title', 'items' ],
                'mode'            => 'edit',
            ]
        );

    }

}

if (function_exists('register_acf_block_clients')) {
    add_action('acf/init', 'register_acf_block_clients');
}

/**
 * ACF Gutenberg Block "About Us"
 */
if (!function_exists('register_acf_block_about')) {

    function register_acf_block_about()
    {

        acf_register_block_type(
            [
                'name'            => 'acf_block_about',
                'title'           => __("About Us"),
                'description'     => __(''),
                'render_callback' => 'theme_acf_blocks_render_callback',
                'category'        => 'common',
                'icon'            => 'id-alt',
                'keywords'        => ['title', 'text' ],
                'mode'            => 'edit',
            ]
        );

    }

}

if (function_exists('register_acf_block_about')) {
    add_action('acf/init', 'register_acf_block_about');
}


/**
 * Enable ACF Blocks render function
 */
if (!function_exists('theme_acf_blocks_render_callback')) {

    function theme_acf_blocks_render_callback($block)
    {

        $slug = str_replace('acf/', '', $block['name']);
        $slug = str_replace('acf-block-', '', $slug);

        if (file_exists(get_theme_file_path("/blocks/acf-block-{$slug}.php"))) {
            include(get_theme_file_path("/blocks/acf-block-{$slug}.php"));
        }

    }

}
 

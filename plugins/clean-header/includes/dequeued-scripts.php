<?php

function wpdocs_dequeue_script()
{
    wp_dequeue_script('jquery');
}

add_action('wp_print_scripts', 'wpdocs_dequeue_script', 100);

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
}

add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);


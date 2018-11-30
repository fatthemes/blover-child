<?php
/**
 * Blover functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package blover child
 */

add_action( 'wp_enqueue_scripts', 'blover_child_enqueue_styles' );

function blover_child_enqueue_styles() {
    wp_enqueue_style( 'blover-parent-style', get_template_directory_uri() . '/style.css' );
}

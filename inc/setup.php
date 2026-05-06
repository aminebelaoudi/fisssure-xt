<?php
/**
 * Theme Setup — add_theme_support, menus, image sizes
 *
 * @package FissureDrainXT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function fdxt_setup() {

    // Allow WordPress to generate <title> tag
    add_theme_support( 'title-tag' );

    // Featured images
    add_theme_support( 'post-thumbnails' );

    // HTML5 markup
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ) );

    // Gutenberg editor styles
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/style.css' );

    // Gutenberg wide/full alignment
    add_theme_support( 'align-wide' );

    // Custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Automatic feed links
    add_theme_support( 'automatic-feed-links' );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Menu principal', 'fissuredrainxt' ),
        'footer'  => __( 'Menu pied de page', 'fissuredrainxt' ),
    ) );

    // Custom image sizes
    add_image_size( 'fdxt-card', 600, 400, true );
    add_image_size( 'fdxt-hero', 1280, 720, true );

    // Content width
    if ( ! isset( $content_width ) ) {
        $content_width = 1280;
    }
}
add_action( 'after_setup_theme', 'fdxt_setup' );

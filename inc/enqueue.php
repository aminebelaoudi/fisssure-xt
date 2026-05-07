<?php
/**
 * Asset Enqueue — styles & scripts with versioning and conditional loading
 *
 * @package FissureDrainXT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function fdxt_enqueue_assets() {

    $uri = get_template_directory_uri();
    $v   = '2.5.2'; // bump to force cache refresh

    // ── Fonts (preconnect + stylesheet) ──────────────────────────────────
    // DNS prefetch
    wp_enqueue_style(
        'fdxt-fonts',
        'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700;800;900&family=Barlow:wght@300;400;500;600&display=swap',
        array(),
        null
    );

    // ── Main stylesheet ───────────────────────────────────────────────────
    wp_enqueue_style(
        'fdxt-style',
        $uri . '/assets/css/style.css',
        array( 'fdxt-fonts' ),
        $v
    );

    // ── GSAP + ScrollTrigger (CDN — free, ~25 KB gzipped) ─────────────────
    wp_register_script(
        'gsap',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
        array(),
        null,
        true
    );
    wp_register_script(
        'gsap-st',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
        array( 'gsap' ),
        null,
        true
    );
    wp_enqueue_script( 'gsap' );
    wp_enqueue_script( 'gsap-st' );

    // ── Main script (footer, deferred) ────────────────────────────────────
    wp_enqueue_script(
        'fdxt-main',
        $uri . '/assets/js/main.js',
        array( 'gsap-st' ), // loads after GSAP
        $v,
        true // load in footer
    );

    // Add defer attribute to main script + GSAP
    add_filter( 'script_loader_tag', 'fdxt_defer_script', 10, 2 );
}
add_action( 'wp_enqueue_scripts', 'fdxt_enqueue_assets' );

/**
 * Add defer attribute to theme script.
 *
 * @param string $tag    Script tag HTML.
 * @param string $handle Script handle.
 * @return string
 */
function fdxt_defer_script( $tag, $handle ) {
    if ( ! in_array( $handle, array( 'gsap', 'gsap-st', 'fdxt-main' ), true ) ) {
        return $tag;
    }
    return str_replace( ' src=', ' defer src=', $tag );
}

/**
 * Inject <link rel="preconnect"> for Google Fonts before stylesheet loads.
 */
function fdxt_preconnect_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'fdxt_preconnect_fonts', 1 );

/**
 * Dequeue WordPress core block library styles — not needed for this theme.
 * Removing them prevents conflicts with our custom grid/list resets.
 */
function fdxt_dequeue_wp_styles() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wp-block-style' );
    wp_dequeue_style( 'classic-theme-styles' );
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'fdxt_dequeue_wp_styles', 100 );

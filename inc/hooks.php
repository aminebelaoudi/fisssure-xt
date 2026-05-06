<?php
/**
 * Custom hooks, filters and utility functions
 *
 * @package FissureDrainXT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ── Excerpt length & read more ────────────────────────────────────────────────
function fdxt_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'fdxt_excerpt_length' );

function fdxt_excerpt_more( $more ) {
    return ' &hellip; <a href="' . esc_url( get_permalink() ) . '">' . esc_html__( 'Lire la suite', 'fissuredrainxt' ) . '</a>';
}
add_filter( 'excerpt_more', 'fdxt_excerpt_more' );

// ── Body classes ──────────────────────────────────────────────────────────────
function fdxt_body_classes( $classes ) {
    if ( ! is_singular() ) {
        $classes[] = 'fdxt-archive';
    }
    return $classes;
}
add_filter( 'body_class', 'fdxt_body_classes' );

// ── Schema.org: LocalBusiness JSON-LD ─────────────────────────────────────────
function fdxt_schema_jsonld() {
    $schema = array(
        '@context'        => 'https://schema.org',
        '@type'           => 'HomeAndConstructionBusiness',
        'name'            => 'Fissure et Drain XT',
        'url'             => 'https://fissuredrainxt.com',
        'telephone'       => '+15147307107',
        'email'           => 'info@fissuredrainxt.com',
        'address'         => array(
            '@type'           => 'PostalAddress',
            'addressLocality' => 'Montréal',
            'addressRegion'   => 'QC',
            'addressCountry'  => 'CA',
        ),
        'areaServed'      => array( 'Montréal', 'Laval', 'Rive-Nord' ),
        'priceRange'      => '$$',
        'openingHours'    => array( 'Mo-Fr 07:00-18:00', 'Sa 08:00-16:00' ),
        'hasCredential'   => 'RBQ 5863-7364-01',
    );
    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}
add_action( 'wp_head', 'fdxt_schema_jsonld' );

// ── Pagination helper ─────────────────────────────────────────────────────────
function fdxt_pagination() {
    $args = array(
        'prev_text' => esc_html__( '&laquo; Précédent', 'fissuredrainxt' ),
        'next_text' => esc_html__( 'Suivant &raquo;', 'fissuredrainxt' ),
    );
    the_posts_pagination( $args );
}

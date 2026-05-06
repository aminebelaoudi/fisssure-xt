<?php
/**
 * Security hardening — headers, login protection, file exposure prevention
 *
 * @package FissureDrainXT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ── Remove WordPress version from all output ─────────────────────────────────
remove_action( 'wp_head', 'wp_generator' );

// ── Disable XML-RPC (attack vector) ──────────────────────────────────────────
add_filter( 'xmlrpc_enabled', '__return_false' );

// ── Remove unnecessary head links ────────────────────────────────────────────
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

// ── Security HTTP headers ─────────────────────────────────────────────────────
function fdxt_security_headers() {
    if ( headers_sent() ) {
        return;
    }
    header( 'X-Content-Type-Options: nosniff' );
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'X-XSS-Protection: 1; mode=block' );
    header( 'Referrer-Policy: strict-origin-when-cross-origin' );
}
add_action( 'send_headers', 'fdxt_security_headers' );

// ── Obfuscate login error messages ───────────────────────────────────────────
function fdxt_login_errors() {
    return __( 'Identifiants incorrects.', 'fissuredrainxt' );
}
add_filter( 'login_errors', 'fdxt_login_errors' );

// ── Disable file editing in WP admin ─────────────────────────────────────────
if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
    define( 'DISALLOW_FILE_EDIT', true );
}

<?php
/**
 * Fissure et Drain XT — functions.php
 *
 * Entry point: loads all theme modules from /inc/.
 * No business logic here — keep it clean.
 *
 * @package FissureDrainXT
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ── Load theme modules ────────────────────────────────────────────────────────
require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/security.php';
require_once get_template_directory() . '/inc/hooks.php';
require_once get_template_directory() . '/inc/metaboxes-drain.php';

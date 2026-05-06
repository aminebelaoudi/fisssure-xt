<?php
/**
 * Template Name: Page Complète
 * Template Post Type: page
 *
 * Affiche toutes les sections du site dans l'ordre complet :
 * header → hero → trust-stats → symptoms → services →
 * processus-garantie → testimonials-certifs → zones-faq →
 * cta-form → footer
 *
 * @package FissureDrainXT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
get_template_part( 'template-parts/hero' );
get_template_part( 'template-parts/trust-stats' );
get_template_part( 'template-parts/symptoms' );
get_template_part( 'template-parts/services' );
get_template_part( 'template-parts/processus-garantie' );
get_template_part( 'template-parts/testimonials-certifs' );
get_template_part( 'template-parts/zones-faq' );
get_template_part( 'template-parts/cta-form' );
get_footer();

<?php
/**
 * 404.php — Page not found template
 *
 * @package FissureDrainXT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<main id="main" class="wrap" style="padding-top:120px;padding-bottom:80px;text-align:center;">
  <h1 style="font-family:var(--font-head);font-size:clamp(60px,10vw,120px);font-weight:900;color:var(--y);line-height:1;">404</h1>
  <p style="font-size:clamp(18px,2.5vw,24px);font-family:var(--font-head);font-weight:600;margin-bottom:16px;">
    <?php esc_html_e( 'Page introuvable', 'fissuredrainxt' ); ?>
  </p>
  <p style="font-size:15px;color:var(--gr3);margin-bottom:32px;">
    <?php esc_html_e( 'La page que vous cherchez n\'existe pas ou a été déplacée.', 'fissuredrainxt' ); ?>
  </p>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-y">
    <?php esc_html_e( '← Retour à l\'accueil', 'fissuredrainxt' ); ?>
  </a>
</main>

<?php get_footer(); ?>

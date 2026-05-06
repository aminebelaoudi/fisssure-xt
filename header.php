<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ═══════════════════════════════════════════════════════════
     NAVIGATION
════════════════════════════════════════════════════════════ -->
<nav role="navigation" aria-label="<?php esc_attr_e( 'Navigation principale', 'fissuredrainxt' ); ?>">
  <div class="ni">

    <!-- Logo -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nlogo" aria-label="<?php esc_attr_e( 'Fissure et Drain XT — Accueil', 'fissuredrainxt' ); ?>">
      <?php if ( has_custom_logo() ) :
          the_custom_logo();
      else : ?>
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.svg' ); ?>"
             alt="<?php esc_attr_e( 'Fissure et Drain XT', 'fissuredrainxt' ); ?>"
             width="160" height="44"
             loading="eager">
      <?php endif; ?>
    </a>

    <!-- Desktop links -->
    <div class="nl">
      <a href="#services"><?php esc_html_e( 'Services', 'fissuredrainxt' ); ?></a>
      <a href="#processus"><?php esc_html_e( 'Processus', 'fissuredrainxt' ); ?></a>
      <a href="#temoignages"><?php esc_html_e( 'Témoignages', 'fissuredrainxt' ); ?></a>
      <a href="#zones"><?php esc_html_e( 'Zones', 'fissuredrainxt' ); ?></a>
      <a href="#faq"><?php esc_html_e( 'FAQ', 'fissuredrainxt' ); ?></a>
    </div>

    <!-- Right side -->
    <div class="nr">
      <a href="tel:15147307107" class="ntel">📞 <?php esc_html_e( '(514) 730-7107', 'fissuredrainxt' ); ?></a>
      <a href="#soumission" class="nbtn"><?php esc_html_e( 'Soumission gratuite', 'fissuredrainxt' ); ?></a>
    </div>

    <!-- Hamburger -->
    <div class="hbg" onclick="tMob()" role="button" aria-label="<?php esc_attr_e( 'Menu', 'fissuredrainxt' ); ?>">
      <span></span><span></span><span></span>
    </div>

  </div>
</nav>

<!-- ═══════════════════════════════════════════════════════════
     MOBILE MENU
════════════════════════════════════════════════════════════ -->
<div class="mobm" id="mobM" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'Menu mobile', 'fissuredrainxt' ); ?>">
  <a href="#services" onclick="tMob()"><?php esc_html_e( 'Services', 'fissuredrainxt' ); ?></a>
  <a href="#processus" onclick="tMob()"><?php esc_html_e( 'Processus', 'fissuredrainxt' ); ?></a>
  <a href="#temoignages" onclick="tMob()"><?php esc_html_e( 'Témoignages', 'fissuredrainxt' ); ?></a>
  <a href="#zones" onclick="tMob()"><?php esc_html_e( 'Zones desservies', 'fissuredrainxt' ); ?></a>
  <a href="#faq" onclick="tMob()"><?php esc_html_e( 'FAQ', 'fissuredrainxt' ); ?></a>
  <a href="tel:15147307107">📞 <?php esc_html_e( '(514) 730-7107', 'fissuredrainxt' ); ?></a>
  <a href="#soumission" class="mcta" onclick="tMob()"><?php esc_html_e( 'Soumission gratuite →', 'fissuredrainxt' ); ?></a>
</div>

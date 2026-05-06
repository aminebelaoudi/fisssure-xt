<?php
/**
 * index.php — Main template (homepage + fallback)
 *
 * @package FissureDrainXT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

if ( is_front_page() || is_home() ) :
    // ── Homepage sections ──────────────────────────────────────────────────
    get_template_part( 'template-parts/hero' );
    get_template_part( 'template-parts/trust-stats' );
    get_template_part( 'template-parts/symptoms' );
    get_template_part( 'template-parts/services' );
    get_template_part( 'template-parts/processus-garantie' );
    get_template_part( 'template-parts/testimonials-certifs' );
    get_template_part( 'template-parts/zones-faq' );
    get_template_part( 'template-parts/cta-form' );

else :
    // ── Fallback: blog / archive ───────────────────────────────────────────
    ?>
    <main id="main" class="wrap" style="padding-top:100px;padding-bottom:60px;">

      <?php if ( have_posts() ) : ?>

        <div class="sec-head">
          <h1 class="sh dk"><?php
            if ( is_archive() )   the_archive_title();
            elseif ( is_search() ) printf( esc_html__( 'Résultats pour "%s"', 'fissuredrainxt' ), get_search_query() );
            else                   esc_html_e( 'Articles', 'fissuredrainxt' );
          ?></h1>
        </div>

        <div style="display:grid;gap:32px;margin-top:40px;">
          <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p style="font-size:13px;color:var(--gr3);margin-bottom:8px;">
              <?php echo esc_html( get_the_date() ); ?>
            </p>
            <div><?php the_excerpt(); ?></div>
          </article>
          <?php endwhile; ?>
        </div>

        <?php fdxt_pagination(); ?>

      <?php else : ?>
        <p><?php esc_html_e( 'Aucun contenu trouvé.', 'fissuredrainxt' ); ?></p>
      <?php endif; ?>

    </main>
    <?php

endif;

get_footer();
// For full WordPress integration, convert index.html to index.php
// and enqueue assets via functions.php.

<?php
/**
 * single.php — Single post template
 *
 * @package FissureDrainXT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<main id="main" class="wrap" style="padding-top:100px;padding-bottom:80px;max-width:800px;">

  <?php while ( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header style="margin-bottom:32px;border-bottom:2px solid var(--y);padding-bottom:24px;">
      <h1 style="font-family:var(--font-head);font-size:clamp(28px,4vw,48px);font-weight:800;line-height:1.15;margin-bottom:12px;">
        <?php the_title(); ?>
      </h1>
      <p style="font-size:13px;color:var(--gr3);">
        <?php echo esc_html( get_the_date() ); ?>
        <?php if ( get_the_author() ) : ?>
          — <?php the_author(); ?>
        <?php endif; ?>
      </p>
    </header>

    <div class="entry-content" style="font-size:16px;line-height:1.75;color:var(--dk);">
      <?php the_content(); ?>
    </div>

    <footer style="margin-top:40px;padding-top:20px;border-top:1px solid var(--gr2);">
      <?php
      $tags = get_the_tag_list( '<p style="font-size:13px;color:var(--gr3);">' . esc_html__( 'Étiquettes : ', 'fissuredrainxt' ), ', ', '</p>' );
      if ( $tags ) echo wp_kses_post( $tags );
      ?>
      <div style="margin-top:16px;">
        <?php
        the_post_navigation( array(
          'prev_text' => '← ' . esc_html__( 'Article précédent', 'fissuredrainxt' ),
          'next_text' => esc_html__( 'Article suivant', 'fissuredrainxt' ) . ' →',
        ) );
        ?>
      </div>
    </footer>

  </article>

  <?php endwhile; ?>

</main>

<?php get_footer(); ?>

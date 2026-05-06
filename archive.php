<?php
/**
 * archive.php — Archive template (categories, tags, dates, authors)
 *
 * @package FissureDrainXT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<main id="main" class="wrap" style="padding-top:100px;padding-bottom:80px;">

  <?php if ( have_posts() ) : ?>

  <header style="margin-bottom:40px;border-bottom:2px solid var(--y);padding-bottom:24px;">
    <h1 style="font-family:var(--font-head);font-size:clamp(26px,4vw,48px);font-weight:800;line-height:1.15;">
      <?php the_archive_title(); ?>
    </h1>
    <?php
    $desc = get_the_archive_description();
    if ( $desc ) :
    ?>
    <p style="margin-top:12px;font-size:15px;color:var(--gr3);"><?php echo wp_kses_post( $desc ); ?></p>
    <?php endif; ?>
  </header>

  <div style="display:grid;gap:32px;">
    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="border-bottom:1px solid var(--gr2);padding-bottom:28px;">
      <h2 style="font-family:var(--font-head);font-size:clamp(20px,2.5vw,28px);font-weight:700;margin-bottom:6px;">
        <a href="<?php the_permalink(); ?>" style="color:var(--dk);text-decoration:none;"><?php the_title(); ?></a>
      </h2>
      <p style="font-size:13px;color:var(--gr3);margin-bottom:10px;"><?php echo esc_html( get_the_date() ); ?></p>
      <div style="font-size:15px;line-height:1.7;color:var(--dk);"><?php the_excerpt(); ?></div>
    </article>
    <?php endwhile; ?>
  </div>

  <div style="margin-top:40px;"><?php fdxt_pagination(); ?></div>

  <?php else : ?>
  <p><?php esc_html_e( 'Aucun article trouvé.', 'fissuredrainxt' ); ?></p>
  <?php endif; ?>

</main>

<?php get_footer(); ?>

<?php
/**
 * page.php — Static page template
 *
 * @package FissureDrainXT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<main id="main" class="wrap" style="padding-top:100px;padding-bottom:80px;max-width:900px;">

  <?php while ( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( ! is_front_page() ) : ?>
    <header style="margin-bottom:32px;border-bottom:2px solid var(--y);padding-bottom:24px;">
      <h1 style="font-family:var(--font-head);font-size:clamp(28px,4vw,48px);font-weight:800;line-height:1.15;">
        <?php the_title(); ?>
      </h1>
    </header>
    <?php endif; ?>

    <div class="entry-content" style="font-size:16px;line-height:1.75;color:var(--dk);">
      <?php the_content(); ?>
    </div>

  </article>

  <?php endwhile; ?>

</main>

<?php get_footer(); ?>

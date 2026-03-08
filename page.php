<?php
/**
 * Generic page template for Digital Growth theme
 *
 * @package digitalgrowth
 */

get_header();
?>

<main class="site-main page-main">
  <div class="container" style="padding-top: 80px; padding-bottom: 80px;">
    <?php
    while (have_posts()):
      the_post();
      ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header section-headings" style="margin-bottom:40px;">
          <h1 class="heading text-50 fw-600"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content text text-18">
          <?php
          the_content();
          wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'digitalgrowth'),
            'after' => '</div>',
          ));
          ?>
        </div>
        <?php if (get_edit_post_link()): ?>
          <footer class="entry-footer">
            <?php edit_post_link(esc_html__('Edit Page', 'digitalgrowth'), '<span class="edit-link">', '</span>'); ?>
          </footer>
        <?php endif; ?>
      </article>
      <?php
      if (comments_open() || get_comments_number()) {
        comments_template();
      }
    endwhile;
    ?>
  </div>
</main>

<?php get_footer(); ?>
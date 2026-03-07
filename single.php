<?php
/**
 * Single post template for Digital Growth theme
 *
 * @package digitalgrowth
 */

get_header();
?>

<main class="site-main single-main">
  <div class="container" style="padding-top: 120px; padding-bottom: 80px; max-width: 860px;">
    <?php
    while ( have_posts() ) :
      the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post-article' ); ?>>

      <header class="entry-header section-headings" style="margin-bottom:30px;">
        <div class="entry-meta text text-14" style="margin-bottom:16px;opacity:.7;">
          <span><?php echo get_the_date(); ?></span>
          <span style="margin:0 8px;">·</span>
          <span><?php esc_html_e( 'By', 'digitalgrowth' ); ?> <?php the_author(); ?></span>
          <?php
          $categories = get_the_category();
          if ( $categories ) :
            echo '<span style="margin:0 8px;">·</span>';
            $cat_links = array();
            foreach ( $categories as $cat ) {
              $cat_links[] = '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">' . esc_html( $cat->name ) . '</a>';
            }
            echo implode( ', ', $cat_links );
          endif;
          ?>
        </div>
        <h1 class="heading text-50 fw-600"><?php the_title(); ?></h1>
      </header>

      <?php if ( has_post_thumbnail() ) : ?>
      <div class="entry-thumbnail" style="margin-bottom:40px;border-radius:18px;overflow:hidden;">
        <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%;height:auto;' ) ); ?>
      </div>
      <?php endif; ?>

      <div class="entry-content text text-18">
        <?php
        the_content( sprintf(
          wp_kses( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'digitalgrowth' ), array( 'span' => array( 'class' => array() ) ) ),
          get_the_title()
        ) );
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'digitalgrowth' ),
          'after'  => '</div>',
        ) );
        ?>
      </div>

      <footer class="entry-footer" style="margin-top:40px;padding-top:20px;border-top:1px solid rgba(28,37,57,0.1);">
        <?php
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'digitalgrowth' ) );
        if ( $tags_list ) {
          printf( '<span class="tags-links text text-14">' . esc_html__( 'Tags: %1$s', 'digitalgrowth' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
        edit_post_link( esc_html__( 'Edit', 'digitalgrowth' ), '<span class="edit-link">', '</span>' );
        ?>
      </footer>
    </article>

    <!-- Post Navigation -->
    <nav class="navigation post-navigation" style="margin-top:60px;display:flex;justify-content:space-between;gap:20px;">
      <?php
      $prev = get_previous_post();
      $next = get_next_post();
      if ( $prev ) : ?>
      <a href="<?php echo get_permalink( $prev->ID ); ?>" class="button button--secondary" style="max-width:48%;">
        &larr; <?php echo esc_html( get_the_title( $prev->ID ) ); ?>
      </a>
      <?php endif;
      if ( $next ) : ?>
      <a href="<?php echo get_permalink( $next->ID ); ?>" class="button button--primary" style="max-width:48%;margin-left:auto;">
        <?php echo esc_html( get_the_title( $next->ID ) ); ?> &rarr;
      </a>
      <?php endif; ?>
    </nav>

    <?php
    if ( comments_open() || get_comments_number() ) {
      comments_template();
    }
    endwhile;
    ?>
  </div>
</main>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying single blog posts.
 *
 * @package digitalgrowth
 */

get_header();
?>

<main class="site-main single-main">
  <div class="container" style="padding-top: 120px; padding-bottom: 80px; max-width: 860px;">
    <?php while (have_posts()):
      the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class('single-post-article'); ?>>

        <header class="entry-header section-headings" style="margin-bottom:30px;">
          <div class="entry-meta text text-14" style="margin-bottom:16px;opacity:.7;">
            <span><?php echo esc_html(get_the_date()); ?></span>
            <span style="margin:0 8px;">·</span>
            <span><?php esc_html_e('By', 'digitalgrowth'); ?>   <?php the_author(); ?></span>
            <?php
            $categories = get_the_category();
            if ($categories):
              echo '<span style="margin:0 8px;">·</span>';
              $cat_links = array();
              foreach ($categories as $cat) {
                $cat_links[] = '<a href="' . esc_url(get_category_link($cat->term_id)) . '">' . esc_html($cat->name) . '</a>';
              }
              echo implode(', ', $cat_links);
            endif;
            ?>
          </div>
          <h1 class="entry-title heading text-50"><?php the_title(); ?></h1>
        </header>

        <?php if (has_post_thumbnail()): ?>
          <div class="entry-thumbnail" style="margin-bottom:40px;">
            <?php the_post_thumbnail('full', array('style' => 'width:100%;height:auto;border-radius:18px;display:block;', 'loading' => 'lazy')); ?>
          </div>
        <?php endif; ?>

        <div class="entry-content blog-description">
          <?php
          the_content();
          wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'digitalgrowth'),
            'after' => '</div>',
          ));
          ?>
        </div>

        <!-- Tags + Social Share -->
        <div class="blog-share" style="margin-top:40px;" data-aos="fade-up">
          <div class="blog-share-item">
            <h2 class="label heading text-16 fw-500"><?php esc_html_e('Tags:', 'digitalgrowth'); ?></h2>
            <ul class="sidebar-tags list-unstyled">
              <?php
              $tags = get_the_tags();
              if ($tags):
                foreach ($tags as $tag): ?>
                  <li>
                    <a class="subheading subheading-bg text-18" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                      aria-label="<?php echo esc_attr($tag->name); ?>">
                      <?php echo esc_html($tag->name); ?>
                    </a>
                  </li>
                <?php endforeach;
              else: ?>
                <li><span class="text text-16"><?php esc_html_e('No tags.', 'digitalgrowth'); ?></span></li>
              <?php endif; ?>
            </ul>
          </div>
          <div class="blog-share-item">
            <h2 class="label heading text-16 fw-500"><?php esc_html_e('Share:', 'digitalgrowth'); ?></h2>
            <ul class="social-icons list-unstyled">
              <li>
                <a class="social-link text" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
                  target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                  <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.66634 10.2552H8.74967L9.58301 6.92188H6.66634V5.25521C6.66634 4.39739 6.66634 3.58854 8.33301 3.58854H9.58301V0.788625C9.31159 0.752583 8.28551 0.671875 7.20209 0.671875C4.94001 0.671875 3.33301 2.05259 3.33301 4.5883V6.92188H0.833008V10.2552H3.33301V17.3385H6.66634V10.2552Z"
                      fill="currentColor" />
                  </svg>
                  <span class="visually-hidden">Facebook</span>
                </a>
              </li>
              <li>
                <a class="social-link text"
                  href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank"
                  rel="noopener noreferrer" aria-label="LinkedIn">
                  <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z"
                      fill="currentColor" />
                  </svg>
                  <span class="visually-hidden">LinkedIn</span>
                </a>
              </li>
              <li>
                <a class="social-link text"
                  href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php echo rawurlencode(get_the_title()); ?>"
                  target="_blank" rel="noopener noreferrer" aria-label="X / Twitter">
                  <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262C1.20545 4.94726 1.20545 4.9619 1.20545 4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z"
                      fill="currentColor" />
                  </svg>
                  <span class="visually-hidden">Twitter / X</span>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </article>

      <?php comments_template(); ?>


    <?php endwhile; ?>
  </div><!-- .container -->
</main>

<?php get_footer(); ?>
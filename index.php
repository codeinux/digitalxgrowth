<?php
/**
 * The main blog/posts index template.
 *
 * Used for the posts page (blog archive) when a static front page is set.
 * The homepage is handled by homepage.php (Template Name: Homepage).
 *
 * @package digitalgrowth
 */

get_header();
?>

<main>
  <div class="featured-blog mt-100 section-padding">
    <div class="container">

      <!-- Section heading -->
      <div class="section-headings" data-aos="fade-up">
        <div class="subheading text-20 subheading-bg">
          <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
            fill="none">
            <g clip-path="url(#clip-bidx1)">
              <path
                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                fill="CurrentColor" />
            </g>
            <defs>
              <clipPath id="clip-bidx1">
                <rect width="14" height="14" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <span><?php esc_html_e('Our Blog', 'digitalgrowth'); ?></span>
          <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
            fill="none">
            <g clip-path="url(#clip-bidx2)">
              <path
                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                fill="CurrentColor" />
            </g>
            <defs>
              <clipPath id="clip-bidx2">
                <rect width="14" height="14" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </div>
        <h1 class="heading text-50" data-aos="fade-up" data-aos-delay="50">
          <?php esc_html_e('Latest from Our Blog', 'digitalgrowth'); ?>
        </h1>
      </div>

      <?php if (have_posts()): ?>
        <div class="section-content" data-aos="fade-up">
          <div class="row product-grid justify-content-center">
            <?php while (have_posts()):
              the_post(); ?>
              <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card-blog radius18">

                  <!-- card-blog-top: meta + title -->
                  <div class="card-blog-top">
                    <div class="card-blog-meta">
                      <!-- Author -->
                      <div class="card-blog-meta-item text text-18">
                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.0007 0.046875C6.95088 0.046875 5.94406 0.463912 5.20173 1.20624C4.4594 1.94858 4.04236 2.95539 4.04236 4.00521C4.04236 5.05502 4.4594 6.06184 5.20173 6.80417C5.94406 7.5465 6.95088 7.96354 8.0007 7.96354C9.05051 7.96354 10.0573 7.5465 10.7997 6.80417C11.542 6.06184 11.959 5.05502 11.959 4.00521C11.959 2.95539 11.542 1.94858 10.7997 1.20624C10.0573 0.463912 9.05051 0.046875 8.0007 0.046875ZM5.29236 4.00521C5.29236 3.28691 5.57771 2.59804 6.08562 2.09013C6.59353 1.58222 7.2824 1.29688 8.0007 1.29688C8.71899 1.29688 9.40787 1.58222 9.91578 2.09013C10.4237 2.59804 10.709 3.28691 10.709 4.00521C10.709 4.7235 10.4237 5.41238 9.91578 5.92029C9.40787 6.4282 8.71899 6.71354 8.0007 6.71354C7.2824 6.71354 6.59353 6.4282 6.08562 5.92029C5.57771 5.41238 5.29236 4.7235 5.29236 4.00521ZM8.0007 9.21354C6.0732 9.21354 4.29653 9.65187 2.9807 10.3919C1.68403 11.1219 0.709031 12.2269 0.709031 13.5885V13.6735C0.708198 14.6419 0.707364 15.8569 1.7732 16.7252C2.29736 17.1519 3.03153 17.456 4.0232 17.656C5.01653 17.8577 6.31236 17.9635 8.0007 17.9635C9.68903 17.9635 10.984 17.8577 11.979 17.656C12.9707 17.456 13.704 17.1519 14.229 16.7252C15.2949 15.8569 15.2932 14.6419 15.2924 13.6735V13.5885C15.2924 12.2269 14.3174 11.1219 13.0215 10.3919C11.7049 9.65187 9.92903 9.21354 8.0007 9.21354Z"
                            fill="currentColor" />
                        </svg>
                        <?php the_author(); ?>
                      </div>
                      <!-- Date -->
                      <div class="card-blog-meta-item text text-18">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M13.1667 10.6667C13.3877 10.6667 13.5996 10.5789 13.7559 10.4226C13.9122 10.2663 14 10.0543 14 9.83333C14 9.61232 13.9122 9.40036 13.7559 9.24408C13.5996 9.0878 13.3877 9 13.1667 9C12.9457 9 12.7337 9.0878 12.5774 9.24408C12.4211 9.40036 12.3333 9.61232 12.3333 9.83333C12.3333 10.0543 12.4211 10.2663 12.5774 10.4226C12.7337 10.5789 12.9457 10.6667 13.1667 10.6667Z"
                            fill="currentColor" />
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M4.83268 0.453125C5.16602 0.453125 5.45768 0.744792 5.45768 1.07812V1.71396C6.00935 1.70312 6.61685 1.70312 7.28518 1.70312H10.7127C11.3818 1.70312 11.9893 1.70312 12.541 1.71396V1.07812C12.541 0.744792 12.8327 0.453125 13.166 0.453125C13.4993 0.453125 13.791 0.744792 13.791 1.07812V1.76729C14.0077 1.78396 14.2127 1.80479 14.4068 1.83063C15.3835 1.96229 16.1743 2.23896 16.7985 2.86229C17.4218 3.48646 17.6985 4.27729 17.8302 5.25396C17.9577 6.20396 17.9577 7.41646 17.9577 8.94812V10.7081C17.9577 12.2398 17.9577 13.4531 17.8302 14.4023C17.6985 15.379 17.4218 16.1698 16.7985 16.794C16.1743 17.4173 15.3835 17.694 14.4068 17.8256C13.4568 17.9531 12.2443 17.9531 10.7127 17.9531H7.28602C5.75435 17.9531 4.54102 17.9531 3.59185 17.8256C2.61518 17.694 1.82435 17.4173 1.20018 16.794C0.576849 16.1698 0.300182 15.379 0.168516 14.4023C0.0410156 13.4523 0.0410156 12.2398 0.0410156 10.7081V8.94812C0.0410156 7.41646 0.0410156 6.20312 0.168516 5.25396C0.300182 4.27729 0.576849 3.48646 1.20018 2.86229C1.82435 2.23896 2.61518 1.96229 3.59185 1.83063C3.78602 1.80479 3.99185 1.78396 4.20768 1.76729V1.07812C4.20768 0.744792 4.49935 0.453125 4.83268 0.453125ZM1.29102 8.99479C1.29102 8.28312 1.29102 7.66396 1.30185 7.11979H16.6968C16.7077 7.66396 16.7077 8.28312 16.7077 8.99479V10.6615C16.7077 12.2506 16.706 13.3798 16.591 14.2365C16.4785 15.074 16.2668 15.5573 15.9143 15.9098C15.5618 16.2623 15.0785 16.474 14.2402 16.5865C13.3843 16.7015 12.2552 16.7031 10.666 16.7031H7.33268C5.74352 16.7031 4.61518 16.7015 3.75768 16.5865C2.92018 16.474 2.43685 16.2623 2.08435 15.9098C1.73185 15.5573 1.52018 15.074 1.40768 14.2356C1.29268 13.3798 1.29102 12.2506 1.29102 10.6615V8.99479Z"
                            fill="currentColor" />
                        </svg>
                        <?php echo esc_html(get_the_date()); ?>
                      </div>
                    </div>
                    <h2 class="card-blog-heading heading text-22">
                      <a href="<?php the_permalink(); ?>" class="heading text-22"><?php the_title(); ?></a>
                    </h2>
                  </div>

                  <!-- card-blog-bottom: category tag + image + button -->
                  <a class="card-blog-bottom" href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
                    <?php
                    $cats = get_the_category();
                    if ($cats): ?>
                      <span
                        class="blog-tag subheading subheading-bg text-16 fw-500"><?php echo esc_html($cats[0]->name); ?></span>
                    <?php endif; ?>
                    <div class="media">
                      <?php if (has_post_thumbnail()):
                        the_post_thumbnail('medium_large', array('loading' => 'lazy', 'alt' => get_the_title(), 'width' => '1000', 'height' => '707'));
                      else: ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/blog/default.jpg"
                          alt="<?php the_title_attribute(); ?>" width="1000" height="707" loading="lazy">
                      <?php endif; ?>
                    </div>
                    <div class="buttons">
                      <div class="button button--primary">
                        <?php esc_html_e('Read More', 'digitalgrowth'); ?>
                        <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z"
                            fill="currentColor" />
                        </svg>
                      </div>
                    </div>
                  </a>

                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
          </div>
        </div>

        <!-- Pagination -->
        <div class="buttons buttons-discover" data-aos="fade-up" data-aos-delay="100">
          <?php
          the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => esc_html__('← Prev', 'digitalgrowth'),
            'next_text' => esc_html__('Next →', 'digitalgrowth'),
          ));
          ?>
        </div>

      <?php else: ?>
        <p class="text text-18" style="text-align:center;padding:80px 0;">
          <?php esc_html_e('No blog posts yet. Check back soon!', 'digitalgrowth'); ?>
        </p>
      <?php endif; ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>
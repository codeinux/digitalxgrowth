<?php
/**
 * 404 Not Found template for Digital Growth theme
 *
 * @package digitalgrowth
 */

get_header();
?>

<main class="site-main error-404">
  <div class="container" style="padding: 140px 20px 100px;text-align:center;">
    <div class="subheading text-20 subheading-bg" style="display:inline-flex;margin-bottom:24px;">
      <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
        <g clip-path="url(#clip-404-star)">
          <path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"/>
        </g>
        <defs><clipPath id="clip-404-star"><rect width="14" height="14" fill="white"/></clipPath></defs>
      </svg>
      <span><?php esc_html_e( '404 Error', 'digitalgrowth' ); ?></span>
    </div>

    <h1 class="heading text-80 fw-700" style="margin-bottom:20px;">
      <?php esc_html_e( 'Page Not Found', 'digitalgrowth' ); ?>
    </h1>
    <p class="text text-18" style="max-width:560px;margin:0 auto 40px;">
      <?php esc_html_e( "Oops! The page you're looking for doesn't exist. It might have been moved or deleted.", 'digitalgrowth' ); ?>
    </p>
    <div class="buttons" style="justify-content:center;display:flex;gap:16px;flex-wrap:wrap;">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button button--primary">
        <?php esc_html_e( 'Back to Home', 'digitalgrowth' ); ?>
        <span class="svg-wrapper">
          <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path>
          </svg>
        </span>
      </a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="button button--secondary">
        <?php esc_html_e( 'Contact Us', 'digitalgrowth' ); ?>
        <span class="svg-wrapper">
          <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path>
          </svg>
        </span>
      </a>
    </div>
  </div>
</main>

<?php get_footer(); ?>

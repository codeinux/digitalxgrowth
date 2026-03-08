<?php
/**
 * Footer template for the Digital Growth theme
 *
 * @package digitalgrowth
 */
?>

<!-- Footer -->
<footer>
  <!-- Footer Main -->
  <div class="footer-main bg-contain"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/imgs/footer/footer-bg-large.jpg)">
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row footer-custom-row">

          <!-- Brand Column -->
          <div class="col-12 col-md-6">
            <div class="footer-widget footer-widget-brand" data-aos="fade-up" data-aos-anchor=".footer-top">
              <a class="footer-logo" href="<?php echo esc_url(home_url('/')); ?>"
                aria-label="<?php bloginfo('name'); ?> Logo">
                <?php if (has_custom_logo()):
                  the_custom_logo();
                else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-white.png"
                    alt="<?php bloginfo('name'); ?> Logo" width="189" height="32" loading="lazy">
                <?php endif; ?>
              </a>
              <p class="text text-16">
                <?php echo esc_html(get_bloginfo('description') ? get_bloginfo('description') : __('AI-powered digital marketing that drives growth and visibility.', 'digitalgrowth')); ?>
              </p>
              <!-- Social Icons -->
              <ul class="social-icons list-unstyled" data-aos="fade-up" data-aos-anchor=".footer-top">
                <?php if ($fb = get_theme_mod('social_facebook', 'https://web.facebook.com/')): ?>
                  <li>
                    <a class="social-link text" href="<?php echo esc_url($fb); ?>" aria-label="Facebook" target="_blank"
                      rel="noopener noreferrer">
                      <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.66634 10.2552H8.74967L9.58301 6.92188H6.66634V5.25521C6.66634 4.39739 6.66634 3.58854 8.33301 3.58854H9.58301V0.788625C9.31159 0.752583 8.28551 0.671875 7.20209 0.671875C4.94001 0.671875 3.33301 2.05259 3.33301 4.5883V6.92188H0.833008V10.2552H3.33301V17.3385H6.66634V10.2552Z"
                          fill="currentColor" />
                      </svg>
                      <span class="visually-hidden"><?php esc_html_e('Facebook', 'digitalgrowth'); ?></span>
                    </a>
                  </li>
                <?php endif; ?>
                <?php if ($li = get_theme_mod('social_linkedin', 'https://www.linkedin.com/')): ?>
                  <li>
                    <a class="social-link text" href="<?php echo esc_url($li); ?>" aria-label="LinkedIn" target="_blank"
                      rel="noopener noreferrer">
                      <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z"
                          fill="currentColor" />
                      </svg>
                      <span class="visually-hidden"><?php esc_html_e('LinkedIn', 'digitalgrowth'); ?></span>
                    </a>
                  </li>
                <?php endif; ?>
                <?php if ($tw = get_theme_mod('social_twitter', 'https://x.com/')): ?>
                  <li>
                    <a class="social-link text" href="<?php echo esc_url($tw); ?>" aria-label="Twitter / X"
                      target="_blank" rel="noopener noreferrer">
                      <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262C1.20545 4.94726 1.20545 4.9619 1.20545 4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z"
                          fill="currentColor" />
                      </svg>
                      <span class="visually-hidden"><?php esc_html_e('Twitter / X', 'digitalgrowth'); ?></span>
                    </a>
                  </li>
                <?php endif; ?>
                <?php if ($ig = get_theme_mod('social_instagram', 'https://www.instagram.com/')): ?>
                  <li>
                    <a class="social-link text" href="<?php echo esc_url($ig); ?>" aria-label="Instagram" target="_blank"
                      rel="noopener noreferrer">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9 1.62207C11.4029 1.62207 11.6875 1.63184 12.6396 1.67578C14.5645 1.76367 15.4717 2.6855 15.5596 4.58105C15.6035 5.53223 15.6123 5.81738 15.6123 8.2207C15.6123 10.624 15.6025 10.9082 15.5596 11.8604C15.4707 13.7539 14.5664 14.6777 12.6396 14.7656C11.6875 14.8096 11.4043 14.8193 9 14.8193C6.5957 14.8193 6.3125 14.8096 5.36133 14.7656C3.43164 14.6768 2.5293 13.751 2.44043 11.8594C2.39648 10.9072 2.38672 10.624 2.38672 8.2207C2.38672 5.81738 2.39746 5.53223 2.44043 4.58008C2.5293 2.6875 3.43359 1.76367 5.36133 1.67578C6.3125 1.63184 6.5957 1.62207 9 1.62207ZM9 0C6.55566 0 6.25098 0.0107422 5.28809 0.0546875C2.68652 0.17334 1.17334 1.68457 1.05469 4.28906C1.00977 5.25098 1 5.55566 1 8C1 10.4443 1.00977 10.749 1.05371 11.7109C1.17236 14.3125 2.68164 15.8262 5.28711 15.9453C6.25098 15.9893 6.55566 16 9 16C11.4443 16 11.749 15.9893 12.7109 15.9453C15.3115 15.8262 16.8281 14.3154 16.9443 11.7109C16.9893 10.749 17 10.4443 17 8C17 5.55566 16.9893 5.25098 16.9453 4.28906C16.8291 1.69043 15.3174 0.17334 12.7119 0.0546875C11.749 0.0107422 11.4443 0 9 0ZM9 3.8916C6.44141 3.8916 4.36621 5.96777 4.36621 8.52637C4.36621 11.085 6.44141 13.1602 9 13.1602C11.5586 13.1602 13.6338 11.085 13.6338 8.52637C13.6338 5.96777 11.5586 3.8916 9 3.8916ZM9 11.5371C7.34277 11.5371 5.98926 10.1836 5.98926 8.52637C5.98926 6.86914 7.34277 5.51563 9 5.51563C10.6572 5.51563 12.0107 6.86914 12.0107 8.52637C12.0107 10.1836 10.6572 11.5371 9 11.5371ZM13.8184 2.76953C13.2207 2.76953 12.7363 3.25391 12.7363 3.85156C12.7363 4.44922 13.2207 4.93359 13.8184 4.93359C14.416 4.93359 14.9004 4.44922 14.9004 3.85156C14.9004 3.25391 14.416 2.76953 13.8184 2.76953Z"
                          fill="currentColor" />
                      </svg>
                      <span class="visually-hidden"><?php esc_html_e('Instagram', 'digitalgrowth'); ?></span>
                    </a>
                  </li>
                <?php endif; ?>
              </ul>
            </div>
          </div>

          <!-- Quick Links -->
          <div class="col-12 col-md-6">
            <div class="footer-widget footer-widget-menu" data-aos="fade-up" data-aos-anchor=".footer-top">
              <div class="widget-heading heading text-22"><?php esc_html_e('Quick Links', 'digitalgrowth'); ?></div>
              <ul class="footer-menu list-unstyled">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"
                    class="text text-16 link"><?php esc_html_e('Home', 'digitalgrowth'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/about-me/')); ?>" class="text text-16 link"
                    aria-label="About Us"><?php esc_html_e('About Me', 'digitalgrowth'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/services/')); ?>" class="text text-16 link"
                    aria-label="Services"><?php esc_html_e('Services', 'digitalgrowth'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/blog/')); ?>" class="text text-16 link"
                    aria-label="Blogs"><?php esc_html_e('Blogs', 'digitalgrowth'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="text text-16 link"
                    aria-label="Contact Us"><?php esc_html_e('Contact Us', 'digitalgrowth'); ?></a></li>
              </ul>
            </div>
          </div>

          <!-- Services -->
          <div class="col-12 col-md-6">
            <div class="footer-widget footer-widget-menu" data-aos="fade-up" data-aos-anchor=".footer-top">
              <div class="widget-heading heading text-22"><?php esc_html_e('Services', 'digitalgrowth'); ?></div>
              <ul class="footer-menu list-unstyled">
                <li><a href="<?php echo esc_url(home_url('/services/seo-audit-services/')); ?>"
                    class="text text-16 link"><?php esc_html_e('SEO Audit', 'digitalgrowth'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/services/competitor-analysis-services/')); ?>"
                    class="text text-16 link"><?php esc_html_e('Competitor Analysis', 'digitalgrowth'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/services/backlink-services/')); ?>"
                    class="text text-16 link"><?php esc_html_e('High-Authority Backlinks', 'digitalgrowth'); ?></a>
                </li>
                <li><a href="<?php echo esc_url(home_url('/services/')); ?>"
                    class="text text-16 link"><?php esc_html_e('Digital Marketing', 'digitalgrowth'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/services/')); ?>"
                    class="text text-16 link"><?php esc_html_e('Web Development', 'digitalgrowth'); ?></a></li>
              </ul>
            </div>
          </div>

          <!-- Information -->
          <div class="col-12 col-md-6">
            <div class="footer-widget footer-widget-menu" data-aos="fade-up" data-aos-anchor=".footer-top">
              <div class="widget-heading heading text-22"><?php esc_html_e('Information', 'digitalgrowth'); ?></div>
              <ul class="footer-menu list-unstyled">
                <li><a href="<?php echo esc_url(home_url('/about-me/')); ?>"
                    class="text text-16 link"><?php esc_html_e('About Me', 'digitalgrowth'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>"
                    class="text text-16 link"><?php esc_html_e('Privacy Policy', 'digitalgrowth'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/terms-conditions/')); ?>"
                    class="text text-16 link"><?php esc_html_e('Terms & Conditions', 'digitalgrowth'); ?></a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <div class="container-fluid">
      <div class="row footer-bottom-row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="footer-copyright text text-16">
            <?php echo esc_html('© ' . date('Y') . ' ' . get_bloginfo('name') . '. '); ?>
            <?php esc_html_e('All rights reserved.', 'digitalgrowth'); ?>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <ul class="footer-menu footer-policies list-unstyled">
            <li><a href="https://flixoye.com"
                class="text text-16 link"><?php esc_html_e('Developed by Flixoye', 'digitalgrowth'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>"
                class="text text-16 link"><?php esc_html_e('Privacy Policy', 'digitalgrowth'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>"
                class="text text-16 link"><?php esc_html_e('Contact', 'digitalgrowth'); ?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Drawer Overlay -->
<drawer-opener id="drawer-overlay"></drawer-opener>

<!-- Scroll to Top -->
<scroll-top>
  <div class="scroll-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
    </svg>
  </div>
</scroll-top>

<?php wp_footer(); ?>
</body>

</html>
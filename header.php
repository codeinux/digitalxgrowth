<?php
/**
 * The header template for the Digital Growth theme
 *
 * @package digitalgrowth
 */
?><!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="view-transition" content="same-origin">
  <meta name="theme-color" content="Red">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php
  // Basic Open Graph details to generate rich previews on WhatsApp / Social Media
  $og_title = get_bloginfo('name') . ' | ' . get_bloginfo('description');
  $og_url = home_url(add_query_arg(array(), $wp->request));
  $og_description = get_bloginfo('description');
  $og_type = 'website';

  // The default Open Graph image (Facebook/WhatsApp require minimum 200x200px)
  $og_image = get_template_directory_uri() . '/assets/imgs/logo-white-share.jpg';

  // Override if viewing a specific post/page
  if (is_singular()) {
    $og_title = get_the_title() . ' | ' . get_bloginfo('name');
    $og_url = get_permalink();
    $og_type = 'article';

    if (has_excerpt()) {
      $og_description = wp_strip_all_tags(get_the_excerpt());
    } else {
      $content = get_post_field('post_content', get_the_ID());
      $og_description = wp_trim_words(wp_strip_all_tags($content), 40, '...');
    }

    if (has_post_thumbnail()) {
      // Use 'large' to ensure it's big enough for the 1200x630 standard
      $og_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
    }
  }
  ?>
  <meta property="og:title" content="<?php echo esc_attr($og_title); ?>">
  <meta property="og:description" content="<?php echo esc_attr($og_description); ?>">
  <meta property="og:url" content="<?php echo esc_url($og_url); ?>">
  <meta property="og:image" content="<?php echo esc_url($og_image); ?>">
  <meta property="og:type" content="<?php echo esc_attr($og_type); ?>">
  <meta property="og:image:width" content="200" />
  <meta property="og:image:height" content="200" />

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo esc_attr($og_title); ?>">
  <meta name="twitter:description" content="<?php echo esc_attr($og_description); ?>">
  <meta name="twitter:image" content="<?php echo esc_url($og_image); ?>">
  <meta property="twitter:image:width" content="200" />
  <meta property="twitter:image:height" content="200" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- Sticky Header -->
  <sticky-header data-sticky-type="always">
    <header class="header-2 header-sticky">
      <div class="container-fluid">
        <div class="header-grid">

          <!-- Logo -->
          <a class="header-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?>">
            <?php if (has_custom_logo()):
              the_custom_logo();
            else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-white.jpg"
                alt="<?php bloginfo('name'); ?>" width="189" height="32">
            <?php endif; ?>
          </a>

          <!-- Drawer / Desktop Nav -->
          <drawer-menu>
            <nav class="header-nav drawer-menu">
              <!-- Mobile nav header -->
              <div class="d-lg-none header-nav-headings">
                <a class="header-logo" href="<?php echo esc_url(home_url('/')); ?>"
                  aria-label="<?php bloginfo('name'); ?>">
                  <?php if (has_custom_logo()):
                    the_custom_logo();
                  else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-white.jpg"
                      alt="<?php bloginfo('name'); ?>" width="189" height="32" loading="lazy">
                  <?php endif; ?>
                </a>
                <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-menu">
                  <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                      fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                      fill="currentColor" />
                  </svg>
                </drawer-opener>
              </div>

              <!-- Primary Navigation Menu -->
              <?php
              wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'header-menu list-unstyled',
                'container' => false,
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new DigitalGrowth_Walker_Nav_Menu(),
              ));
              ?>

              <!-- Mobile drawer extra content -->
              <div class="drawer-content d-lg-none">

                <div class="drawer-block drawer-block-contact">
                  <div class="drawer-heading text text-18"><?php esc_html_e('Quick Contact', 'digitalgrowth'); ?>
                  </div>
                  <ul class="drawer-additional-menu list-unstyled flex-direction-column">
                    <li class="nav-item">
                      <a class="menu-link"
                        href="tel:<?php echo esc_attr(get_theme_mod('phone_number', '+01234567890')); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                          stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                        </svg>
                        <?php echo esc_html(get_theme_mod('phone_number', '+01234567890')); ?>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="menu-link"
                        href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', get_option('admin_email'))); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                          stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                        </svg>
                        <?php echo esc_html(get_theme_mod('contact_email', get_option('admin_email'))); ?>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </drawer-menu>

          <!-- Header Actions -->
          <div class="header-actions d-flex align-items-center">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" aria-label="contact us"
              class="button button--primary button--slim">
              <?php esc_html_e('Get in Touch', 'digitalgrowth'); ?>
              <span class="svg-wrapper">
                <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                    fill="currentColor"></path>
                </svg>
              </span>
            </a>
            <!-- Mobile menu opener -->
            <drawer-opener class="svg-wrapper menu-open d-lg-none" data-drawer=".drawer-menu">
              <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="26" cy="26" r="25.5" fill="white" stroke="currentColor" />
                <path
                  d="M32.5 18.2857C32.5 17.5757 31.9179 17 31.2 17H14.3C13.5821 17 13 17.5757 13 18.2857C13 18.9958 13.5821 19.5714 14.3 19.5714H31.2C31.9179 19.5714 32.5 18.9957 32.5 18.2857ZM14.3 24.7143H37.7C38.4179 24.7143 39 25.29 39 26C39 26.7101 38.4179 27.2857 37.7 27.2857H14.3C13.5821 27.2857 13 26.7101 13 26C13 25.29 13.5821 24.7143 14.3 24.7143ZM14.3 32.4286H26C26.7179 32.4286 27.3 33.0042 27.3 33.7143C27.3 34.4243 26.7179 35 26 35H14.3C13.5821 35 13 34.4243 13 33.7143C13 33.0042 13.5821 32.4286 14.3 32.4286Z"
                  fill="currentColor" />
              </svg>
            </drawer-opener>
            <!-- Desktop additional drawer opener -->
            <drawer-opener class="svg-wrapper menu-open d-none d-lg-flex" data-drawer=".drawer-additional">
              <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="26" cy="26" r="25.5" fill="white" stroke="currentColor" />
                <path
                  d="M32.5 18.2857C32.5 17.5757 31.9179 17 31.2 17H14.3C13.5821 17 13 17.5757 13 18.2857C13 18.9958 13.5821 19.5714 14.3 19.5714H31.2C31.9179 19.5714 32.5 18.9957 32.5 18.2857ZM14.3 24.7143H37.7C38.4179 24.7143 39 25.29 39 26C39 26.7101 38.4179 27.2857 37.7 27.2857H14.3C13.5821 27.2857 13 26.7101 13 26C13 25.29 13.5821 24.7143 14.3 24.7143ZM14.3 32.4286H26C26.7179 32.4286 27.3 33.0042 27.3 33.7143C27.3 34.4243 26.7179 35 26 35H14.3C13.5821 35 13 34.4243 13 33.7143C13 33.0042 13.5821 32.4286 14.3 32.4286Z"
                  fill="currentColor" />
              </svg>
            </drawer-opener>
          </div>

        </div>
      </div>
    </header>
  </sticky-header>

  <!-- Desktop Additional Drawer (right side) -->
  <div class="theme-drawer drawer-additional" data-position="right">
    <div class="drawer-headings">
      <a class="header-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?>">
        <?php if (has_custom_logo()):
          the_custom_logo();
        else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-white.jpg"
            alt="<?php bloginfo('name'); ?>" width="189" height="32" loading="lazy">
        <?php endif; ?>
      </a>
      <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-additional">
        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
            fill="currentColor" />
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
            fill="currentColor" />
        </svg>
      </drawer-opener>
    </div>
    <div class="drawer-content">

      <div class="drawer-block drawer-block-contact">
        <div class="drawer-heading text text-18"><?php esc_html_e('Quick Contact', 'digitalgrowth'); ?></div>
        <ul class="drawer-additional-menu list-unstyled flex-direction-column">
          <li class="nav-item">
            <a class="menu-link" href="tel:<?php echo esc_attr(get_theme_mod('phone_number', '+01234567890')); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
              </svg>
              <?php echo esc_html(get_theme_mod('phone_number', '+01234567890')); ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="menu-link"
              href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', get_option('admin_email'))); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
              </svg>
              <?php echo esc_html(get_theme_mod('contact_email', get_option('admin_email'))); ?>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- END Header -->
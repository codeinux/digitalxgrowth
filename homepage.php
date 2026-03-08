<?php
/**
 * Template Name: Homepage
 *
 * @package digitalgrowth
 */

get_header();
?>

<main>

  <!-- =============================================
       1. HERO BANNER + CONTACT FORM
  ============================================= -->
  <div class="hero-banner section-contact-form">
    <div class="container-fluid">
      <div class="row">
        <!-- Hero Content -->
        <div class="col-lg-6 col-12">
          <div class="content section-headings">
            <div class="subheading text-20 subheading-bg" data-aos="fade-down">
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                fill="none">
                <g clip-path="url(#clip-star1)">
                  <path
                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                    fill="CurrentColor" />
                </g>
                <defs>
                  <clipPath id="clip-star1">
                    <rect width="14" height="14" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              <span><?php esc_html_e('Expert Seo', 'digitalgrowth'); ?></span>
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                fill="none">
                <g clip-path="url(#clip-star2)">
                  <path
                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                    fill="CurrentColor" />
                </g>
                <defs>
                  <clipPath id="clip-star2">
                    <rect width="14" height="14" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            <h1 class="heading text-80 fw-700" data-aos="fade-down" data-aos-delay="100">
              <?php esc_html_e('Hiding in the', 'digitalgrowth'); ?>
              <span class="decorated-text"><span><?php esc_html_e('shadows', 'digitalgrowth'); ?></span></span>
              <?php esc_html_e('of Google?', 'digitalgrowth'); ?>
            </h1>
            <h2 class="heading text-32 fw-400" data-aos="fade-up" data-aos-delay="120">
              <?php esc_html_e("Let's turn the lights on with smart SEO.", 'digitalgrowth'); ?>
            </h2>
            <div class="text text-18" data-aos="fade-up" data-aos-delay="150">
              <?php esc_html_e('Transform your business with AI-powered digital marketing that drives growth and visibility. Each quarter, we partner with a limited number of businesses ready to scale. Let\'s connect and see if your brand makes the cut.', 'digitalgrowth'); ?>
            </div>
            <div class="hero-button-wrap buttons" data-aos="fade-down" data-aos-delay="200">
              <a href="<?php echo esc_url(home_url('/services/')); ?>" class="button button--primary"
                aria-label="Get Started">
                <?php esc_html_e('Get Started', 'digitalgrowth'); ?>
                <span class="svg-wrapper">
                  <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                      fill="currentColor"></path>
                  </svg>
                </span>
              </a>
              <a href="tel:<?php echo esc_attr(get_theme_mod('phone_number', '+919110221774')); ?>"
                class="hero-phone-call" aria-label="Phone number" data-aos="fade-up" data-aos-delay="50">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                  <path
                    d="M23.8337 3.67188C28.2097 3.67188 32.4066 5.41026 35.5009 8.50461C38.5953 11.599 40.3337 15.7958 40.3337 20.1719M23.8337 11.0052C26.2648 11.0052 28.5964 11.971 30.3155 13.6901C32.0346 15.4091 33.0003 17.7407 33.0003 20.1719M25.359 30.3799C25.7376 30.5538 26.1642 30.5935 26.5684 30.4925C26.9727 30.3915 27.3304 30.1559 27.5828 29.8244L28.2337 28.9719C28.5752 28.5165 29.0181 28.1469 29.5272 27.8923C30.0363 27.6377 30.5978 27.5052 31.167 27.5052H36.667C37.6395 27.5052 38.5721 27.8915 39.2597 28.5791C39.9473 29.2668 40.3337 30.1994 40.3337 31.1719V36.6719C40.3337 37.6443 39.9473 38.577 39.2597 39.2646C38.5721 39.9522 37.6395 40.3385 36.667 40.3385C27.9148 40.3385 19.5212 36.8618 13.3325 30.6731C7.14377 24.4844 3.66699 16.0907 3.66699 7.33854C3.66699 6.36608 4.0533 5.43345 4.74093 4.74582C5.42857 4.05818 6.3612 3.67188 7.33366 3.67188H12.8337C13.8061 3.67188 14.7387 4.05818 15.4264 4.74582C16.114 5.43345 16.5003 6.36608 16.5003 7.33854V12.8385C16.5003 13.4078 16.3678 13.9692 16.1132 14.4783C15.8587 14.9875 15.489 15.4303 15.0337 15.7719L14.1757 16.4154C13.8391 16.6724 13.6019 17.0379 13.5043 17.45C13.4067 17.8621 13.4548 18.2952 13.6403 18.6759C16.1459 23.765 20.2668 27.8807 25.359 30.3799Z"
                    stroke="CurrentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="hero-call">
                  <div class="text text-14"><?php esc_html_e('Need help?', 'digitalgrowth'); ?></div>
                  <div class="text text-16"><?php echo esc_html(get_theme_mod('phone_number', '+91 9110221774')); ?>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Hero Contact Form -->
        <div class="col-12 col-lg-6 col-contact-form">
          <div class="contact-form-wrap radius18">
            <div class="contact-form-headings">
              <h2 class="heading text-32" data-aos="fade-up">
                <?php esc_html_e('Make an Appointment', 'digitalgrowth'); ?>
              </h2>
              <p class="text text-16" data-aos="fade-up">
                <?php esc_html_e("Feel free to contact with us, we don't spam your email", 'digitalgrowth'); ?>
              </p>
            </div>
            <form id="dg-contact-form" action="" method="post" class="form contact-form" data-aos="fade-up">
              <?php wp_nonce_field('digitalgrowth_contact_nonce', 'nonce'); ?>
              <input type="hidden" name="action" value="digitalgrowth_contact">
              <div class="field">
                <label for="ContactForm-name"
                  class="visually-hidden"><?php esc_html_e('Your Name', 'digitalgrowth'); ?></label>
                <input id="ContactForm-name" class="text-16" type="text"
                  placeholder="<?php esc_attr_e('Your Name *', 'digitalgrowth'); ?>" name="name" required>
              </div>
              <div class="field">
                <label for="ContactForm-email"
                  class="visually-hidden"><?php esc_html_e('Business Email', 'digitalgrowth'); ?></label>
                <input id="ContactForm-email" class="text-16" type="email"
                  placeholder="<?php esc_attr_e('Business Email *', 'digitalgrowth'); ?>" name="email" required>
              </div>
              <div class="field">
                <label for="ContactForm-phone"
                  class="visually-hidden"><?php esc_html_e('Phone', 'digitalgrowth'); ?></label>
                <input id="ContactForm-phone" class="text-16" type="tel"
                  placeholder="<?php esc_attr_e('Phone *', 'digitalgrowth'); ?>" name="phone" required>
              </div>
              <div class="field">
                <label for="ContactForm-service"
                  class="visually-hidden"><?php esc_html_e('Service Type', 'digitalgrowth'); ?></label>
                <input id="ContactForm-service" class="text-16" type="text"
                  placeholder="<?php esc_attr_e('Service Type *', 'digitalgrowth'); ?>" name="service" required>
              </div>
              <div class="field">
                <label for="ContactForm-body"
                  class="visually-hidden"><?php esc_html_e('Your Comment', 'digitalgrowth'); ?></label>
                <textarea id="ContactForm-body" class="text-16" rows="4"
                  placeholder="<?php esc_attr_e('Your Comment *', 'digitalgrowth'); ?>" name="message"
                  required></textarea>
              </div>
              <div class="form-message" id="dg-form-message" style="display:none;padding:10px 0;font-weight:600;"></div>
              <div class="form-button">
                <button type="submit" class="button button--secondary" aria-label="Send Message">
                  <?php esc_html_e('Send Message', 'digitalgrowth'); ?>
                  <span class="svg-wrapper">
                    <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                        fill="currentColor"></path>
                    </svg>
                  </span>
                </button>
              </div>
            </form>
            <script>
              (function () {
                document.addEventListener('DOMContentLoaded', function () {
                  var form = document.getElementById('dg-contact-form');
                  var msg = document.getElementById('dg-form-message');
                  if (!form) return;
                  form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    var data = new FormData(form);
                    fetch(digitalgrowth_ajax.ajax_url, { method: 'POST', body: data })
                      .then(function (r) { return r.json(); })
                      .then(function (res) {
                        msg.style.display = 'block';
                        if (res.success) {
                          msg.style.color = '#22c55e';
                          msg.textContent = res.data.message;
                          form.reset();
                        } else {
                          msg.style.color = '#ef4444';
                          msg.textContent = res.data.message;
                        }
                      });
                  });
                });
              })();
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- =============================================
       2. IMAGE TEXT — ABOUT
  ============================================= -->
  <div class="image-text mt-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-12">
          <div class="media-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/savitha.jpg" width="992" height="863"
              loading="lazy" alt="<?php esc_attr_e('About Digital Growth', 'digitalgrowth'); ?>" data-aos="zoom-in-up">
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="content section-headings">
            <div class="subheading text-20 subheading-bg" data-aos="fade-up">
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                fill="none">
                <g clip-path="url(#clip-star3)">
                  <path
                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                    fill="CurrentColor" />
                </g>
                <defs>
                  <clipPath id="clip-star3">
                    <rect width="14" height="14" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              <span><?php esc_html_e('About Me', 'digitalgrowth'); ?></span>
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                fill="none">
                <g clip-path="url(#clip-star4)">
                  <path
                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                    fill="CurrentColor" />
                </g>
                <defs>
                  <clipPath id="clip-star4">
                    <rect width="14" height="14" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            <h2 class="heading text-50" data-aos="fade-up" data-aos-delay="50">
              <?php esc_html_e('Redesigning business for solutions', 'digitalgrowth'); ?>
            </h2>
            <div class="text text-18" data-aos="fade-up" data-aos-delay="80">
              <?php esc_html_e("Hello, I'm Savitha, an SEO consultant from Bangalore, India. Since 2018, I've been helping local and international brands improve their Google rankings and grow their online presence. I enjoy creating simple, effective SEO strategies that help businesses get seen by the right audience and achieve real results.", 'digitalgrowth'); ?>
            </div>
            <ul class="list-block list-unstyled">
              <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="100">

                <h3 class="title text text-22 fw-600"><?php esc_html_e('Ambition', 'digitalgrowth'); ?></h3>
                <div class="text text-16">
                  <?php esc_html_e('Businesses of all sizes thrive with our business solutions.', 'digitalgrowth'); ?>
                </div>
              </li>
              <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="200">

                <h3 class="title text text-22 fw-600"><?php esc_html_e('Purpose', 'digitalgrowth'); ?></h3>
                <div class="text text-16">
                  <?php esc_html_e('Businesses of all sizes thrive with our business solutions.', 'digitalgrowth'); ?>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- =============================================
       3. OUR SERVICES
  ============================================= -->
  <div class="our-services section-padding mt-100">
    <div class="container">
      <div class="section-headings section-headings-horizontal">
        <div class="section-headings-left">
          <div class="subheading text-20 subheading-bg" data-aos="fade-right" data-aos-delay="10">
            <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
              fill="none">
              <g clip-path="url(#clip-sv1)">
                <path
                  d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                  fill="CurrentColor" />
              </g>
              <defs>
                <clipPath id="clip-sv1">
                  <rect width="14" height="14" fill="white" />
                </clipPath>
              </defs>
            </svg>
            <span><?php esc_html_e('Our Services', 'digitalgrowth'); ?></span>
            <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
              fill="none">
              <g clip-path="url(#clip-sv2)">
                <path
                  d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                  fill="CurrentColor" />
              </g>
              <defs>
                <clipPath id="clip-sv2">
                  <rect width="14" height="14" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>
          <h2 class="heading text-50" data-aos="fade-right" data-aos-delay="20">
            <?php esc_html_e('Solutions tailored to your business needs', 'digitalgrowth'); ?>
          </h2>
        </div>
        <div class="section-headings-right buttons" data-aos="fade-left" data-aos-delay="20">
          <a href="<?php echo esc_url(home_url('/services/')); ?>" class="button button--secondary"
            aria-label="More Services">
            <?php esc_html_e('More Services', 'digitalgrowth'); ?>
            <span class="svg-wrapper"><svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                  fill="currentColor" />
              </svg></span>
          </a>
        </div>
      </div>

      <div class="section-content" data-aos="fade-up">
        <div class="container">
          <service-slider class="service-slider">
            <div class="swiper">
              <div class="swiper-wrapper">

                <!-- Slide 1: SEO Audit -->
                <div class="swiper-slide">
                  <a href="<?php echo esc_url(home_url('/service-details/')); ?>" class="card-service radius18"
                    aria-label="SEO Audit Services">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/service/s3.jpg" alt="SEO Audit"
                      width="1000" height="596" loading="lazy">
                    <div class="card-service-content-absolute">
                      <div class="card-service-content">
                        <div class="card-working-process">
                          <h2 class="heading text-24 fw-500">
                            <?php esc_html_e('SEO Audit Services', 'digitalgrowth'); ?>
                          </h2>
                          <div class="card-icon-text card-icon-text-horizontal">
                            <div class="content">
                              <p class="text text-16">
                                <?php esc_html_e('We offer this as a standalone service. Whether you\'re a business owner or SEO professional, we\'ve got you covered.', 'digitalgrowth'); ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- Slide 2: Competitor Analysis -->
                <div class="swiper-slide">
                  <a href="<?php echo esc_url(home_url('/service-details/')); ?>" class="card-service radius18"
                    aria-label="Competitor Analysis">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/service/s4.jpg"
                      alt="Competitor Analysis" width="1000" height="596" loading="lazy">
                    <div class="card-service-content-absolute">
                      <div class="card-service-content">
                        <div class="card-working-process">
                          <h2 class="heading text-24 fw-500">
                            <?php esc_html_e('Competitor Analysis Report', 'digitalgrowth'); ?>
                          </h2>
                          <div class="card-icon-text card-icon-text-horizontal">
                            <div class="content">
                              <p class="text text-16">
                                <?php esc_html_e('Know what\'s working for your competitors — and make it work even better for you.', 'digitalgrowth'); ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- Slide 3: Backlinks -->
                <div class="swiper-slide">
                  <a href="<?php echo esc_url(home_url('/service-details/')); ?>" class="card-service radius18"
                    aria-label="High-Authority Backlinks">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/service/s5.jpg" alt="Backlinks"
                      width="1000" height="596" loading="lazy">
                    <div class="card-service-content-absolute">
                      <div class="card-service-content">
                        <div class="card-working-process">
                          <h2 class="heading text-24 fw-500">
                            <?php esc_html_e('High-Authority Backlinks', 'digitalgrowth'); ?>
                          </h2>
                          <div class="card-icon-text card-icon-text-horizontal">
                            <div class="content">
                              <p class="text text-16">
                                <?php esc_html_e('Get premium backlinks from real, authoritative blogs in your niche. Hand-vetted publishers, genuine editorial placements.', 'digitalgrowth'); ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </service-slider>
        </div>
      </div>
    </div>
  </div>


  <!-- =============================================
       4. HOW WE WORK / 5 REASONS
  ============================================= -->
  <div class="testimonial how-we-work mt-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="section-headings section-headings-sticky">
            <div class="subheading text-20 subheading-bg" data-aos="fade-up">
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                fill="none">
                <g clip-path="url(#clip-hw1)">
                  <path
                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                    fill="CurrentColor" />
                </g>
                <defs>
                  <clipPath id="clip-hw1">
                    <rect width="14" height="14" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              <span><?php esc_html_e('How We Work', 'digitalgrowth'); ?></span>
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                fill="none">
                <g clip-path="url(#clip-hw2)">
                  <path
                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                    fill="CurrentColor" />
                </g>
                <defs>
                  <clipPath id="clip-hw2">
                    <rect width="14" height="14" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            <h2 class="heading text-50" data-aos="fade-up">
              <?php esc_html_e('5 Reasons to Work With Us', 'digitalgrowth'); ?>
            </h2>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="testimonial-card-inner card-working-process-inner">

            <?php
            $reasons = array(
              array(
                'title' => __('All-in-one SEO support', 'digitalgrowth'),
                'desc' => __('From keyword research to backlinks and reports — we handle everything so you don\'t have to.', 'digitalgrowth'),
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605"/>',
              ),
              array(
                'title' => __('No need for extra tools or writers', 'digitalgrowth'),
                'desc' => __('We use premium SEO tools and provide expert content writers for every project.', 'digitalgrowth'),
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>',
              ),
              array(
                'title' => __('Results that matter', 'digitalgrowth'),
                'desc' => __('We focus on leads, visibility, and conversions — not just rankings or traffic numbers.', 'digitalgrowth'),
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z"/>',
              ),
              array(
                'title' => __('Local + AI-powered SEO', 'digitalgrowth'),
                'desc' => __('Your business gets optimized for Google, ChatGPT, and local searches, keeping you ahead of the curve.', 'digitalgrowth'),
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09Z"/>',
              ),
              array(
                'title' => __('Transparent and flexible', 'digitalgrowth'),
                'desc' => __('No long-term contracts. Clear reporting. You always know what we\'re doing and why.', 'digitalgrowth'),
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>',
              ),
            );

            foreach ($reasons as $reason): ?>
              <div class="card-working-process">
                <h2 class="heading text-24 fw-500"><?php echo esc_html($reason['title']); ?></h2>
                <div class="card-icon-text card-icon-text-horizontal has-border">
                  <div class="svg-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                      stroke="currentColor">
                      <?php echo $reason['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </svg>
                  </div>
                  <div class="content">
                    <p class="text text-18"><?php echo esc_html($reason['desc']); ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- =============================================
       4.WHO CAN BENIFIT
  ============================================= -->

  <div class="our-services mt-100">
    <div class="container">
      <div class="row flex-row-reverse">
        <div class="col-lg-5 col-12">
          <div class="service-content-image height-100" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/service/secvice-contact.jpg"
              width="1000" height="929" loading="lazy" alt="<?php esc_attr_e('Service Image', 'digitalgrowth'); ?>">
          </div>
        </div>
        <div class="col-lg-7 col-12">
          <div class="service-content-left">
            <div class="section-headings headings-width">

              <h2 class="heading text-50" data-aos="fade-up" data-aos-delay="50">
                <?php esc_html_e('Who Can Benefit from SEO', 'digitalgrowth'); ?>
              </h2>
              <div class="service-list">
                <div class="row product-grid">
                  <div class="col-lg-6 col-12">
                    <div class="multicolumn-card" data-aos="fade-up" data-aos-delay="100">
                      <div class="card-icon">
                        <svg viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect width="70" height="70" rx="10" fill="white"></rect>
                          <g clip-path="url(#clip0_9088_8914)">
                            <path
                              d="M39.4445 26.2037C39.5971 26.3562 39.797 26.4325 39.9969 26.4325C40.1969 26.4325 40.3969 26.3562 40.5494 26.2037C40.8544 25.8986 40.8544 25.4039 40.5494 25.0987L40.5388 25.0882C40.2337 24.7831 39.739 24.7831 39.4339 25.0882C39.1288 25.3933 39.1288 25.8879 39.4339 26.1931L39.4445 26.2037Z"
                              fill="#20282D"></path>
                            <path
                              d="M52.0481 33.5938L54.7712 30.8707C54.9946 30.6473 55.0614 30.3112 54.9405 30.0193C54.8195 29.7273 54.5347 29.537 54.2187 29.537H48.5741C47.8363 26.5167 46.2877 23.7646 44.0741 21.5509C40.8574 18.3341 36.5805 16.5625 32.0313 16.5625C27.482 16.5625 23.2051 18.3341 19.9884 21.5509C16.7716 24.7677 15 29.0445 15 33.5938C15 38.143 16.7716 42.4199 19.9884 45.6366C20.9449 46.5932 21.9958 47.4209 23.1191 48.1132L20.7655 52.2714C20.6286 52.5133 20.6305 52.8097 20.7705 53.0497C20.9104 53.2898 21.1673 53.4375 21.4453 53.4375H25.4688C25.7502 53.4375 26.01 53.2861 26.1487 53.0411L27.8129 50.1009C29.175 50.4464 30.5894 50.625 32.0313 50.625C33.4731 50.625 34.8875 50.4464 36.2496 50.1009L37.9138 53.0411C38.0525 53.2861 38.3123 53.4375 38.5938 53.4375H42.6172C42.8952 53.4375 43.1521 53.2898 43.2921 53.0498C43.4321 52.8097 43.434 52.5133 43.2971 52.2715L40.9434 48.1133C42.0668 47.4209 43.1177 46.5933 44.0742 45.6367C46.287 43.4239 47.8363 40.6706 48.5741 37.6505H54.2188C54.5347 37.6505 54.8196 37.4602 54.9406 37.1683C55.0615 36.8764 54.9946 36.5403 54.7713 36.3169L52.0481 33.5938ZM50.6196 32.8125H45.1673L46.8803 31.0995H52.3327L50.6196 32.8125ZM25.0132 51.875H22.7852L24.4857 48.8709C25.0693 49.1598 25.6684 49.4153 26.2814 49.6345L25.0132 51.875ZM41.2773 51.875H39.0493L37.7811 49.6345C38.3941 49.4153 38.9932 49.1598 39.5768 48.8709L41.2773 51.875ZM42.9693 44.5318C41.9373 45.5638 40.7846 46.4312 39.5438 47.1226C39.5285 47.13 39.5131 47.137 39.498 47.1455C39.4885 47.1509 39.4799 47.1571 39.4708 47.1628C38.519 47.6864 37.516 48.1068 36.4753 48.4173C36.4344 48.4254 36.3939 48.4374 36.354 48.4524C34.967 48.8538 33.5152 49.0625 32.0313 49.0625C30.5473 49.0625 29.0955 48.8538 27.7085 48.4525C27.6685 48.4375 27.628 48.4255 27.587 48.4173C26.5464 48.1069 25.5434 47.6865 24.5917 47.1629C24.5826 47.1572 24.574 47.151 24.5645 47.1456C24.5495 47.1371 24.5341 47.1301 24.5188 47.1227C23.278 46.4313 22.1253 45.5639 21.0933 44.5318C18.1716 41.6102 16.5625 37.7256 16.5625 33.5938C16.5625 29.4619 18.1716 25.5773 21.0932 22.6557C24.0148 19.7341 27.8994 18.125 32.0313 18.125C36.1631 18.125 40.0477 19.7341 42.9693 22.6557C44.8891 24.5755 46.2583 26.9404 46.9613 29.537H46.5568C46.3496 29.537 46.1509 29.6194 46.0044 29.7659L43.9309 31.8394C43.7216 30.419 43.2624 29.0379 42.569 27.7819C42.3605 27.4041 41.8852 27.2671 41.5074 27.4755C41.1297 27.6841 40.9926 28.1594 41.2011 28.5371C41.9427 29.8804 42.357 31.3409 42.4631 32.8126H39.0184C38.8445 31.2301 38.1452 29.7641 37.0031 28.622C35.6751 27.2939 33.9094 26.5625 32.0313 26.5625C30.1531 26.5625 28.3874 27.2939 27.0595 28.6219C25.7314 29.95 25 31.7156 25 33.5938C25 35.4719 25.7314 37.2376 27.0594 38.5655C28.3874 39.8936 30.1531 40.625 32.0313 40.625C33.9094 40.625 35.6751 39.8936 37.003 38.5656C38.1451 37.4236 38.8444 35.9576 39.0183 34.375H42.4596C42.2733 36.8172 41.2427 39.1872 39.4338 40.9963C37.4565 42.9736 34.8275 44.0625 32.0313 44.0625C29.235 44.0625 26.606 42.9736 24.6288 40.9963C22.6514 39.019 21.5625 36.3901 21.5625 33.5938C21.5625 30.7974 22.6514 28.1685 24.6288 26.1912C27.9086 22.9114 33.032 22.1847 37.088 24.424C37.4656 24.6324 37.9409 24.4954 38.1495 24.1177C38.358 23.7399 38.2209 23.2647 37.8432 23.0561C35.6053 21.8205 32.9702 21.3281 30.4236 21.6698C27.792 22.0228 25.406 23.2042 23.5239 25.0864C21.2515 27.3588 20 30.3801 20 33.5938C20 36.8074 21.2515 39.8288 23.5238 42.1011C25.7963 44.3735 28.8176 45.625 32.0313 45.625C35.2449 45.625 38.2663 44.3735 40.5386 42.1012C42.3851 40.2548 43.5565 37.9234 43.9336 35.351L46.0043 37.4217C46.1508 37.5682 46.3495 37.6505 46.5567 37.6505H46.9611C46.258 40.247 44.8883 42.6128 42.9693 44.5318ZM34.5828 32.1206C34.3671 31.7469 33.8893 31.6189 33.5156 31.8347L31.6406 32.9172C31.3989 33.0567 31.25 33.3146 31.25 33.5938C31.25 33.8729 31.3989 34.1308 31.6406 34.2703L33.5156 35.3528C33.6387 35.4238 33.773 35.4576 33.9055 35.4576C34.1755 35.4576 34.4381 35.3175 34.5828 35.0669C34.7096 34.8473 34.7169 34.5921 34.6262 34.375H37.4443C37.2788 35.5393 36.7446 36.6144 35.8982 37.4607C34.8653 38.4937 33.492 39.0625 32.0313 39.0625C30.5705 39.0625 29.1972 38.4937 28.1642 37.4607C27.1313 36.4278 26.5625 35.0545 26.5625 33.5938C26.5625 32.133 27.1313 30.7597 28.1643 29.7267C29.1972 28.6938 30.5705 28.125 32.0313 28.125C33.492 28.125 34.8653 28.6938 35.8983 29.7268C36.7446 30.5731 37.2788 31.6482 37.4444 32.8125H34.6263C34.7169 32.5953 34.7096 32.3402 34.5828 32.1206ZM46.8803 36.088L45.1673 34.375H50.6196L52.3327 36.088H46.8803Z"
                              fill="#20282D"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9088_8914">
                              <rect width="40" height="40" fill="white" transform="translate(15 15)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <h2 class="heading text-24"><?php esc_html_e('Local business owners', 'digitalgrowth'); ?></h2>
                      <div class="text text-16">
                        <?php esc_html_e('Restaurants, salons, clinics, or boutiques — anyone who wants more local customers.', 'digitalgrowth'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="multicolumn-card" data-aos="fade-up" data-aos-delay="100">
                      <div class="card-icon">
                        <svg viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect width="70" height="70" rx="10" fill="white"></rect>
                          <g clip-path="url(#clip0_9088_8924)">
                            <path
                              d="M35 27.0312C30.606 27.0312 27.0312 30.606 27.0312 35C27.0312 39.394 30.606 42.9688 35 42.9688C39.394 42.9688 42.9688 39.394 42.9688 35C42.9688 30.606 39.394 27.0312 35 27.0312ZM35 41.4062C31.4676 41.4062 28.5938 38.5324 28.5938 35C28.5938 31.4676 31.4676 28.5938 35 28.5938C38.5324 28.5938 41.4062 31.4676 41.4062 35C41.4062 38.5324 38.5324 41.4062 35 41.4062Z"
                              fill="#1C2539"></path>
                            <path
                              d="M34.9998 34.2784C34.4895 34.2784 34.0742 33.9339 34.0742 33.5105C34.0742 33.0872 34.4895 32.7427 34.9998 32.7427C35.5102 32.7427 35.9255 33.0872 35.9255 33.5105C35.9255 33.942 36.2753 34.2918 36.7067 34.2918C37.1381 34.2918 37.488 33.942 37.488 33.5105C37.488 32.4812 36.7714 31.6062 35.7811 31.2986V31.2578C35.7811 30.8263 35.4313 30.4766 34.9998 30.4766C34.5684 30.4766 34.2186 30.8263 34.2186 31.2578V31.2986C33.2284 31.6062 32.5117 32.4812 32.5117 33.5105C32.5117 34.7955 33.6279 35.8409 34.9998 35.8409C35.5102 35.8409 35.9255 36.1853 35.9255 36.6087C35.9255 37.032 35.5103 37.3765 34.9998 37.3765C34.4894 37.3765 34.0742 37.032 34.0742 36.6087C34.0742 36.1772 33.7244 35.8274 33.293 35.8274C32.8616 35.8274 32.5117 36.1772 32.5117 36.6087C32.5117 37.6384 33.2287 38.5136 34.2195 38.8209C34.2296 39.2436 34.5748 39.5833 34.9998 39.5833C35.4249 39.5833 35.77 39.2436 35.7802 38.8209C36.7709 38.5136 37.488 37.6384 37.488 36.6087C37.488 35.3237 36.3718 34.2784 34.9998 34.2784Z"
                              fill="#1C2539"></path>
                            <path
                              d="M50.1774 21.7288L50.1619 21.7132C49.8567 21.4081 49.3622 21.4081 49.0569 21.7132C48.7519 22.0183 48.7519 22.5129 49.0569 22.8181L49.0726 22.8337C49.2251 22.9863 49.4251 23.0626 49.625 23.0626C49.8249 23.0626 50.0248 22.9863 50.1774 22.8337C50.4825 22.5287 50.4825 22.034 50.1774 21.7288Z"
                              fill="#1C2539"></path>
                            <path
                              d="M20.2593 46.4008C20.1141 46.2554 19.9125 46.1719 19.707 46.1719C19.5016 46.1719 19.3 46.2555 19.1547 46.4008C19.0094 46.5461 18.9258 46.7477 18.9258 46.9531C18.9258 47.1586 19.0093 47.3602 19.1547 47.5055C19.3001 47.6508 19.5016 47.7344 19.707 47.7344C19.9125 47.7344 20.1141 47.6508 20.2593 47.5055C20.4046 47.3602 20.4883 47.1586 20.4883 46.9531C20.4883 46.7477 20.4047 46.5461 20.2593 46.4008Z"
                              fill="#1C2539"></path>
                            <path
                              d="M54.9973 34.8982C54.9752 31.2386 53.9524 27.6184 52.0317 24.5065C51.8052 24.1393 51.3238 24.0253 50.9566 24.252C50.5894 24.4786 50.4755 24.9599 50.702 25.3271C52.0945 27.5834 52.9512 30.0347 53.2916 32.5243C52.997 32.1788 52.6552 31.7909 52.2684 31.372C50.785 29.7656 48.4005 27.4532 45.4647 25.5604C45.1936 25.3856 44.8552 25.4 44.6039 25.5696L43.1139 26.4299C41.7634 25.1499 40.1406 24.2121 38.364 23.6852V21.9129C38.364 21.4814 38.0141 21.1316 37.5827 21.1316H32.4172C31.9858 21.1316 31.6359 21.4814 31.6359 21.9129V23.6852C29.8593 24.212 28.2366 25.1498 26.886 26.4299L25.4788 25.6174C25.2237 25.3892 24.8388 25.3479 24.5366 25.5419C21.5888 27.4337 19.2089 29.7383 17.7315 31.3385C17.3441 31.7581 17.0035 32.1452 16.7109 32.4893C17.2448 28.6068 19.0252 24.8991 21.9627 21.9617C28.0354 15.889 37.3733 14.7928 44.6706 19.2961C45.0377 19.5226 45.5191 19.4087 45.7458 19.0415C45.9724 18.6743 45.8584 18.193 45.4912 17.9663C41.7249 15.6422 37.2141 14.6313 32.7907 15.1205C30.5803 15.3648 28.4446 15.9689 26.443 16.9161C24.3718 17.8962 22.4927 19.222 20.858 20.8567C17.781 23.9337 15.8268 27.8301 15.2064 32.1248C15.074 33.0413 15.007 33.9661 15.0037 34.8906C15.0001 34.927 15 34.9616 15 34.9988C15 35.0414 15.0001 35.0796 15.0047 35.1195C15.0291 38.3063 15.8087 41.4812 17.2852 44.2934C17.4249 44.5595 17.6966 44.7116 17.9776 44.7116C18.0999 44.7116 18.2241 44.6827 18.3401 44.6219C18.7221 44.4213 18.8691 43.949 18.6686 43.567C17.6452 41.618 16.998 39.5584 16.7116 37.477C17.0055 37.8216 17.3463 38.2084 17.7316 38.6257C19.215 40.2322 21.5995 42.5445 24.5353 44.4374C24.6663 44.5218 24.813 44.5621 24.9579 44.562C25.1048 44.562 25.2492 44.5194 25.3745 44.4406L26.8861 43.5678C28.2366 44.8479 29.8594 45.7856 31.636 46.3125V48.0848C31.636 48.5163 31.9859 48.866 32.4173 48.866H37.5828C38.0142 48.866 38.3641 48.5163 38.3641 48.0848V46.3125C40.1407 45.7856 41.7634 44.8479 43.114 43.5678L44.5187 44.3788C44.6638 44.5098 44.8514 44.5799 45.0422 44.5799C45.1866 44.5799 45.3328 44.5398 45.4634 44.456C48.4113 42.5642 50.7912 40.2596 52.2685 38.6593C52.6559 38.2397 52.9965 37.8526 53.2891 37.5085C52.7549 41.382 50.9807 45.0925 48.0372 48.0359C42.2243 53.8488 33.1612 55.1066 25.9976 51.0945C25.6213 50.8839 25.1452 51.018 24.9342 51.3945C24.7234 51.7709 24.8577 52.247 25.2341 52.4578C28.209 54.1239 31.6112 54.9964 35.0288 54.9964C35.892 54.9964 36.7563 54.9407 37.6149 54.8281C42.0122 54.2513 45.9983 52.2847 49.1422 49.1409C50.777 47.506 52.1028 45.6269 53.0829 43.5556C54.0301 41.5538 54.6341 39.4181 54.8784 37.2076C54.9565 36.5011 54.9959 35.7924 54.9982 35.0849C55 35.0564 55 35.0284 55 34.9988C55 34.9634 54.9999 34.931 54.9973 34.8982ZM16.7149 34.9893C17.4036 34.033 19.4798 31.4644 22.4433 29.0134L21.6993 30.302C21.5957 30.4814 21.5676 30.6946 21.6213 30.8948C21.6749 31.0949 21.8058 31.2656 21.9852 31.3692L23.5205 32.2556C23.307 33.1516 23.199 34.0716 23.199 34.9988C23.199 35.926 23.307 36.846 23.5205 37.7421L21.9852 38.6285C21.8058 38.7321 21.6748 38.9027 21.6213 39.1029C21.5676 39.3031 21.5957 39.5163 21.6993 39.6957L22.4101 40.9269C19.5066 38.5061 17.4269 35.9595 16.7149 34.9893ZM44.7553 42.7113L43.3766 41.9152C43.0644 41.7349 42.6688 41.792 42.42 42.0534C41.0534 43.4903 39.3176 44.4932 37.4003 44.9538C37.0491 45.0381 36.8016 45.3523 36.8016 45.7134V47.3035H33.1984V45.7134C33.1984 45.3523 32.9509 45.0381 32.5997 44.9538C30.6824 44.4932 28.9466 43.4904 27.58 42.0534C27.3312 41.792 26.9358 41.7348 26.6233 41.9152L25.2446 42.7113L23.443 39.5909L24.8198 38.7961C25.1323 38.6157 25.2805 38.2448 25.1786 37.8987C24.9018 36.9596 24.7615 35.984 24.7615 34.9988C24.7615 34.0137 24.9018 33.038 25.1786 32.099C25.2806 31.7529 25.1323 31.382 24.8198 31.2016L23.443 30.4067L25.2446 27.2864L26.6233 28.0824C26.9358 28.2629 27.3313 28.2058 27.58 27.9442C28.9466 26.5074 30.6824 25.5045 32.5997 25.0439C32.9509 24.9595 33.1984 24.6454 33.1984 24.2842V22.6941H36.8015V24.2842C36.8015 24.6454 37.0491 24.9595 37.4002 25.0439C39.3175 25.5045 41.0533 26.5073 42.4199 27.9442C42.6688 28.2057 43.0641 28.2629 43.3766 28.0824L44.7553 27.2864L46.5569 30.4067L45.1801 31.2016C44.8676 31.382 44.7194 31.7529 44.8213 32.099C45.0981 33.0381 45.2384 34.0137 45.2384 34.9988C45.2384 35.984 45.0981 36.9597 44.8213 37.8987C44.7193 38.2448 44.8676 38.6157 45.1801 38.7961L46.5569 39.5909L44.7553 42.7113ZM47.5565 40.9847L48.3007 39.6956C48.4043 39.5162 48.4324 39.303 48.3787 39.1028C48.3251 38.9027 48.1942 38.732 48.0148 38.6284L46.4795 37.742C46.693 36.8459 46.801 35.9259 46.801 34.9988C46.801 34.0716 46.693 33.1516 46.4795 32.2555L48.0148 31.3691C48.1942 31.2655 48.3252 31.0949 48.3787 30.8947C48.4324 30.6945 48.4043 30.4813 48.3007 30.3019L47.5899 29.0708C50.4934 31.4915 52.5731 34.0381 53.2852 35.0083C52.5964 35.9647 50.5202 38.5335 47.5565 40.9847Z"
                              fill="#1C2539"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9088_8924">
                              <rect width="40" height="40" fill="white" transform="translate(15 15)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <h2 class="heading text-24"><?php esc_html_e('Service-based professionals', 'digitalgrowth'); ?>
                      </h2>
                      <div class="text text-16">
                        <?php esc_html_e('Consultants, trainers, designers, agencies, or freelancers who want steady client leads.', 'digitalgrowth'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="multicolumn-card" data-aos="fade-up" data-aos-delay="200">
                      <div class="card-icon">
                        <svg viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect width="70" height="70" rx="10" fill="white"></rect>
                          <g clip-path="url(#clip0_9088_8945)">
                            <path
                              d="M24.8815 28.0246C24.8815 27.5897 25.2341 27.237 25.6691 27.237C26.1041 27.237 26.4567 27.5896 26.4567 28.0246C26.4567 28.4596 26.1041 28.8122 25.6691 28.8122C25.2341 28.8122 24.8815 28.4595 24.8815 28.0246ZM49.1647 38.5557L40.3842 37.7579L37.9433 44.6052H42.2836C42.7185 44.6052 43.0711 44.9578 43.0711 45.3927V47.7551H44.6461C45.0809 47.7551 45.4336 48.1078 45.4336 48.5426V53.4251H45.8273C46.2622 53.4251 46.6148 53.7777 46.6148 54.2126C46.6148 54.6474 46.2622 55.0001 45.8273 55.0001H24.565C24.1302 55.0001 23.7775 54.6474 23.7775 54.2126C23.7775 53.7777 24.1302 53.4251 24.565 53.4251H24.9588V48.5426C24.9588 48.1078 25.3114 47.7551 25.7463 47.7551H27.3212V45.3927C27.3212 44.9578 27.6739 44.6052 28.1087 44.6052H32.6204L29.6215 35.4017L20.4558 31.7982C19.9565 31.6522 19.7029 30.8291 20.3306 30.3949L22.2395 29.216C22.2403 29.216 22.2411 29.216 22.2411 29.2151C23.1182 28.6749 23.9442 30.016 23.0671 30.5562L22.4971 30.9082L30.5437 34.0717C30.7626 34.1583 30.9311 34.3362 31.0043 34.5607L34.2773 44.6052H36.2716L39.1052 36.6538C39.225 36.3183 39.5628 36.1017 39.9187 36.134L47.755 36.8459L43.3191 29.5222C43.1947 29.3167 43.1719 29.06 43.2569 28.8348L46.362 20.6574L38.2295 22.9231C37.987 22.9901 37.7169 22.9342 37.5216 22.7751L30.865 17.3602L30.3499 25.6675C30.3342 25.9226 30.1956 26.1549 29.9782 26.2889L29.0977 26.833C28.2048 27.3844 27.3772 26.044 28.2701 25.4926L28.8032 25.1635L29.3876 15.734C29.4347 15.1529 30.1435 14.7566 30.6704 15.1718L38.1996 21.2961L47.44 18.7226C48.1288 18.5747 48.6165 19.1843 48.3874 19.7612L44.8657 29.0347L49.9096 37.364C50.2779 37.8709 49.8207 38.6024 49.1647 38.5557ZM29.8412 49.3301H26.5337V53.4251H29.8412V49.3301ZM38.9761 49.3301H31.4162V53.4251H38.9761V49.3301ZM40.5511 49.3301V53.4251H43.8586V49.3301H40.5511ZM41.4961 46.1802H28.8962V47.7551H41.4961V46.1802Z"
                              fill="#1C2539"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9088_8945">
                              <rect width="40" height="40" fill="white" transform="translate(15 15)"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <h2 class="heading text-24"><?php esc_html_e('E-commerce stores', 'digitalgrowth'); ?></h2>
                      <div class="text text-16">
                        <?php esc_html_e('Online sellers looking to increase visibility and sales without relying only on ads.', 'digitalgrowth'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="multicolumn-card" data-aos="fade-up" data-aos-delay="200">
                      <div class="card-icon">
                        <svg class="icon-32" width="40" height="40" viewBox="0 0 40 40" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_9105_30181)">
                            <path
                              d="M3.09175 23.9688C3.38125 24.0267 3.72285 23.8004 3.78143 23.5099C3.79042 23.4654 4.71851 18.9998 8.11233 14.1991C10.0981 11.3901 12.5294 9.01514 15.3386 7.14012C18.7079 4.89132 22.6379 3.35744 27.0271 2.57581L26.548 3.30502C26.1455 3.91761 27.091 4.61245 27.5272 3.94839L28.7319 2.11477C28.9001 1.79747 28.8439 1.52687 28.5631 1.30292L26.7263 0.1004C26.0926 -0.314863 25.4508 0.665803 26.0845 1.08068L26.6527 1.45274C22.1593 2.27421 18.1277 3.86387 14.6601 6.18422C11.7284 8.14586 9.19338 10.6292 7.12542 13.5653C3.60466 18.5641 2.67055 23.0895 2.63251 23.2797C2.56908 23.5968 2.77468 23.9051 3.09175 23.9688Z"
                              fill="CurrentColor"></path>
                            <path
                              d="M35.5768 30.0864V26.3214C35.5768 25.9977 35.3145 25.7355 34.9909 25.7355H31.1417V7.82806C31.1417 7.50442 30.8794 7.24219 30.5558 7.24219H23.0685C22.745 7.24219 22.4827 7.50442 22.4827 7.82806V13.9723H15.5752C15.2517 13.9723 14.9893 14.2345 14.9893 14.5581V20.715H8.08187C7.75831 20.715 7.496 20.9772 7.496 21.3009V26.604H0.588448C0.264892 26.604 0.00257874 26.8662 0.00257874 27.1899V33.0497C0.00257874 33.3733 0.264892 33.6356 0.588448 33.6356H2.66578C3.42327 33.6356 3.42327 32.4638 2.66578 32.4638H1.17432V27.7757H7.48983V32.4638H5.78385C5.02637 32.4638 5.02637 33.6356 5.78385 33.6356H17.74V39.4112C17.74 39.7349 18.0023 39.9971 18.3259 39.9971H34.9909C34.9944 39.9971 34.9979 39.9966 35.0014 39.9966C35.0083 39.9966 35.0152 39.9971 35.0221 39.9971C35.8983 39.9971 36.7612 39.765 37.5175 39.326C38.1727 38.9457 37.5846 37.9327 36.9293 38.3126C36.3514 38.648 35.692 38.8253 35.0221 38.8253C32.9249 38.8253 31.2187 37.1209 31.2187 35.0258C31.2187 32.9307 32.9249 31.2264 35.0221 31.2264C37.1194 31.2264 38.8256 32.9307 38.8256 35.0258C38.8256 35.4766 38.7474 35.9177 38.5931 36.3369C38.3314 37.0478 39.431 37.4525 39.6927 36.7417C39.8948 36.1925 39.9973 35.6152 39.9973 35.0258C39.9973 32.4722 38.0599 30.363 35.5768 30.0864ZM32.1489 30.9714H27.2443V29.5252H34.405V30.0944C33.5718 30.1979 32.8024 30.5077 32.1489 30.9714ZM26.0725 32.1432V33.5894H18.9118V32.1432H26.0725ZM18.9118 34.7611H26.0725V36.2074H18.9118V34.7611ZM27.2443 34.7611H30.0542C30.0289 35.2406 30.0762 35.7421 30.1901 36.2074H27.2443V34.7611ZM30.2596 33.5893H27.2443V32.1431H30.9728C30.6614 32.5786 30.4182 33.0656 30.2596 33.5893ZM34.405 28.3535H27.2443V26.9072H30.4803C30.5051 26.9104 30.5302 26.9126 30.5559 26.9126C30.5816 26.9126 30.6066 26.9104 30.6315 26.9072H34.4051V28.3535H34.405ZM29.9699 8.41393V25.7355H26.6584C26.3348 25.7355 26.0725 25.9977 26.0725 26.3214V28.9393V30.9714H23.6544V8.41393H29.9699ZM14.9832 32.4638H8.66774V21.8868H14.9832V32.4638ZM16.1611 32.4638V15.144H22.4766V30.9714H18.3259C18.0023 30.9714 17.74 31.2336 17.74 31.5572V32.4638L16.1611 32.4638ZM26.0725 38.8254H18.9118V37.3791H26.0725V38.8254ZM27.2443 38.8254V37.3791H30.6409C30.9399 37.9326 31.3412 38.4227 31.8187 38.8254H27.2443Z"
                              fill="CurrentColor"></path>
                            <path
                              d="M34.9994 38.1165C35.323 38.1165 35.5853 37.8543 35.5853 37.5307V37.3316C36.0858 37.1309 36.4641 36.6834 36.558 36.1243C36.6788 35.4046 36.2892 34.7549 35.5884 34.5076C35.2944 34.4038 34.842 34.3332 34.7475 34.1256C34.7005 34.0223 34.7709 33.9302 34.8721 33.8754C35.1535 33.7906 35.3323 33.9262 35.3517 33.9421C35.3434 33.9354 35.3394 33.9312 35.3394 33.9312C35.3394 33.9312 35.8569 34.2362 36.1505 33.9426C36.6973 33.3958 36.133 33.0691 36.133 33.0691C36.0213 32.9662 35.8307 32.8438 35.5853 32.7632V32.6306C35.5853 31.8731 34.4135 31.8731 34.4135 32.6306V32.7971C33.9923 32.9702 33.6833 33.3518 33.595 33.8212C33.5049 34.2998 33.6658 34.7669 34.015 35.0403C34.3307 35.2876 34.7703 35.4615 35.1985 35.6125C35.3027 35.6493 35.4373 35.7222 35.4024 35.9302C35.3811 36.0573 35.2713 36.2729 34.9956 36.2747C34.6716 36.2768 34.6026 36.2662 34.3712 36.1151C34.1003 35.9382 33.7373 36.0144 33.5604 36.2853C33.3834 36.5563 33.4596 36.9193 33.7305 37.0962C33.9871 37.2638 34.1945 37.354 34.4135 37.4007V37.5306C34.4135 37.8543 34.6759 38.1165 34.9994 38.1165Z"
                              fill="CurrentColor"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9105_30181">
                              <rect width="40" height="40" fill="CurrentColor"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <h2 class="heading text-24"><?php esc_html_e('Startups and small brands', 'digitalgrowth'); ?>
                      </h2>
                      <div class="text text-16">
                        <?php esc_html_e('New businesses that need to build trust, authority, and online presence quickly.', 'digitalgrowth'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="multicolumn-card" data-aos="fade-up" data-aos-delay="200">
                      <div class="card-icon">
                        <svg class="icon-32" width="40" height="40" viewBox="0 0 40 40" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_9105_30181)">
                            <path
                              d="M3.09175 23.9688C3.38125 24.0267 3.72285 23.8004 3.78143 23.5099C3.79042 23.4654 4.71851 18.9998 8.11233 14.1991C10.0981 11.3901 12.5294 9.01514 15.3386 7.14012C18.7079 4.89132 22.6379 3.35744 27.0271 2.57581L26.548 3.30502C26.1455 3.91761 27.091 4.61245 27.5272 3.94839L28.7319 2.11477C28.9001 1.79747 28.8439 1.52687 28.5631 1.30292L26.7263 0.1004C26.0926 -0.314863 25.4508 0.665803 26.0845 1.08068L26.6527 1.45274C22.1593 2.27421 18.1277 3.86387 14.6601 6.18422C11.7284 8.14586 9.19338 10.6292 7.12542 13.5653C3.60466 18.5641 2.67055 23.0895 2.63251 23.2797C2.56908 23.5968 2.77468 23.9051 3.09175 23.9688Z"
                              fill="CurrentColor"></path>
                            <path
                              d="M35.5768 30.0864V26.3214C35.5768 25.9977 35.3145 25.7355 34.9909 25.7355H31.1417V7.82806C31.1417 7.50442 30.8794 7.24219 30.5558 7.24219H23.0685C22.745 7.24219 22.4827 7.50442 22.4827 7.82806V13.9723H15.5752C15.2517 13.9723 14.9893 14.2345 14.9893 14.5581V20.715H8.08187C7.75831 20.715 7.496 20.9772 7.496 21.3009V26.604H0.588448C0.264892 26.604 0.00257874 26.8662 0.00257874 27.1899V33.0497C0.00257874 33.3733 0.264892 33.6356 0.588448 33.6356H2.66578C3.42327 33.6356 3.42327 32.4638 2.66578 32.4638H1.17432V27.7757H7.48983V32.4638H5.78385C5.02637 32.4638 5.02637 33.6356 5.78385 33.6356H17.74V39.4112C17.74 39.7349 18.0023 39.9971 18.3259 39.9971H34.9909C34.9944 39.9971 34.9979 39.9966 35.0014 39.9966C35.0083 39.9966 35.0152 39.9971 35.0221 39.9971C35.8983 39.9971 36.7612 39.765 37.5175 39.326C38.1727 38.9457 37.5846 37.9327 36.9293 38.3126C36.3514 38.648 35.692 38.8253 35.0221 38.8253C32.9249 38.8253 31.2187 37.1209 31.2187 35.0258C31.2187 32.9307 32.9249 31.2264 35.0221 31.2264C37.1194 31.2264 38.8256 32.9307 38.8256 35.0258C38.8256 35.4766 38.7474 35.9177 38.5931 36.3369C38.3314 37.0478 39.431 37.4525 39.6927 36.7417C39.8948 36.1925 39.9973 35.6152 39.9973 35.0258C39.9973 32.4722 38.0599 30.363 35.5768 30.0864ZM32.1489 30.9714H27.2443V29.5252H34.405V30.0944C33.5718 30.1979 32.8024 30.5077 32.1489 30.9714ZM26.0725 32.1432V33.5894H18.9118V32.1432H26.0725ZM18.9118 34.7611H26.0725V36.2074H18.9118V34.7611ZM27.2443 34.7611H30.0542C30.0289 35.2406 30.0762 35.7421 30.1901 36.2074H27.2443V34.7611ZM30.2596 33.5893H27.2443V32.1431H30.9728C30.6614 32.5786 30.4182 33.0656 30.2596 33.5893ZM34.405 28.3535H27.2443V26.9072H30.4803C30.5051 26.9104 30.5302 26.9126 30.5559 26.9126C30.5816 26.9126 30.6066 26.9104 30.6315 26.9072H34.4051V28.3535H34.405ZM29.9699 8.41393V25.7355H26.6584C26.3348 25.7355 26.0725 25.9977 26.0725 26.3214V28.9393V30.9714H23.6544V8.41393H29.9699ZM14.9832 32.4638H8.66774V21.8868H14.9832V32.4638ZM16.1611 32.4638V15.144H22.4766V30.9714H18.3259C18.0023 30.9714 17.74 31.2336 17.74 31.5572V32.4638L16.1611 32.4638ZM26.0725 38.8254H18.9118V37.3791H26.0725V38.8254ZM27.2443 38.8254V37.3791H30.6409C30.9399 37.9326 31.3412 38.4227 31.8187 38.8254H27.2443Z"
                              fill="CurrentColor"></path>
                            <path
                              d="M34.9994 38.1165C35.323 38.1165 35.5853 37.8543 35.5853 37.5307V37.3316C36.0858 37.1309 36.4641 36.6834 36.558 36.1243C36.6788 35.4046 36.2892 34.7549 35.5884 34.5076C35.2944 34.4038 34.842 34.3332 34.7475 34.1256C34.7005 34.0223 34.7709 33.9302 34.8721 33.8754C35.1535 33.7906 35.3323 33.9262 35.3517 33.9421C35.3434 33.9354 35.3394 33.9312 35.3394 33.9312C35.3394 33.9312 35.8569 34.2362 36.1505 33.9426C36.6973 33.3958 36.133 33.0691 36.133 33.0691C36.0213 32.9662 35.8307 32.8438 35.5853 32.7632V32.6306C35.5853 31.8731 34.4135 31.8731 34.4135 32.6306V32.7971C33.9923 32.9702 33.6833 33.3518 33.595 33.8212C33.5049 34.2998 33.6658 34.7669 34.015 35.0403C34.3307 35.2876 34.7703 35.4615 35.1985 35.6125C35.3027 35.6493 35.4373 35.7222 35.4024 35.9302C35.3811 36.0573 35.2713 36.2729 34.9956 36.2747C34.6716 36.2768 34.6026 36.2662 34.3712 36.1151C34.1003 35.9382 33.7373 36.0144 33.5604 36.2853C33.3834 36.5563 33.4596 36.9193 33.7305 37.0962C33.9871 37.2638 34.1945 37.354 34.4135 37.4007V37.5306C34.4135 37.8543 34.6759 38.1165 34.9994 38.1165Z"
                              fill="CurrentColor"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_9105_30181">
                              <rect width="40" height="40" fill="CurrentColor"></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <h2 class="heading text-24">
                        <?php esc_html_e('Real estate, education & hospitality sectors', 'digitalgrowth'); ?>
                      </h2>
                      <div class="text text-16">
                        <?php esc_html_e('Industries where people search before they buy — SEO helps you get found first.', 'digitalgrowth'); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a href="<?php echo esc_url(home_url('/about/')); ?>" class="button button--secondary"
                aria-label="<?php esc_attr_e('Discover More', 'digitalgrowth'); ?>" data-aos="fade-up"
                data-aos-delay="300">
                <?php esc_html_e('Discover More', 'digitalgrowth'); ?>
                <span class="svg-wrapper">
                  <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                      fill="currentColor" />
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container -->
  </div>




  <!-- Why Choose Us -->
  <div class="why-choose-us section-padding">
    <div class="container">
      <div class="choose-top">
        <div class="row">
          <div class="col-12 col-lg-6">
            <picture class="choose-media radius18" data-aos="fade-right">
              <source media="(max-width: 575px)"
                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/why-choose-us/1.jpg">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/why-choose-us/1.jpg"
                alt="<?php esc_attr_e('Why Choose Us', 'digitalgrowth'); ?>" width="1000" height="742" loading="lazy">
            </picture>
          </div>
          <div class="col-12 col-lg-6">
            <div class="choose-us-content section-headings">
              <div class="subheading text-20 subheading-bg" data-aos="fade-up">
                <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                  fill="none">
                  <g clip-path="url(#clip0_9088_4143)">
                    <path
                      d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                      fill="CurrentColor" />
                  </g>
                  <defs>
                    <clipPath>
                      <rect width="14" height="14" fill="CurrentColor" />
                    </clipPath>
                  </defs>
                </svg>
                <span><?php esc_html_e('Why Choose Us', 'digitalgrowth'); ?></span>
                <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                  fill="none">
                  <g clip-path="url(#clip0_9088_4143)">
                    <path
                      d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                      fill="CurrentColor" />
                  </g>
                  <defs>
                    <clipPath>
                      <rect width="14" height="14" fill="CurrentColor" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <h2 class="heading text-50" data-aos="fade-up">
                <?php esc_html_e('A Strategic, Proven Process', 'digitalgrowth'); ?>
              </h2>
              <p class="text text-18" data-aos="fade-up">
                <?php esc_html_e('I work with businesses that value clarity, outcomes, and long-term growth. Every company operates in a different market with different constraints—SEO is not always the right lever. After a thorough evaluation, I recommend the most effective growth strategy and channels based on commercial impact, not trends.', 'digitalgrowth'); ?>
              </p>
              <div class="buttons" data-aos="fade-up">
                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="button button--primary"
                  aria-label="<?php esc_attr_e('Get started today', 'digitalgrowth'); ?>">
                  <?php esc_html_e('Get started today', 'digitalgrowth'); ?>
                  <span class="svg-wrapper">
                    <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                        fill="CurrentColor" />
                    </svg>
                  </span>
                </a>
              </div>


            </div>
          </div>
        </div>
      </div>

      <div class="choose-bottom">

        <div class="row">
          <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-up">
            <div class="card-icon-text card-icon-text-horizontal">

              <div class="content">
                <h2 class="heading text-20 fw-700"><?php esc_html_e('Discovery & Assessment', 'digitalgrowth'); ?>
                </h2>
                <p class="text-item text text-18">
                  <?php esc_html_e('I conduct a deep-dive analysis of your digital ecosystem to understand performance, positioning, and opportunity. This includes:', 'digitalgrowth'); ?>
                </p>

                <ul class="text-lists list-unstyled">
                  <li class="text-item text text-18 aos-init aos-animate"><svg class="icon-24" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                        fill="CurrentColor"></path>
                    </svg>Evaluation of current acquisition channels and lead quality</li>
                  <li class="text-item text text-18 aos-init aos-animate"><svg class="icon-24" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                        fill="CurrentColor"></path>
                    </svg>Cost efficiency, scalability, and ROI analysis</li>


                  <li class="text-item text text-18 aos-init aos-animate"><svg class="icon-24" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                        fill="CurrentColor"></path>
                    </svg>Strategic assessment of whether SEO (local or organic) aligns with your growth objectives
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card-icon-text card-icon-text-horizontal">

              <div class="content">
                <h2 class="heading text-20 fw-700">
                  <?php esc_html_e('Strategy & Execution Planning', 'digitalgrowth'); ?>
                </h2>
                <p class="text-item text text-18">
                  <?php esc_html_e('Using insights from the assessment, I design a tailored growth roadmap aligned with your business goals. This includes defining priorities, sequencing initiatives, and setting clear success metrics—ensuring focus, accountability, and measurable outcomes.', 'digitalgrowth'); ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card-icon-text card-icon-text-horizontal">

              <div class="content">
                <h2 class="heading text-20 fw-700">
                  <?php esc_html_e('Implementation, Optimization & Governance', 'digitalgrowth'); ?>
                </h2>
                <p class="text-item text text-18">
                  <?php esc_html_e('I lead the execution and continuously monitor performance against agreed KPIs. Through structured reviews, data-driven optimizations, and ongoing refinement, the strategy evolves to deliver consistent, sustainable growth.', 'digitalgrowth'); ?>
                </p>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

  <!-- Pricing Plan -->
  <div class="pricing-plan mt-100">
    <div class="container">
      <div class="section-headings text-center">
        <div class="subheading text-20 subheading-bg" data-aos="fade-up">
          <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
            fill="none">
            <g clip-path="url(#clip0_9088_4143)">
              <path
                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                fill="CurrentColor" />
            </g>
            <defs>
              <clipPath>
                <rect width="14" height="14" fill="CurrentColor" />
              </clipPath>
            </defs>
          </svg>
          <span><?php esc_html_e('Pricing Plan', 'digitalgrowth'); ?></span>
          <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
            fill="none">
            <g clip-path="url(#clip0_9088_4143)">
              <path
                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                fill="CurrentColor" />
            </g>
            <defs>
              <clipPath>
                <rect width="14" height="14" fill="CurrentColor" />
              </clipPath>
            </defs>
          </svg>
        </div>
        <h2 class="heading text-50" data-aos="fade-up">
          <?php esc_html_e('Simple Plans, Scalable Growth', 'digitalgrowth'); ?>
        </h2>
      </div>

      <div class="section-content">
        <div class="pricing-cards">
          <div class="row product-grid justify-content-center">
            <div class="col-12 col-lg-12 col-xl-4">
              <div class="card-pricing radius18">
                <div class="card-pricing-headings radius18" data-aos="fade-up">
                  <h2 class="heading text-24">Starter</h2>
                  <p class="text text-16">Pricing plan for Digital Transformation</p>
                  <div class="pricing-box">
                    <span class="subheading text-50 fw-600">₹33,000</span>
                    <span class="subheading subheading-monthly text-16 fw-400">/Monthly</span>
                  </div>
                </div>
                <ul class="text-lists list-unstyled">
                  <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="90">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <g clip-path="url(#clip0_9088_5324)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z"
                          fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z"
                          fill="CurrentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="28" height="28" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    15 content pages (blogs, service pages, and backlinks)

                  </li>
                  <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="140">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <g clip-path="url(#clip0_9088_5324)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z"
                          fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z"
                          fill="CurrentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="28" height="28" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    Keyword Research, Content Strategy & Performance Tracking

                  </li>
                  <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="170">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <g clip-path="url(#clip0_9088_5324)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z"
                          fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z"
                          fill="CurrentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="28" height="28" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>

                    1 × Dedicated Content Writer
                  </li>

                </ul>
                <div class="buttons" data-aos="fade-up">
                  <a href="<?php echo esc_url(home_url('/?add-to-cart=55')); ?>" class="button button--primary"
                    aria-label="<?php esc_attr_e('Choose Package', 'digitalgrowth'); ?>">
                    <?php esc_html_e('Choose Package', 'digitalgrowth'); ?>
                    <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z"
                        fill="currentColor" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-12 col-xl-4">
              <div class="card-pricing radius18 active">
                <div class="card-pricing-headings radius18" data-aos="fade-up">
                  <h2 class="heading text-24">Growth</h2>
                  <p class="text text-16">Pricing plan for Digital Transformation</p>
                  <div class="pricing-box">
                    <span class="subheading text-50 fw-600">₹42,000</span>
                    <span class="subheading subheading-monthly text-16 fw-400">/Monthly</span>
                  </div>
                </div>
                <ul class="text-lists list-unstyled">
                  <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="90">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <g clip-path="url(#clip0_9088_5324)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z"
                          fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z"
                          fill="CurrentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="28" height="28" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    25 content pages (blogs, service pages, and backlinks)
                  </li>
                  <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="140">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <g clip-path="url(#clip0_9088_5324)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z"
                          fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z"
                          fill="CurrentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="28" height="28" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    Keyword Research, Content Strategy & Performance Tracking
                  </li>
                  <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="170">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <g clip-path="url(#clip0_9088_5324)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z"
                          fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z"
                          fill="CurrentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="28" height="28" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    2 × Dedicated Content Writers
                  </li>

                </ul>
                <div class="buttons" data-aos="fade-up">
                  <a href="<?php echo esc_url(home_url('/?add-to-cart=56')); ?>" class="button button--primary"
                    aria-label="<?php esc_attr_e('Choose Package', 'digitalgrowth'); ?>">
                    <?php esc_html_e('Choose Package', 'digitalgrowth'); ?>
                    <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z"
                        fill="currentColor" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-12 col-xl-4">
              <div class="card-pricing radius18">
                <div class="card-pricing-headings radius18" data-aos="fade-up">
                  <h2 class="heading text-24">Pro </h2>
                  <p class="text text-16">Pricing plan for Digital Transformation</p>
                  <div class="pricing-box">
                    <span class="subheading text-50 fw-600">₹87,000</span>
                    <span class="subheading subheading-monthly text-16 fw-400">/Monthly</span>
                  </div>
                </div>
                <ul class="text-lists list-unstyled">
                  <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="90">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <g clip-path="url(#clip0_9088_5324)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z"
                          fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z"
                          fill="CurrentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="28" height="28" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    50 content pages (blogs, service pages, and backlinks)

                  </li>
                  <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="140">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <g clip-path="url(#clip0_9088_5324)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z"
                          fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z"
                          fill="CurrentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="28" height="28" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    Keyword Research, Content Strategy & Performance Tracking
                  </li>
                  <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="170">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <g clip-path="url(#clip0_9088_5324)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z"
                          fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z"
                          fill="CurrentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="28" height="28" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    3 × Dedicated Content Writers
                  </li>

                </ul>
                <div class="buttons" data-aos="fade-up">
                  <a href="<?php echo esc_url(home_url('/?add-to-cart=57')); ?>" class="button button--primary"
                    aria-label="<?php esc_attr_e('Choose Package', 'digitalgrowth'); ?>">
                    <?php esc_html_e('Choose Package', 'digitalgrowth'); ?>
                    <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z"
                        fill="currentColor" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonial -->
  <testi-slider class="testi-slider team-slider mt-100">
    <div class="container">
      <div class="section-headings headings-width text-center">
        <div class="subheading text-20 subheading-bg" data-aos="fade-up">
          <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
            fill="none">
            <g clip-path="url(#clip0_9088_4143)">
              <path
                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                fill="CurrentColor" />
            </g>
            <defs>
              <clipPath>
                <rect width="14" height="14" fill="CurrentColor" />
              </clipPath>
            </defs>
          </svg>
          <span><?php esc_html_e('Testimonial', 'digitalgrowth'); ?></span>
          <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
            fill="none">
            <g clip-path="url(#clip0_9088_4143)">
              <path
                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                fill="CurrentColor" />
            </g>
            <defs>
              <clipPath>
                <rect width="14" height="14" fill="CurrentColor" />
              </clipPath>
            </defs>
          </svg>
        </div>
        <h2 class="heading text-50" data-aos="fade-up">
          <?php esc_html_e('See what our customers have to say about us', 'digitalgrowth'); ?>
        </h2>
      </div>
    </div>

    <div class="section-content" data-aos="fade-up">
      <div class="container">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card-testimonial radius18" data-aos="fade-up" data-aos-delay="10">
                <ul class="rating-list list-unstyled">
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                </ul>
                <p class="text text-24">
                  “ Savitha has played a pivotal role in shaping the website design, resolving technical issues, and
                  setting up the analytics and search console for all domains. As an SEO specialist, she managed
                  off-page activities for one of our products, the Learning Management System (LMS). Additionally, she
                  successfully created over 20 links from sites with a Domain Authority (DA) of 70 or higher through
                  email outreach. ”
                </p>
                <div class="user-info-wrap">
                  <div class="user-info">
                    <div class="user-img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/testimonial/1.jpg"
                        width="80" height="80" loading="lazy"
                        alt="<?php esc_attr_e('Harold Fernandes', 'digitalgrowth'); ?>">
                    </div>
                    <div class="user-name-desig">
                      <h2 class="user-name heading text-24">
                        <?php esc_html_e('Harold Fernandes', 'digitalgrowth'); ?>
                      </h2>
                      <div class="user-desig text text-18">
                        <?php esc_html_e('Bar and Bench', 'digitalgrowth'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="icon-quote">
                    <svg class="icon icon-62" width="62" height="62" viewBox="0 0 62 62" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M14.5312 9.41406C6.51702 9.41406 0 15.9329 0 23.9453C0 31.2606 5.43154 37.3306 12.4771 38.3311C11.9131 42.4287 10.3486 46.3275 7.90415 49.7085C7.42874 50.3683 7.44654 51.2624 7.9538 51.9009C8.4515 52.5292 9.31635 52.7674 10.0754 52.4473C21.6088 47.6332 29.0625 36.4438 29.0625 23.9453C29.0625 15.9329 22.5455 9.41406 14.5312 9.41406ZM47.4688 9.41406C39.4545 9.41406 32.9375 15.9329 32.9375 23.9453C32.9375 31.2606 38.369 37.3306 45.4146 38.3311C44.8506 42.4287 43.2861 46.3275 40.8417 49.7085C40.3662 50.3683 40.384 51.2624 40.8913 51.9009C41.389 52.5292 42.2538 52.7674 43.0129 52.4473C54.5463 47.6332 62 36.4438 62 23.9453C62 15.9329 55.483 9.41406 47.4688 9.41406Z"
                        fill="CurrentColor" />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-testimonial radius18" data-aos="fade-up" data-aos-delay="150">
                <ul class="rating-list list-unstyled">
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                </ul>
                <p class="text text-24">
                  “ Savitha is a thorough professional and a team player. She is an SEO expert and will be an asset to
                  any organisation in which she will be a part of.
                  ”
                </p>
                <div class="user-info-wrap">
                  <div class="user-info">
                    <div class="user-img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/testimonial/2.jpg"
                        width="80" height="80" loading="lazy" alt="<?php esc_attr_e('R Karthik', 'digitalgrowth'); ?>">
                    </div>
                    <div class="user-name-desig">
                      <h2 class="user-name heading text-24">
                        <?php esc_html_e('R Karthik', 'digitalgrowth'); ?>
                      </h2>
                      <div class="user-desig text text-18">
                        <?php esc_html_e('Product Manager', 'digitalgrowth'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="icon-quote">
                    <svg class="icon icon-62" width="62" height="62" viewBox="0 0 62 62" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M14.5312 9.41406C6.51702 9.41406 0 15.9329 0 23.9453C0 31.2606 5.43154 37.3306 12.4771 38.3311C11.9131 42.4287 10.3486 46.3275 7.90415 49.7085C7.42874 50.3683 7.44654 51.2624 7.9538 51.9009C8.4515 52.5292 9.31635 52.7674 10.0754 52.4473C21.6088 47.6332 29.0625 36.4438 29.0625 23.9453C29.0625 15.9329 22.5455 9.41406 14.5312 9.41406ZM47.4688 9.41406C39.4545 9.41406 32.9375 15.9329 32.9375 23.9453C32.9375 31.2606 38.369 37.3306 45.4146 38.3311C44.8506 42.4287 43.2861 46.3275 40.8417 49.7085C40.3662 50.3683 40.384 51.2624 40.8913 51.9009C41.389 52.5292 42.2538 52.7674 43.0129 52.4473C54.5463 47.6332 62 36.4438 62 23.9453C62 15.9329 55.483 9.41406 47.4688 9.41406Z"
                        fill="CurrentColor" />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-testimonial radius18" data-aos="fade-up" data-aos-delay="300">
                <ul class="rating-list list-unstyled">
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                  <li class="rating-icon">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"
                        fill="CurrentColor" />
                    </svg>
                  </li>
                </ul>
                <p class="text text-24">
                  “ Savitha has played a pivotal role in shaping the website design, resolving technical issues, and
                  setting up the analytics and search console for all domains. As an SEO specialist, she managed
                  off-page activities for one of our products, the Learning Management System (LMS). Additionally, she
                  successfully created over 20 links from sites with a Domain Authority (DA) of 70 or higher through
                  email outreach. ”

                </p>
                <div class="user-info-wrap">
                  <div class="user-info">
                    <div class="user-img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/testimonial/3.jpg"
                        width="80" height="80" loading="lazy"
                        alt="<?php esc_attr_e('Tondu Hosen', 'digitalgrowth'); ?>">
                    </div>
                    <div class="user-name-desig">
                      <h2 class="user-name heading text-24"><?php esc_html_e('Tondu Hosen', 'digitalgrowth'); ?></h2>
                      <div class="user-desig text text-18"><?php esc_html_e('CEO & Owner', 'digitalgrowth'); ?></div>
                    </div>
                  </div>
                  <div class="icon-quote">
                    <svg class="icon icon-62" width="62" height="62" viewBox="0 0 62 62" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M14.5312 9.41406C6.51702 9.41406 0 15.9329 0 23.9453C0 31.2606 5.43154 37.3306 12.4771 38.3311C11.9131 42.4287 10.3486 46.3275 7.90415 49.7085C7.42874 50.3683 7.44654 51.2624 7.9538 51.9009C8.4515 52.5292 9.31635 52.7674 10.0754 52.4473C21.6088 47.6332 29.0625 36.4438 29.0625 23.9453C29.0625 15.9329 22.5455 9.41406 14.5312 9.41406ZM47.4688 9.41406C39.4545 9.41406 32.9375 15.9329 32.9375 23.9453C32.9375 31.2606 38.369 37.3306 45.4146 38.3311C44.8506 42.4287 43.2861 46.3275 40.8417 49.7085C40.3662 50.3683 40.384 51.2624 40.8913 51.9009C41.389 52.5292 42.2538 52.7674 43.0129 52.4473C54.5463 47.6332 62 36.4438 62 23.9453C62 15.9329 55.483 9.41406 47.4688 9.41406Z"
                        fill="CurrentColor" />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </testi-slider>

  <!-- FAQ -->
  <div class="faq mt-100">
    <div class="container">
      <div class="row faq-row">
        <div class="col-lg-6 col-12">
          <div class="section-headings">
            <div class="subheading text-20 subheading-bg" data-aos="fade-up">
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                fill="none">
                <g clip-path="url(#clip0_9088_4143)">
                  <path
                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                    fill="CurrentColor" />
                </g>
                <defs>
                  <clipPath>
                    <rect width="14" height="14" fill="CurrentColor" />
                  </clipPath>
                </defs>
              </svg>
              <span><?php esc_html_e('Questions', 'digitalgrowth'); ?></span>
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                fill="none">
                <g clip-path="url(#clip0_9088_4143)">
                  <path
                    d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                    fill="CurrentColor" />
                </g>
                <defs>
                  <clipPath>
                    <rect width="14" height="14" fill="CurrentColor" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            <h2 class="heading text-50" data-aos="fade-up" data-aos-delay="50">
              <?php esc_html_e('Have any questions? Here are some answers', 'digitalgrowth'); ?>
            </h2>
            <div class="text text-18" data-aos="fade-up" data-aos-delay="80">
              <?php esc_html_e('In relation to websites and apps, UI design considers the look, interactivity of the making product. It\'s all about making sure that the user interface.', 'digitalgrowth'); ?>
            </div>
            <div class="buttons" data-aos="fade-up" data-aos-delay="100">
              <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button button--primary"
                aria-label="<?php esc_attr_e('Ask Your Question', 'digitalgrowth'); ?>">
                <?php esc_html_e('Ask Your Question', 'digitalgrowth'); ?>
                <span class="svg-wrapper">
                  <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                      fill="CurrentColor" />
                  </svg>
                </span>
              </a>
            </div>
            <div class="image-absolute" data-aos="zoom-in">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/faq/question.png" width="104"
                height="180" loading="lazy" alt="<?php esc_attr_e('FAQ', 'digitalgrowth'); ?>">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <faq-accordion>
            <div class="accordion-list">
              <div class="accordion-block" data-aos="fade-up">
                <div class="accordion-opener heading text-22">
                  How long will it take to see results from SEO?
                  <div class="svg-wrapper">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_9088_8345)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="24" height="24" fill="CurrentColor" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content">
                  <div class="accordion-content-inner text text-18">
                    SEO isn’t instant, but it’s powerful. You’ll usually start noticing improvement in 3–4 months, with
                    stronger, more stable growth over time.
                  </div>
                </div>
              </div>
              <div class="accordion-block" data-aos="fade-up" data-aos-delay="50">
                <div class="accordion-opener heading text-22">
                  Why should I invest in SEO instead of ads?
                  <div class="svg-wrapper">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_9088_8345)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="24" height="24" fill="CurrentColor" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content">
                  <div class="accordion-content-inner text text-18">
                    Ads stop working when you stop paying. SEO builds long-term visibility that keeps bringing leads —
                    even when you’re not spending.
                  </div>
                </div>
              </div>
              <div class="accordion-block" data-aos="fade-up" data-aos-delay="100">
                <div class="accordion-opener heading text-22">
                  Do I need to write my own content?
                  <div class="svg-wrapper">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_9088_8345)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="24" height="24" fill="CurrentColor" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content">
                  <div class="accordion-content-inner text text-18">
                    No, we’ve got that covered. Our team of SEO content writers creates keyword-optimized blogs and
                    pages that attract and convert visitors.</div>
                </div>
              </div>
              <div class="accordion-block" data-aos="fade-up" data-aos-delay="150">
                <div class="accordion-opener heading text-22">
                  I’m a small business — is SEO still worth it for me?
                  <div class="svg-wrapper">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_9088_8345)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="24" height="24" fill="CurrentColor" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content">
                  <div class="accordion-content-inner text text-18">
                    Absolutely. Local SEO helps smaller businesses appear in Google Maps and nearby searches, so you
                    compete effectively in your area.
                  </div>
                </div>
              </div>
              <div class="accordion-block" data-aos="fade-up" data-aos-delay="200">
                <div class="accordion-opener heading text-22">
                  What makes your SEO approach different?

                  <div class="svg-wrapper">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_9088_8345)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="24" height="24" fill="CurrentColor" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content">
                  <div class="accordion-content-inner text text-18">
                    We go beyond Google — optimizing for AI-driven search tools like ChatGPT, ensuring your brand stays
                    visible in the new search landscape. </div>
                </div>
              </div>

              <div class="accordion-block" data-aos="fade-up" data-aos-delay="250">
                <div class="accordion-opener heading text-22">
                  How will I know if it’s working?


                  <div class="svg-wrapper">
                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_9088_8345)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.7083 15.7044C12.5208 15.8919 12.2665 15.9972 12.0013 15.9972C11.7362 15.9972 11.4818 15.8919 11.2943 15.7044L5.63732 10.0474C5.54181 9.95517 5.46563 9.84482 5.41322 9.72282C5.36081 9.60081 5.33322 9.46959 5.33207 9.33681C5.33092 9.20404 5.35622 9.07236 5.4065 8.94946C5.45678 8.82656 5.53103 8.71491 5.62492 8.62102C5.71882 8.52713 5.83047 8.45287 5.95337 8.40259C6.07626 8.35231 6.20794 8.32701 6.34072 8.32816C6.4735 8.32932 6.60472 8.3569 6.72672 8.40931C6.84873 8.46172 6.95907 8.5379 7.05132 8.63341L12.0013 13.5834L16.9513 8.63341C17.1399 8.45125 17.3925 8.35046 17.6547 8.35274C17.9169 8.35502 18.1677 8.46019 18.3531 8.64559C18.5385 8.831 18.6437 9.08182 18.646 9.34401C18.6483 9.60621 18.5475 9.85881 18.3653 10.0474L12.7083 15.7044Z"
                          fill="CurrentColor" />
                      </g>
                      <defs>
                        <clipPath>
                          <rect width="24" height="24" fill="CurrentColor" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content">
                  <div class="accordion-content-inner text text-18">
                    You’ll receive clear monthly reports showing your keyword growth, traffic, and leads — so you always
                    see where your money’s going.
                  </div>
                </div>
              </div>
          </faq-accordion>
        </div>
      </div>
    </div>
  </div>

  <!-- =============================================
       5. LATEST BLOG POSTS
  ============================================= -->
  <div class="featured-blog mt-100 section-padding">
    <div class="container">
      <div class="section-headings" data-aos="fade-up">
        <div class="subheading text-20 subheading-bg">
          <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
            fill="none">
            <g clip-path="url(#clip-blog1)">
              <path
                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                fill="CurrentColor" />
            </g>
            <defs>
              <clipPath id="clip-blog1">
                <rect width="14" height="14" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <span><?php esc_html_e('Our Blog', 'digitalgrowth'); ?></span>
          <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
            fill="none">
            <g clip-path="url(#clip-blog2)">
              <path
                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                fill="CurrentColor" />
            </g>
            <defs>
              <clipPath id="clip-blog2">
                <rect width="14" height="14" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </div>
        <h2 class="heading text-50" data-aos="fade-up" data-aos-delay="50">
          <?php esc_html_e('Latest from Our Blog', 'digitalgrowth'); ?>
        </h2>
      </div>

      <?php
      $blog_query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post_status' => 'publish',
      ));

      if ($blog_query->have_posts()): ?>
        <div class="section-content" data-aos="fade-up">
          <div class="row product-grid justify-content-center">
            <?php while ($blog_query->have_posts()):
              $blog_query->the_post(); ?>
              <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card-blog radius18">

                  <!-- card-blog-top: meta + title -->
                  <div class="card-blog-top">
                    <div class="card-blog-meta">
                      <!-- Author -->
                      <div class="card-blog-meta-item text text-18">
                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.0007 0.046875C6.95088 0.046875 5.94406 0.463912 5.20173 1.20624C4.4594 1.94858 4.04236 2.95539 4.04236 4.00521C4.04236 5.05502 4.4594 6.06184 5.20173 6.80417C5.94406 7.5465 6.95088 7.96354 8.0007 7.96354C9.05051 7.96354 10.0573 7.5465 10.7997 6.80417C11.542 6.06184 11.959 5.05502 11.959 4.00521C11.959 2.95539 11.542 1.94858 10.7997 1.20624C10.0573 0.463912 9.05051 0.046875 8.0007 0.046875ZM5.29236 4.00521C5.29236 3.28691 5.57771 2.59804 6.08562 2.09013C6.59353 1.58222 7.2824 1.29688 8.0007 1.29688C8.71899 1.29688 9.40787 1.58222 9.91578 2.09013C10.4237 2.59804 10.709 3.28691 10.709 4.00521C10.709 4.7235 10.4237 5.41238 9.91578 5.92029C9.40787 6.4282 8.71899 6.71354 8.0007 6.71354C7.2824 6.71354 6.59353 6.4282 6.08562 5.92029C5.57771 5.41238 5.29236 4.7235 5.29236 4.00521ZM8.0007 9.21354C6.0732 9.21354 4.29653 9.65187 2.9807 10.3919C1.68403 11.1219 0.709031 12.2269 0.709031 13.5885V13.6735C0.708198 14.6419 0.707364 15.8569 1.7732 16.7252C2.29736 17.1519 3.03153 17.456 4.0232 17.656C5.01653 17.8577 6.31236 17.9635 8.0007 17.9635C9.68903 17.9635 10.984 17.8577 11.979 17.656C12.9707 17.456 13.704 17.1519 14.229 16.7252C15.2949 15.8569 15.2932 14.6419 15.2924 13.6735V13.5885C15.2924 12.2269 14.3174 11.1219 13.0215 10.3919C11.7049 9.65187 9.92903 9.21354 8.0007 9.21354ZM1.95903 13.5885C1.95903 12.8794 2.47736 12.1094 3.5932 11.4819C4.68986 10.8652 6.24653 10.4635 8.00153 10.4635C9.75486 10.4635 11.3115 10.8652 12.4082 11.4819C13.5249 12.1094 14.0424 12.8794 14.0424 13.5885C14.0424 14.6785 14.009 15.2919 13.439 15.7552C13.1307 16.0069 12.614 16.2527 11.7307 16.431C10.8499 16.6094 9.6457 16.7135 8.0007 16.7135C6.3557 16.7135 5.1507 16.6094 4.2707 16.431C3.38736 16.2527 2.8707 16.0069 2.56236 15.756C1.99236 15.2919 1.95903 14.6785 1.95903 13.5885Z"
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

                  <!-- card-blog-bottom: tag + image + button -->
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
        <div class="buttons buttons-discover" data-aos="fade-up" data-aos-delay="100">
          <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="button button--primary"
            aria-label="Discover more blog posts">
            <?php esc_html_e('Discover More', 'digitalgrowth'); ?>
            <span class="svg-wrapper"><svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                  fill="CurrentColor" />
              </svg></span>
          </a>
        </div>
      <?php else: ?>
        <p class="text text-18" style="text-align:center;padding:40px 0;">
          <?php esc_html_e('No blog posts yet. Check back soon!', 'digitalgrowth'); ?>
        </p>
      <?php endif; ?>

    </div>
  </div>

</main>

<?php get_footer(); ?>
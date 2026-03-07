<?php
/**
 * The main homepage template for the Digital Growth theme
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
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><g clip-path="url(#clip-star1)"><path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"/></g><defs><clipPath id="clip-star1"><rect width="14" height="14" fill="white"/></clipPath></defs></svg>
              <span><?php esc_html_e( 'Expert Seo', 'digitalgrowth' ); ?></span>
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><g clip-path="url(#clip-star2)"><path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"/></g><defs><clipPath id="clip-star2"><rect width="14" height="14" fill="white"/></clipPath></defs></svg>
            </div>
            <h1 class="heading text-80 fw-700" data-aos="fade-down" data-aos-delay="100">
              <?php esc_html_e( 'Hiding in the', 'digitalgrowth' ); ?>
              <span class="decorated-text"><span><?php esc_html_e( 'shadows', 'digitalgrowth' ); ?></span></span>
              <?php esc_html_e( 'of Google?', 'digitalgrowth' ); ?>
            </h1>
            <h2 class="heading text-32 fw-400" data-aos="fade-up" data-aos-delay="120">
              <?php esc_html_e( "Let's turn the lights on with smart SEO.", 'digitalgrowth' ); ?>
            </h2>
            <div class="text text-18" data-aos="fade-up" data-aos-delay="150">
              <?php esc_html_e( 'Transform your business with AI-powered digital marketing that drives growth and visibility. Each quarter, we partner with a limited number of businesses ready to scale. Let\'s connect and see if your brand makes the cut.', 'digitalgrowth' ); ?>
            </div>
            <div class="hero-button-wrap buttons" data-aos="fade-down" data-aos-delay="200">
              <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="button button--primary" aria-label="Get Started">
                <?php esc_html_e( 'Get Started', 'digitalgrowth' ); ?>
                <span class="svg-wrapper">
                  <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path></svg>
                </span>
              </a>
              <a href="tel:<?php echo esc_attr( get_theme_mod( 'phone_number', '(307)555-0133' ) ); ?>" class="hero-phone-call" aria-label="Phone number" data-aos="fade-up" data-aos-delay="50">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none"><path d="M23.8337 3.67188C28.2097 3.67188 32.4066 5.41026 35.5009 8.50461C38.5953 11.599 40.3337 15.7958 40.3337 20.1719M23.8337 11.0052C26.2648 11.0052 28.5964 11.971 30.3155 13.6901C32.0346 15.4091 33.0003 17.7407 33.0003 20.1719M25.359 30.3799C25.7376 30.5538 26.1642 30.5935 26.5684 30.4925C26.9727 30.3915 27.3304 30.1559 27.5828 29.8244L28.2337 28.9719C28.5752 28.5165 29.0181 28.1469 29.5272 27.8923C30.0363 27.6377 30.5978 27.5052 31.167 27.5052H36.667C37.6395 27.5052 38.5721 27.8915 39.2597 28.5791C39.9473 29.2668 40.3337 30.1994 40.3337 31.1719V36.6719C40.3337 37.6443 39.9473 38.577 39.2597 39.2646C38.5721 39.9522 37.6395 40.3385 36.667 40.3385C27.9148 40.3385 19.5212 36.8618 13.3325 30.6731C7.14377 24.4844 3.66699 16.0907 3.66699 7.33854C3.66699 6.36608 4.0533 5.43345 4.74093 4.74582C5.42857 4.05818 6.3612 3.67188 7.33366 3.67188H12.8337C13.8061 3.67188 14.7387 4.05818 15.4264 4.74582C16.114 5.43345 16.5003 6.36608 16.5003 7.33854V12.8385C16.5003 13.4078 16.3678 13.9692 16.1132 14.4783C15.8587 14.9875 15.489 15.4303 15.0337 15.7719L14.1757 16.4154C13.8391 16.6724 13.6019 17.0379 13.5043 17.45C13.4067 17.8621 13.4548 18.2952 13.6403 18.6759C16.1459 23.765 20.2668 27.8807 25.359 30.3799Z" stroke="CurrentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <div class="hero-call">
                  <div class="text text-14"><?php esc_html_e( 'Need help?', 'digitalgrowth' ); ?></div>
                  <div class="text text-16"><?php echo esc_html( get_theme_mod( 'phone_number', '(307) 555-0133' ) ); ?></div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Hero Contact Form -->
        <div class="col-12 col-lg-6 col-contact-form">
          <div class="contact-form-wrap radius18">
            <div class="contact-form-headings">
              <h2 class="heading text-32" data-aos="fade-up"><?php esc_html_e( 'Make an Appointment', 'digitalgrowth' ); ?></h2>
              <p class="text text-16" data-aos="fade-up"><?php esc_html_e( "Feel free to contact with us, we don't spam your email", 'digitalgrowth' ); ?></p>
            </div>
            <form id="dg-contact-form" action="" method="post" class="form contact-form" data-aos="fade-up">
              <?php wp_nonce_field( 'digitalgrowth_contact_nonce', 'nonce' ); ?>
              <input type="hidden" name="action" value="digitalgrowth_contact">
              <div class="field">
                <label for="ContactForm-name" class="visually-hidden"><?php esc_html_e( 'Your Name', 'digitalgrowth' ); ?></label>
                <input id="ContactForm-name" class="text-16" type="text" placeholder="<?php esc_attr_e( 'Your Name *', 'digitalgrowth' ); ?>" name="name" required>
              </div>
              <div class="field">
                <label for="ContactForm-email" class="visually-hidden"><?php esc_html_e( 'Business Email', 'digitalgrowth' ); ?></label>
                <input id="ContactForm-email" class="text-16" type="email" placeholder="<?php esc_attr_e( 'Business Email *', 'digitalgrowth' ); ?>" name="email" required>
              </div>
              <div class="field">
                <label for="ContactForm-phone" class="visually-hidden"><?php esc_html_e( 'Phone', 'digitalgrowth' ); ?></label>
                <input id="ContactForm-phone" class="text-16" type="tel" placeholder="<?php esc_attr_e( 'Phone *', 'digitalgrowth' ); ?>" name="phone" required>
              </div>
              <div class="field">
                <label for="ContactForm-service" class="visually-hidden"><?php esc_html_e( 'Service Type', 'digitalgrowth' ); ?></label>
                <input id="ContactForm-service" class="text-16" type="text" placeholder="<?php esc_attr_e( 'Service Type *', 'digitalgrowth' ); ?>" name="service" required>
              </div>
              <div class="field">
                <label for="ContactForm-body" class="visually-hidden"><?php esc_html_e( 'Your Comment', 'digitalgrowth' ); ?></label>
                <textarea id="ContactForm-body" class="text-16" rows="4" placeholder="<?php esc_attr_e( 'Your Comment *', 'digitalgrowth' ); ?>" name="message" required></textarea>
              </div>
              <div class="form-message" id="dg-form-message" style="display:none;padding:10px 0;font-weight:600;"></div>
              <div class="form-button">
                <button type="submit" class="button button--secondary" aria-label="Send Message">
                  <?php esc_html_e( 'Send Message', 'digitalgrowth' ); ?>
                  <span class="svg-wrapper">
                    <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path></svg>
                  </span>
                </button>
              </div>
            </form>
            <script>
            (function(){
              document.addEventListener('DOMContentLoaded', function(){
                var form = document.getElementById('dg-contact-form');
                var msg  = document.getElementById('dg-form-message');
                if(!form) return;
                form.addEventListener('submit', function(e){
                  e.preventDefault();
                  var data = new FormData(form);
                  fetch(digitalgrowth_ajax.ajax_url, { method:'POST', body: data })
                    .then(function(r){ return r.json(); })
                    .then(function(res){
                      msg.style.display = 'block';
                      if(res.success){
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
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/imgs/image-text/img2.png"
              width="992"
              height="863"
              loading="lazy"
              alt="<?php esc_attr_e( 'About Digital Growth', 'digitalgrowth' ); ?>"
              data-aos="zoom-in-up"
            >
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="content section-headings">
            <div class="subheading text-20 subheading-bg" data-aos="fade-up">
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><g clip-path="url(#clip-star3)"><path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"/></g><defs><clipPath id="clip-star3"><rect width="14" height="14" fill="white"/></clipPath></defs></svg>
              <span><?php esc_html_e( 'About Me', 'digitalgrowth' ); ?></span>
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><g clip-path="url(#clip-star4)"><path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"/></g><defs><clipPath id="clip-star4"><rect width="14" height="14" fill="white"/></clipPath></defs></svg>
            </div>
            <h2 class="heading text-50" data-aos="fade-up" data-aos-delay="50">
              <?php esc_html_e( 'Redesigning business for solutions', 'digitalgrowth' ); ?>
            </h2>
            <div class="text text-18" data-aos="fade-up" data-aos-delay="80">
              <?php esc_html_e( "Hello, I'm Savitha, an SEO consultant from Bangalore, India. Since 2018, I've been helping local and international brands improve their Google rankings and grow their online presence. I enjoy creating simple, effective SEO strategies that help businesses get seen by the right audience and achieve real results.", 'digitalgrowth' ); ?>
            </div>
            <ul class="list-block list-unstyled">
              <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="100">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none"><circle cx="30" cy="30" r="29.5" stroke="#1C2539"/><g clip-path="url(#clip-ambition)"><path d="M17.6645 23.0585C17.9536 23.0713 18.1997 22.8406 18.2097 22.5496L18.2916 20.171H19.8332L19.8752 23.414C19.8776 23.6041 19.9822 23.7782 20.149 23.8696C20.3153 23.913 20.499 23.9345 20.6804 23.8554L23.0793 22.3682C23.4423 22.1432 23.8385 21.9858 24.257 21.9001L26.0346 21.5365C26.2934 22.4812 26.9984 23.2578 27.9438 23.5951C28.4258 23.7671 28.9633 23.6936 29.3816 23.3988C29.7998 23.104 30.0495 22.6224 30.0495 22.1107V21.4152C31.3436 21.3001 32.5622 20.7633 33.5262 19.8745L35.1291 18.3968C35.3432 18.1994 35.3568 17.8657 35.1594 17.6515C34.9619 17.4374 34.6283 17.4239 34.4141 17.6212L32.8112 19.0989C32.0429 19.8073 31.0773 20.2424 30.0495 20.3541V19.4985C30.3096 19.3462 30.5363 19.1366 30.7068 18.8822C31.3934 17.857 31.5003 16.5734 30.9927 15.4487C30.8117 15.0655 30.7404 14.8867 30.5598 14.5411C30.6899 14.4487 30.7951 14.321 30.8593 14.1678C30.9929 13.8489 30.9252 13.4808 30.6867 13.2299C30.3259 12.8504 29.6593 12.3448 28.533 12.0921C27.3385 11.8242 26.3261 12.15 25.7719 12.9473C25.182 12.9439 24.3397 13.2015 23.9312 14.2172C23.3791 15.5897 23.8024 16.9465 25.0634 17.8468C25.223 17.958 25.5552 18.1053 25.8893 18.0809C26.0727 18.3439 26.2575 18.5924 26.5698 18.8814L26.0545 20.4559L24.0457 20.8668C23.5049 20.9774 22.9928 21.181 22.5236 21.4718L20.9177 22.4673L20.853 17.4732C20.8406 16.5142 20.0503 15.734 19.0912 15.734C18.1366 15.734 17.3631 16.4814 17.3303 17.4354C17.2871 18.691 17.1986 21.2624 17.1556 22.5134C17.1456 22.8044 17.3734 23.0485 17.6645 23.0585Z" fill="CurrentColor"/></g><defs><clipPath id="clip-ambition"><rect width="36" height="36" fill="white" transform="translate(12 12)"/></clipPath></defs></svg>
                <h3 class="title text text-22 fw-600"><?php esc_html_e( 'Ambition', 'digitalgrowth' ); ?></h3>
                <div class="text text-16"><?php esc_html_e( 'Businesses of all sizes thrive with our business solutions.', 'digitalgrowth' ); ?></div>
              </li>
              <li class="text-item text text-18" data-aos="fade-up" data-aos-delay="200">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none"><circle cx="30" cy="30" r="29.5" stroke="#1C2539"/><g clip-path="url(#clip-purpose)"><path d="M30.2367 26.3969C29.9451 26.3727 29.6871 26.591 29.6632 26.8839L29.5444 28.3407C29.3383 28.2575 29.1135 28.2112 28.878 28.2112H28.6278V26.8196C28.6278 26.1923 28.1175 25.6819 27.4902 25.6819H25.3008C23.6635 25.6819 22.0433 25.137 20.7387 24.1476L20.488 23.9575C20.2973 23.8129 20.062 23.7528 19.8255 23.7878C19.5889 23.823 19.3813 23.949 19.241 24.1428C18.5807 25.0547 18.2317 26.1318 18.2317 27.2577V28.2112H17.9815C17.7556 28.2112 17.5394 28.2539 17.3403 28.3307L16.8959 25.1623C16.8345 24.7242 16.852 24.2829 16.948 23.8506C17.0117 23.5639 16.831 23.2797 16.5442 23.216C16.2574 23.1521 15.9732 23.3331 15.9095 23.6198C15.7857 24.1768 15.7632 24.7454 15.8422 25.3101L16.387 29.1942C16.2649 29.4358 16.1956 29.7085 16.1956 29.9972C16.1956 30.9821 16.9968 31.7833 17.9817 31.7833H18.2478C18.3716 33.4531 19.2868 34.9052 20.6197 35.7654V37.1111L16.9487 38.8461C14.3185 40.089 12.6191 42.7718 12.6191 45.6807V47.4674C12.6191 47.7612 12.8573 47.9993 13.1511 47.9993C13.445 47.9993 13.6831 47.7612 13.6831 47.4674V45.6807C13.6831 43.1812 15.1433 40.8761 17.4031 39.808L20.7367 38.2325C21.073 39.3302 22.0957 40.1307 23.3021 40.1307C24.5084 40.1307 25.5312 39.3301 25.8674 38.2325L29.2013 39.8081C29.7198 38.8777 29.984 39.3243 29.9657 39.5886L29.6556 38.8461C29.4869 38.8533 29.3297 38.871 29.2013 39.808Z" fill="CurrentColor"/></g><defs><clipPath id="clip-purpose"><rect width="36" height="36" fill="white" transform="translate(12 12)"/></clipPath></defs></svg>
                <h3 class="title text text-22 fw-600"><?php esc_html_e( 'Purpose', 'digitalgrowth' ); ?></h3>
                <div class="text text-16"><?php esc_html_e( 'Businesses of all sizes thrive with our business solutions.', 'digitalgrowth' ); ?></div>
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
            <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><g clip-path="url(#clip-sv1)"><path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"/></g><defs><clipPath id="clip-sv1"><rect width="14" height="14" fill="white"/></clipPath></defs></svg>
            <span><?php esc_html_e( 'Our Services', 'digitalgrowth' ); ?></span>
            <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><g clip-path="url(#clip-sv2)"><path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"/></g><defs><clipPath id="clip-sv2"><rect width="14" height="14" fill="white"/></clipPath></defs></svg>
          </div>
          <h2 class="heading text-50" data-aos="fade-right" data-aos-delay="20"><?php esc_html_e( 'Solutions tailored to your business needs', 'digitalgrowth' ); ?></h2>
        </div>
        <div class="section-headings-right buttons" data-aos="fade-left" data-aos-delay="20">
          <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="button button--secondary" aria-label="More Services">
            <?php esc_html_e( 'More Services', 'digitalgrowth' ); ?>
            <span class="svg-wrapper"><svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/></svg></span>
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
                  <a href="<?php echo esc_url( home_url( '/service-details/' ) ); ?>" class="card-service radius18" aria-label="SEO Audit Services">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/service/s3.jpg" alt="SEO Audit" width="1000" height="596" loading="lazy">
                    <div class="card-service-content-absolute">
                      <div class="card-service-content">
                        <div class="card-working-process">
                          <h2 class="heading text-24 fw-500"><?php esc_html_e( 'SEO Audit Services', 'digitalgrowth' ); ?></h2>
                          <div class="card-icon-text card-icon-text-horizontal">
                            <div class="content">
                              <p class="text text-16"><?php esc_html_e( 'We offer this as a standalone service. Whether you\'re a business owner or SEO professional, we\'ve got you covered.', 'digitalgrowth' ); ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- Slide 2: Competitor Analysis -->
                <div class="swiper-slide">
                  <a href="<?php echo esc_url( home_url( '/service-details/' ) ); ?>" class="card-service radius18" aria-label="Competitor Analysis">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/service/s4.jpg" alt="Competitor Analysis" width="1000" height="596" loading="lazy">
                    <div class="card-service-content-absolute">
                      <div class="card-service-content">
                        <div class="card-working-process">
                          <h2 class="heading text-24 fw-500"><?php esc_html_e( 'Competitor Analysis Report', 'digitalgrowth' ); ?></h2>
                          <div class="card-icon-text card-icon-text-horizontal">
                            <div class="content">
                              <p class="text text-16"><?php esc_html_e( 'Know what\'s working for your competitors — and make it work even better for you.', 'digitalgrowth' ); ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- Slide 3: Backlinks -->
                <div class="swiper-slide">
                  <a href="<?php echo esc_url( home_url( '/service-details/' ) ); ?>" class="card-service radius18" aria-label="High-Authority Backlinks">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/service/s5.jpg" alt="Backlinks" width="1000" height="596" loading="lazy">
                    <div class="card-service-content-absolute">
                      <div class="card-service-content">
                        <div class="card-working-process">
                          <h2 class="heading text-24 fw-500"><?php esc_html_e( 'High-Authority Backlinks', 'digitalgrowth' ); ?></h2>
                          <div class="card-icon-text card-icon-text-horizontal">
                            <div class="content">
                              <p class="text text-16"><?php esc_html_e( 'Get premium backlinks from real, authoritative blogs in your niche. Hand-vetted publishers, genuine editorial placements.', 'digitalgrowth' ); ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- Slide 4: Risk Management -->
                <div class="swiper-slide">
                  <a href="<?php echo esc_url( home_url( '/service-details/' ) ); ?>" class="card-service radius18" aria-label="Risk Management">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/service/s7.jpg" alt="Risk Management" width="1000" height="596" loading="lazy">
                    <div class="card-service-content-absolute">
                      <div class="card-service-content">
                        <div class="card-working-process">
                          <h2 class="heading text-24 fw-500"><?php esc_html_e( 'Risk Management', 'digitalgrowth' ); ?></h2>
                          <div class="card-icon-text card-icon-text-horizontal">
                            <div class="content">
                              <p class="text text-16"><?php esc_html_e( 'Identifying, assessing, and mitigating risks to protect business growth and ensure stability.', 'digitalgrowth' ); ?></p>
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
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><g clip-path="url(#clip-hw1)"><path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"/></g><defs><clipPath id="clip-hw1"><rect width="14" height="14" fill="white"/></clipPath></defs></svg>
              <span><?php esc_html_e( 'How We Work', 'digitalgrowth' ); ?></span>
              <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><g clip-path="url(#clip-hw2)"><path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"/></g><defs><clipPath id="clip-hw2"><rect width="14" height="14" fill="white"/></clipPath></defs></svg>
            </div>
            <h2 class="heading text-50" data-aos="fade-up"><?php esc_html_e( '5 Reasons to Work With Us', 'digitalgrowth' ); ?></h2>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="testimonial-card-inner card-working-process-inner">

            <?php
            $reasons = array(
              array(
                'title' => __( 'All-in-one SEO support', 'digitalgrowth' ),
                'desc'  => __( 'From keyword research to backlinks and reports — we handle everything so you don\'t have to.', 'digitalgrowth' ),
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605"/>',
              ),
              array(
                'title' => __( 'No need for extra tools or writers', 'digitalgrowth' ),
                'desc'  => __( 'We use premium SEO tools and provide expert content writers for every project.', 'digitalgrowth' ),
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>',
              ),
              array(
                'title' => __( 'Results that matter', 'digitalgrowth' ),
                'desc'  => __( 'We focus on leads, visibility, and conversions — not just rankings or traffic numbers.', 'digitalgrowth' ),
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z"/>',
              ),
              array(
                'title' => __( 'Local + AI-powered SEO', 'digitalgrowth' ),
                'desc'  => __( 'Your business gets optimized for Google, ChatGPT, and local searches, keeping you ahead of the curve.', 'digitalgrowth' ),
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09Z"/>',
              ),
              array(
                'title' => __( 'Transparent and flexible', 'digitalgrowth' ),
                'desc'  => __( 'No long-term contracts. Clear reporting. You always know what we\'re doing and why.', 'digitalgrowth' ),
                'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>',
              ),
            );

            foreach ( $reasons as $reason ) : ?>
            <div class="card-working-process">
              <h2 class="heading text-24 fw-500"><?php echo esc_html( $reason['title'] ); ?></h2>
              <div class="card-icon-text card-icon-text-horizontal has-border">
                <div class="svg-wrapper">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                    <?php echo $reason['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                  </svg>
                </div>
                <div class="content">
                  <p class="text text-18"><?php echo esc_html( $reason['desc'] ); ?></p>
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
       5. LATEST BLOG POSTS
  ============================================= -->
  <div class="blog-post mt-100">
    <div class="container">
      <div class="section-headings" data-aos="fade-up">
        <div class="subheading text-20 subheading-bg">
          <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><g clip-path="url(#clip-blog1)"><path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"/></g><defs><clipPath id="clip-blog1"><rect width="14" height="14" fill="white"/></clipPath></defs></svg>
          <span><?php esc_html_e( 'Our Blog', 'digitalgrowth' ); ?></span>
          <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><g clip-path="url(#clip-blog2)"><path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 0 8.0588 0 7C0 5.9412 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"/></g><defs><clipPath id="clip-blog2"><rect width="14" height="14" fill="white"/></clipPath></defs></svg>
        </div>
        <h2 class="heading text-50" data-aos="fade-up" data-aos-delay="50"><?php esc_html_e( 'Latest from Our Blog', 'digitalgrowth' ); ?></h2>
      </div>

      <?php
      $blog_query = new WP_Query( array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'post_status'    => 'publish',
      ) );

      if ( $blog_query->have_posts() ) : ?>
      <div class="row blog-row" data-aos="fade-up">
        <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
        <div class="col-lg-4 col-md-6 col-12">
          <a href="<?php the_permalink(); ?>" class="card-blog radius18" aria-label="<?php the_title_attribute(); ?>">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'medium_large', array( 'loading' => 'lazy', 'alt' => get_the_title() ) ); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/blog/default.jpg" alt="<?php the_title_attribute(); ?>" loading="lazy">
            <?php endif; ?>
            <div class="card-blog-content">
              <div class="card-blog-meta text text-14">
                <span><?php echo get_the_date(); ?></span>
                <span class="separator">·</span>
                <span><?php the_author(); ?></span>
              </div>
              <h3 class="heading text-22 fw-500"><?php the_title(); ?></h3>
              <div class="text text-16"><?php echo wp_trim_words( get_the_excerpt(), 18, '…' ); ?></div>
              <div class="buttons">
                <div class="button button--primary">
                  <?php esc_html_e( 'Read More', 'digitalgrowth' ); ?>
                  <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z" fill="currentColor"/></svg>
                </div>
              </div>
            </div>
          </a>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <div class="buttons buttons-discover" data-aos="fade-up" data-aos-delay="100">
        <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="button button--primary" aria-label="Discover more blog posts">
          <?php esc_html_e( 'Discover More', 'digitalgrowth' ); ?>
          <span class="svg-wrapper"><svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="CurrentColor"/></svg></span>
        </a>
      </div>
      <?php else : ?>
      <p class="text text-18" style="text-align:center;padding:40px 0;"><?php esc_html_e( 'No blog posts yet. Check back soon!', 'digitalgrowth' ); ?></p>
      <?php endif; ?>

    </div>
  </div>

</main>

<?php get_footer(); ?>

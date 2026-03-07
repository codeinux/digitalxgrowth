<?php
/**
 * Template Name: Contact Page
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
                            <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
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
                            <span>
                                <?php esc_html_e('Expert Seo', 'digitalgrowth'); ?>
                            </span>
                            <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
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
                            <span class="decorated-text"><span>
                                    <?php esc_html_e('shadows', 'digitalgrowth'); ?>
                                </span></span>
                            <?php esc_html_e('of Google?', 'digitalgrowth'); ?>
                        </h1>
                        <p class="text text-24 fw-600" data-aos="fade-down" data-aos-delay="150">
                            <?php esc_html_e("Let's turn the lights on with smart SEO.", 'digitalgrowth'); ?>
                        </p>
                        <p class="text text-18" data-aos="fade-down" data-aos-delay="150">
                            <?php esc_html_e('Transform your business with AI-powered digital marketing that drives growth, engaging experiences, and scalable solutions for success.', 'digitalgrowth'); ?>
                        </p>
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
                            <a href="tel:<?php echo esc_attr(get_theme_mod('phone_number', '(307)555-0133')); ?>"
                                class="hero-phone-call" aria-label="Phone number" data-aos="fade-up"
                                data-aos-delay="50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"
                                    fill="none">
                                    <path
                                        d="M23.8337 3.67188C28.2097 3.67188 32.4066 5.41026 35.5009 8.50461C38.5953 11.599 40.3337 15.7958 40.3337 20.1719M23.8337 11.0052C26.2648 11.0052 28.5964 11.971 30.3155 13.6901C32.0346 15.4091 33.0003 17.7407 33.0003 20.1719M25.359 30.3799C25.7376 30.5538 26.1642 30.5935 26.5684 30.4925C26.9727 30.3915 27.3304 30.1559 27.5828 29.8244L28.2337 28.9719C28.5752 28.5165 29.0181 28.1469 29.5272 27.8923C30.0363 27.6377 30.5978 27.5052 31.167 27.5052H36.667C37.6395 27.5052 38.5721 27.8915 39.2597 28.5791C39.9473 29.2668 40.3337 30.1994 40.3337 31.1719V36.6719C40.3337 37.6443 39.9473 38.577 39.2597 39.2646C38.5721 39.9522 37.6395 40.3385 36.667 40.3385C27.9148 40.3385 19.5212 36.8618 13.3325 30.6731C7.14377 24.4844 3.66699 16.0907 3.66699 7.33854C3.66699 6.36608 4.0533 5.43345 4.74093 4.74582C5.42857 4.05818 6.3612 3.67188 7.33366 3.67188H12.8337C13.8061 3.67188 14.7387 4.05818 15.4264 4.74582C16.114 5.43345 16.5003 6.36608 16.5003 7.33854V12.8385C16.5003 13.4078 16.3678 13.9692 16.1132 14.4783C15.8587 14.9875 15.489 15.4303 15.0337 15.7719L14.1757 16.4154C13.8391 16.6724 13.6019 17.0379 13.5043 17.45C13.4067 17.8621 13.4548 18.2952 13.6403 18.6759C16.1459 23.765 20.2668 27.8807 25.359 30.3799Z"
                                        stroke="CurrentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="hero-call">
                                    <div class="text text-14">
                                        <?php esc_html_e('Need help?', 'digitalgrowth'); ?>
                                    </div>
                                    <div class="text text-16">
                                        <?php echo esc_html(get_theme_mod('phone_number', '(307) 555-0133')); ?>
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
                                <label for="ContactForm-name" class="visually-hidden">
                                    <?php esc_html_e('Your Name', 'digitalgrowth'); ?>
                                </label>
                                <input id="ContactForm-name" class="text-16" type="text"
                                    placeholder="<?php esc_attr_e('Your Name *', 'digitalgrowth'); ?>" name="name"
                                    required>
                            </div>
                            <div class="field">
                                <label for="ContactForm-email" class="visually-hidden">
                                    <?php esc_html_e('Business Email', 'digitalgrowth'); ?>
                                </label>
                                <input id="ContactForm-email" class="text-16" type="email"
                                    placeholder="<?php esc_attr_e('Business Email *', 'digitalgrowth'); ?>" name="email"
                                    required>
                            </div>
                            <div class="field">
                                <label for="ContactForm-phone" class="visually-hidden">
                                    <?php esc_html_e('Phone', 'digitalgrowth'); ?>
                                </label>
                                <input id="ContactForm-phone" class="text-16" type="tel"
                                    placeholder="<?php esc_attr_e('Phone *', 'digitalgrowth'); ?>" name="phone"
                                    required>
                            </div>
                            <div class="field">
                                <label for="ContactForm-service" class="visually-hidden">
                                    <?php esc_html_e('Service Type', 'digitalgrowth'); ?>
                                </label>
                                <input id="ContactForm-service" class="text-16" type="text"
                                    placeholder="<?php esc_attr_e('Service Type *', 'digitalgrowth'); ?>" name="service"
                                    required>
                            </div>
                            <div class="field">
                                <label for="ContactForm-body" class="visually-hidden">
                                    <?php esc_html_e('Your Comment', 'digitalgrowth'); ?>
                                </label>
                                <textarea id="ContactForm-body" class="text-16" rows="4"
                                    placeholder="<?php esc_attr_e('Your Comment *', 'digitalgrowth'); ?>" name="message"
                                    required></textarea>
                            </div>
                            <div class="form-message" id="dg-form-message"
                                style="display:none;padding:10px 0;font-weight:600;"></div>
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
</main>

<?php get_footer(); ?>
<?php
/**
 * Template Name: Backlink Services
 *
 * @package digitalgrowth
 */

get_header();
?>

<main>
    <!-- Hero / Intro -->
    <div class="why-choose-us section-padding">
        <div class="container">
            <div class="choose-top">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <picture class="choose-media radius18" data-aos="fade-right">
                            <source media="(max-width: 575px)"
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/why-choose-us/575.jpg">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/why-choose-us/1.jpg"
                                alt="<?php esc_attr_e('High-Authority Backlink Services', 'digitalgrowth'); ?>"
                                width="1000" height="742" loading="lazy">
                        </picture>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="choose-us-content section-headings">

                            <h2 class="heading text-50" data-aos="fade-up">
                                <?php esc_html_e('High-Authority Backlink Services in Bangalore — Build Links That Actually Move Rankings', 'digitalgrowth'); ?>
                            </h2>
                            <p class="text text-18" data-aos="fade-up">
                                <?php esc_html_e('Backlinks are still one of the most powerful ranking factors in SEO. But not all backlinks are created equal — a single link from a trusted, high-traffic website is worth more than hundreds of low-quality links that can actually hurt your rankings.', 'digitalgrowth'); ?>
                            </p>
                            <p class="text text-18" data-aos="fade-up">
                                <?php esc_html_e('At Digital X Growth, we secure genuine editorial backlinks from real, authoritative websites in your niche. No link farms, no PBNs, no shortcuts — just clean, high-quality placements that build your site\'s authority and help you rank higher on Google.', 'digitalgrowth'); ?>
                            </p>
                            <div class="buttons" data-aos="fade-up">
                                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button button--primary"
                                    aria-label="<?php esc_attr_e('View Backlink Plans', 'digitalgrowth'); ?>">
                                    <?php esc_html_e('View Backlink Plans', 'digitalgrowth'); ?>
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
        </div>
    </div>

    <!-- Why Backlinks Matter -->
    <div class="pricing-plan mt-100">
        <div class="container">
            <div class="section-headings text-center">
                <div class="subheading text-20 subheading-bg" data-aos="fade-up">
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 14 14" fill="none">
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
                    <span>
                        <?php esc_html_e('Why Backlinks Matter', 'digitalgrowth'); ?>
                    </span>
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 14 14" fill="none">
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
                    <?php esc_html_e('Why Backlinks Matter for Your Business', 'digitalgrowth'); ?>
                </h2>
                <p class="text text-18" data-aos="fade-up">
                    <?php esc_html_e('If your website isn\'t ranking despite good content and on-page SEO, chances are your backlink profile is the missing piece. Google uses backlinks as votes of confidence — the more authoritative sites that link to you, the more trustworthy your site appears in Google\'s eyes.', 'digitalgrowth'); ?>
                </p>
            </div>

            <!-- Benefits checklist -->
            <div class="section-content">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <?php
                        $benefits = array(
                            'Rank higher for competitive keywords',
                            'Build domain authority over time',
                            'Drive referral traffic from relevant, high-quality websites',
                            'Strengthen your overall SEO strategy for long-term growth',
                        );
                        $delay = 90;
                        ?>
                        <ul class="text-lists list-unstyled">
                            <?php foreach ($benefits as $benefit): ?>
                                <li class="text-item text text-18" data-aos="fade-up"
                                    data-aos-delay="<?php echo $delay; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                                        fill="none">
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
                                    <?php echo esc_html($benefit); ?>
                                </li>
                                <?php $delay += 50; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Plans -->
    <div class="pricing-plan mt-100">
        <div class="container">
            <div class="section-headings text-center">
                <div class="subheading text-20 subheading-bg" data-aos="fade-up">
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 14 14" fill="none">
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
                    <span>
                        <?php esc_html_e('Our Backlink Plans', 'digitalgrowth'); ?>
                    </span>
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 14 14" fill="none">
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
                    <?php esc_html_e('Choose Your Backlink Plan', 'digitalgrowth'); ?>
                </h2>
                <p class="text text-18" data-aos="fade-up">
                    <?php esc_html_e('All backlinks are hand-vetted, editorially placed, and sourced from real websites with genuine traffic. We never use automated tools or link networks.', 'digitalgrowth'); ?>
                </p>
            </div>

            <div class="section-content">
                <div class="pricing-cards">
                    <div class="row product-grid justify-content-center">

                        <?php
                        // Define the SVG checkmark once
                        $check_svg = '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"><g clip-path="url(#clip0_9088_5324)"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z" fill="CurrentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z" fill="CurrentColor"/></g><defs><clipPath><rect width="28" height="28" fill="white"/></clipPath></defs></svg>';

                        $plans = array(
                            array(
                                'name' => '🔹 Starter Backlink',
                                'badge' => 'DR 10+ | Monthly Traffic: 0–1k',
                                'desc' => 'Best for: New websites, local businesses, and startups building their backlink profile from the ground up.',
                                'price' => '₹5,499',
                                'active' => false,
                                'items' => array(
                                    'Minimum Domain Rating of 10+',
                                    'Site traffic of up to 1,000 monthly visitors',
                                    'Editorial, in-content placement (not footer or sidebar)',
                                    'Niche-relevant website',
                                    'Anchor text of your choice',
                                ),
                                'tagline' => 'A great entry point to start earning your site\'s first authoritative links — giving your domain the early authority boost it needs.',
                            ),
                            array(
                                'name' => '🔸 Growth Backlink ⭐ Most Popular',
                                'badge' => 'DR 30+ | Monthly Traffic: 1k–10k',
                                'desc' => 'Best for: Growing businesses and service-based brands that want to compete seriously in their niche.',
                                'price' => '₹10,499',
                                'active' => true,
                                'items' => array(
                                    'Minimum Domain Rating of 30+',
                                    'Site traffic between 1,000–10,000 monthly visitors',
                                    'Editorial, in-content placement',
                                    'Niche-relevant or closely related website',
                                    'Anchor text and target URL of your choice',
                                ),
                                'tagline' => 'Mid-tier, high-quality placements that send strong authority signals to Google and make a noticeable impact on your rankings.',
                            ),
                            array(
                                'name' => '🔷 Premium Backlink',
                                'badge' => 'DR 50+ | Monthly Traffic: 10k–50k',
                                'desc' => 'Best for: Established brands, e-commerce stores, and businesses targeting competitive, high-value keywords.',
                                'price' => '₹16,499',
                                'active' => false,
                                'items' => array(
                                    'Minimum Domain Rating of 50+',
                                    'Site traffic between 10,000–50,000 monthly visitors',
                                    'Editorial, in-content placement on a relevant page',
                                    'Niche-relevant website with genuine organic traffic',
                                    'Full control over anchor text and target URL',
                                ),
                                'tagline' => 'The kind of backlink that moves the needle — especially for competitive niches where weaker links simply won\'t cut it.',
                            ),
                        );

                        foreach ($plans as $plan):
                            ?>
                            <div class="col-12 col-lg-12 col-xl-4">
                                <div class="card-pricing radius18<?php echo $plan['active'] ? ' active' : ''; ?>">
                                    <div class="card-pricing-headings radius18" data-aos="fade-up">
                                        <h2 class="heading text-24">
                                            <?php echo esc_html($plan['name']); ?>
                                        </h2>
                                        <p class="text text-16" style="font-weight:600;opacity:.75;">
                                            <?php echo esc_html($plan['badge']); ?>
                                        </p>
                                        <p class="text text-16">
                                            <?php echo esc_html($plan['desc']); ?>
                                        </p>
                                        <div class="pricing-box">
                                            <span class="subheading text-50 fw-600">
                                                <?php echo esc_html($plan['price']); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="text-lists list-unstyled">
                                        <?php
                                        $item_delay = 90;
                                        foreach ($plan['items'] as $item):
                                            ?>
                                            <li class="text-item text text-18" data-aos="fade-up"
                                                data-aos-delay="<?php echo $item_delay; ?>">
                                                <?php echo $check_svg; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                                <?php echo esc_html($item); ?>
                                            </li>
                                            <?php
                                            $item_delay += 50;
                                        endforeach;
                                        ?>
                                    </ul>
                                    <p>
                                        <?php echo esc_html($plan['tagline']); ?>
                                    </p>
                                    <div class="buttons" data-aos="fade-up">
                                        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                                            class="button button--primary"
                                            aria-label="<?php esc_attr_e('Order Backlink', 'digitalgrowth'); ?>">
                                            <?php esc_html_e('Order Backlink', 'digitalgrowth'); ?>
                                            <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- What Makes Our Backlinks Different — Feature Card Grid -->
    <div class="mt-100" style="background:var(--color-primary,#1C2539);padding:80px 0;">
        <div class="container">

            <!-- Section heading -->
            <div class="section-headings text-center" style="margin-bottom:56px;">
                <div class="subheading text-20 subheading-bg" data-aos="fade-up" style="justify-content:center;color:#fff;opacity:.75;">
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#a)"><path d="M8.714 5.286C11.751 5.42 14 5.941 14 7s-2.249 1.58-5.286 1.714C8.58 11.751 8.059 14 7 14s-1.58-2.249-1.714-5.286C2.249 8.58 0 8.059 0 7s2.249-1.58 5.286-1.714C5.42 2.249 5.941 0 7 0s1.58 2.249 1.714 5.286Z" fill="currentColor"/></g>
                        <defs><clipPath id="a"><rect width="14" height="14" fill="currentColor"/></clipPath></defs>
                    </svg>
                    <span style="color:#fff;"><?php esc_html_e('What Makes Us Different', 'digitalgrowth'); ?></span>
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#a)"><path d="M8.714 5.286C11.751 5.42 14 5.941 14 7s-2.249 1.58-5.286 1.714C8.58 11.751 8.059 14 7 14s-1.58-2.249-1.714-5.286C2.249 8.58 0 8.059 0 7s2.249-1.58 5.286-1.714C5.42 2.249 5.941 0 7 0s1.58 2.249 1.714 5.286Z" fill="currentColor"/></g>
                    </svg>
                </div>
                <h2 class="heading text-50" data-aos="fade-up" style="color:#fff;">
                    <?php esc_html_e('What Makes Our Backlinks Different', 'digitalgrowth'); ?>
                </h2>
                <p class="text text-18" data-aos="fade-up" style="color:rgba(255,255,255,.7);max-width:640px;margin:0 auto;">
                    <?php esc_html_e('There are hundreds of link-building services out there — most selling low-quality placements that do nothing for your rankings. Here\'s what sets us apart.', 'digitalgrowth'); ?>
                </p>
            </div>

            <!-- 5 feature cards: 2 on top row, 3 on bottom row -->
            <?php
            $features = array(
                array(
                    'icon' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                    'title' => 'Hand-Vetted Publishers',
                    'desc'  => 'Every website is manually reviewed for quality, relevance, and traffic before we approach them for a placement.',
                ),
                array(
                    'icon' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                    'title' => 'No Link Farms or PBNs',
                    'desc'  => 'We only work with legitimate, independently owned websites. No private blog networks, no expired domain schemes.',
                ),
                array(
                    'icon' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                    'title' => 'Genuine Editorial Placements',
                    'desc'  => 'Your link appears naturally within real content — not in a sponsored post directory or hidden footer.',
                ),
                array(
                    'icon' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                    'title' => 'Transparent Reporting',
                    'desc'  => 'You\'ll receive a placement report with the live URL, anchor text, DR, and traffic data for every link delivered.',
                ),
                array(
                    'icon' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                    'title' => 'Niche Relevance',
                    'desc'  => 'We match your backlinks to websites relevant to your industry, so the links carry context as well as authority.',
                ),
            );
            ?>

            <!-- Row 1: 2 cards centred -->
            <div class="row justify-content-center" style="gap:0;margin-bottom:24px;">
                <?php foreach (array_slice($features, 0, 2) as $i => $f): ?>
                <div class="col-12 col-md-6 col-lg-5" style="padding:12px;" data-aos="fade-up" data-aos-delay="<?php echo $i * 100; ?>">
                    <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:18px;padding:36px 32px;height:100%;">
                        <div style="width:60px;height:60px;background:rgba(255,255,255,.1);border-radius:14px;display:flex;align-items:center;justify-content:center;margin-bottom:20px;color:#fff;">
                            <?php echo $f['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </div>
                        <h3 class="heading text-22" style="color:#fff;margin-bottom:12px;"><?php echo esc_html($f['title']); ?></h3>
                        <p class="text text-16" style="color:rgba(255,255,255,.65);margin:0;line-height:1.7;"><?php echo esc_html($f['desc']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Row 2: 3 cards -->
            <div class="row justify-content-center">
                <?php foreach (array_slice($features, 2, 3) as $i => $f): ?>
                <div class="col-12 col-md-6 col-lg-4" style="padding:12px;" data-aos="fade-up" data-aos-delay="<?php echo ($i + 2) * 100; ?>">
                    <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:18px;padding:36px 32px;height:100%;">
                        <div style="width:60px;height:60px;background:rgba(255,255,255,.1);border-radius:14px;display:flex;align-items:center;justify-content:center;margin-bottom:20px;color:#fff;">
                            <?php echo $f['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </div>
                        <h3 class="heading text-22" style="color:#fff;margin-bottom:12px;"><?php echo esc_html($f['title']); ?></h3>
                        <p class="text text-16" style="color:rgba(255,255,255,.65);margin:0;line-height:1.7;"><?php echo esc_html($f['desc']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

    <!-- Ready to Build CTA Banner -->
    <div style="background:linear-gradient(135deg,#2563eb 0%,#1C2539 100%);padding:80px 0;margin-top:0;">
        <div class="container">
            <div style="text-align:center;max-width:720px;margin:0 auto;">
                <h2 class="heading text-50" data-aos="fade-up" style="color:#fff;margin-bottom:20px;">
                    <?php esc_html_e('Ready to Build an Authority Backlink Profile?', 'digitalgrowth'); ?>
                </h2>
                <p class="text text-18" data-aos="fade-up" data-aos-delay="50" style="color:rgba(255,255,255,.8);margin-bottom:40px;line-height:1.8;">
                    <?php esc_html_e('Every day without quality backlinks is a day your competitors are pulling further ahead. Start building your site\'s authority today with genuine, high-quality placements that deliver lasting SEO results.', 'digitalgrowth'); ?>
                </p>
                <div class="buttons" data-aos="fade-up" data-aos-delay="100" style="justify-content:center;flex-wrap:wrap;gap:16px;">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                        class="button button--primary"
                        aria-label="<?php esc_attr_e('View Backlink Plans', 'digitalgrowth'); ?>"
                        style="background:#fff;color:#1C2539;">
                        <?php esc_html_e('View Backlink Plans', 'digitalgrowth'); ?>
                        <span class="svg-wrapper">
                            <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="CurrentColor"/>
                            </svg>
                        </span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                        class="button"
                        aria-label="<?php esc_attr_e('Book a Free Consultation', 'digitalgrowth'); ?>"
                        style="background:transparent;color:#fff;border:2px solid rgba(255,255,255,.5);">
                        <?php esc_html_e('Book a Free Consultation', 'digitalgrowth'); ?>
                        <span class="svg-wrapper">
                            <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="CurrentColor"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <div class="faq mt-100 section-padding">
        <div class="container">
            <div class="row faq-row">
                <div class="col-lg-6 col-12">
                    <div class="section-headings">
                        <div class="subheading text-20 subheading-bg" data-aos="fade-up">
                            <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
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
                            <span>
                                <?php esc_html_e('Questions', 'digitalgrowth'); ?>
                            </span>
                            <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
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
                            <?php esc_html_e('Frequently Asked Questions', 'digitalgrowth'); ?>
                        </h2>
                        <div class="text text-18" data-aos="fade-up" data-aos-delay="80">
                            <?php esc_html_e('Everything you need to know about our high-authority backlink service — answered clearly and honestly.', 'digitalgrowth'); ?>
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
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imgs/faq/question.png"
                                width="104" height="180" loading="lazy"
                                alt="<?php esc_attr_e('FAQ', 'digitalgrowth'); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <faq-accordion>
                        <div class="accordion-list">
                            <?php
                            $faqs = array(
                                array(
                                    'q' => 'How long does it take to get my backlink live?',
                                    'a' => 'Most placements go live within 10–15 business days. Premium placements may take slightly longer due to the higher vetting standards involved.'
                                ),
                                array(
                                    'q' => 'Can I order multiple backlinks at once?',
                                    'a' => 'Yes, and we recommend it. A natural backlink profile is built gradually over time. Many clients order a mix of Growth and Premium links each month as part of their ongoing SEO strategy.'
                                ),
                                array(
                                    'q' => 'Will these backlinks be permanent?',
                                    'a' => 'Yes. All placements are permanent editorial links — not rented or time-limited. If a link ever goes down within 90 days of delivery, we replace it at no extra cost.'
                                ),
                                array(
                                    'q' => 'Do you guarantee placement on a specific website?',
                                    'a' => 'We don\'t guarantee specific domains, as placements depend on publisher availability and editorial approval. However, we guarantee the DR, traffic range, and niche relevance as listed in your chosen plan.'
                                ),
                                array(
                                    'q' => 'Are these safe for Google?',
                                    'a' => 'Absolutely. All links are editorially placed on real websites with organic traffic. They follow Google\'s guidelines for natural link building and pose no penalty risk.'
                                ),
                                array(
                                    'q' => 'What information do I need to provide?',
                                    'a' => 'Just your target URL (the page you want the link to point to), your preferred anchor text, and a brief description of your business or niche. That\'s it — we handle everything else.'
                                ),
                                array(
                                    'q' => 'Do you offer custom packages for agencies or bulk orders?',
                                    'a' => 'Yes. If you need 5, 10, or 20+ backlinks per month, get in touch and we\'ll create a custom plan with preferential pricing.'
                                ),
                            );
                            $delay = 0;
                            foreach ($faqs as $faq):
                                ?>
                                <div class="accordion-block" data-aos="fade-up" <?php echo $delay ? ' data-aos-delay="' . $delay . '"' : ''; ?>>
                                    <div class="accordion-opener heading text-22">
                                        <?php echo esc_html($faq['q']); ?>
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
                                            <?php echo esc_html($faq['a']); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $delay += 50;
                            endforeach;
                            ?>
                    </faq-accordion>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
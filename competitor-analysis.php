<?php
/**
 * Template Name: Competitor Analysis
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
                                alt="<?php esc_attr_e('Competitor Analysis Services', 'digitalgrowth'); ?>" width="1000"
                                height="742" loading="lazy">
                        </picture>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="choose-us-content section-headings">

                            <h2 class="heading text-50" data-aos="fade-up">
                                <?php esc_html_e('Competitor Analysis Services in Bangalore — See Exactly How You Stack Up', 'digitalgrowth'); ?>
                            </h2>
                            <p class="text text-18" data-aos="fade-up">
                                <?php esc_html_e('Your competitors are ranking above you for a reason. The question is — do you know what that reason is?', 'digitalgrowth'); ?>
                            </p>
                            <p class="text text-18" data-aos="fade-up">
                                <?php esc_html_e('A professional competitor analysis takes the guesswork out of your SEO strategy. Instead of building in the dark, you\'ll see exactly which keywords your competitors rank for, where their traffic comes from, and what content and backlinks are driving their growth — so you can do it better.', 'digitalgrowth'); ?>
                            </p>
                            <p class="text text-18" data-aos="fade-up">
                                <?php esc_html_e('Whether you\'re a local business trying to outrank nearby competitors or a brand competing nationally, our manually reviewed competitor reports give you the intelligence to make smarter, faster decisions.', 'digitalgrowth'); ?>
                            </p>
                            <div class="buttons" data-aos="fade-up">
                                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button button--primary"
                                    aria-label="<?php esc_attr_e('Order Now', 'digitalgrowth'); ?>">
                                    <?php esc_html_e('Order Now', 'digitalgrowth'); ?>
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

    <!-- What's Included -->
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
                        <?php esc_html_e('What\'s Included', 'digitalgrowth'); ?>
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
                    <?php esc_html_e('What\'s Included in Every Report', 'digitalgrowth'); ?>
                </h2>
                <p class="text text-18" data-aos="fade-up">
                    <?php esc_html_e('Every competitor report covers the metrics that actually matter for outranking them.', 'digitalgrowth'); ?>
                </p>
            </div>

            <!-- Included items as a checklist -->
            <div class="section-content">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <?php
                        $included_items = array(
                            'Keyword & content gap analysis — discover high-value keywords your competitors rank for that you\'re missing',
                            'Backlink overview — see who\'s linking to them and identify link-building opportunities for your site',
                            'Traffic & ranking insights — understand where their organic traffic is coming from and which pages drive the most visits',
                            'Top-performing pages — learn which content is working best for them so you can create something better',
                            'On-page SEO comparison — benchmark your titles, headings, and content structure against theirs',
                        );
                        $delay = 90;
                        ?>
                        <ul class="text-lists list-unstyled">
                            <?php foreach ($included_items as $item): ?>
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
                                    <?php echo esc_html($item); ?>
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
                        <?php esc_html_e('Pricing Plan', 'digitalgrowth'); ?>
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
                    <?php esc_html_e('Choose Your Plan', 'digitalgrowth'); ?>
                </h2>
            </div>

            <div class="section-content">
                <div class="pricing-cards">
                    <div class="row product-grid justify-content-center">

                        <?php
                        // Define the SVG checkmark once
                        $check_svg = '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"><g clip-path="url(#clip0_9088_5324)"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.81362 13.0268C8.34112 12.7113 7.70994 12.783 7.31911 13.196C6.92886 13.6084 6.89211 14.2431 7.23336 14.6975L10.7334 19.3642C10.9445 19.6453 11.2712 19.8168 11.6229 19.8303C11.9741 19.8431 12.313 19.6972 12.5446 19.4324L20.7113 10.0991C21.1144 9.63883 21.0928 8.94525 20.6623 8.51008C20.2318 8.07492 19.5388 8.04692 19.0739 8.44475L11.5786 14.8696L8.81362 13.0268Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.9327 0.515625C6.52939 0.515625 0.519531 6.52549 0.519531 13.9288C0.519531 21.3321 6.52939 27.3419 13.9327 27.3419C21.336 27.3419 27.3458 21.3321 27.3458 13.9288C27.3458 6.52549 21.336 0.515625 13.9327 0.515625ZM13.9327 1.68166C20.6921 1.68166 26.1798 7.16938 26.1798 13.9288C26.1798 20.6882 20.6921 26.1759 13.9327 26.1759C7.17329 26.1759 1.68557 20.6882 1.68557 13.9288C1.68557 7.16938 7.17329 1.68166 13.9327 1.68166Z" fill="CurrentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M9.13872 12.5389C8.42939 12.0658 7.48265 12.1731 6.89698 12.792C6.31073 13.4115 6.25648 14.363 6.76806 15.0449L10.2681 19.7115C10.5848 20.1339 11.0748 20.3905 11.6021 20.4104C12.1295 20.4302 12.6376 20.2109 12.9852 19.8142L21.1519 10.4809C21.7562 9.78965 21.7241 8.74956 21.0784 8.0974C20.4326 7.44465 19.3926 7.40205 18.6961 7.99938L11.5356 14.1366L9.13872 12.5389ZM8.4918 13.5096L11.2562 15.3529C11.4738 15.4976 11.7608 15.4801 11.9597 15.3103L19.455 8.88547C19.6871 8.68597 20.0342 8.70055 20.2495 8.91814C20.4647 9.13514 20.4752 9.48222 20.274 9.71264L12.1073 19.046C11.9912 19.1778 11.8221 19.2513 11.6459 19.2443C11.4703 19.2379 11.307 19.1521 11.2014 19.0116L7.7014 14.3449C7.53106 14.1174 7.54913 13.8006 7.74455 13.5941C7.93938 13.3876 8.25497 13.3521 8.4918 13.5096Z" fill="CurrentColor"/></g><defs><clipPath><rect width="28" height="28" fill="white"/></clipPath></defs></svg>';

                        $plans = array(
                            array(
                                'name' => 'Starter — 5 Competitor Reports',
                                'desc' => 'Best for: Small businesses and local brands wanting a clear snapshot of their competitive landscape.',
                                'price' => '₹3,999',
                                'active' => false,
                                'items' => array(
                                    'Detailed reports on your top 5 competitors',
                                    'Keyword & content gap analysis',
                                    'Backlink overview per competitor',
                                    'Identify your biggest gaps and quickest wins',
                                ),
                                'tagline' => 'Enough to identify your biggest gaps and the quickest wins to act on right away.',
                            ),
                            array(
                                'name' => 'Growth — 10 Competitor Reports ⭐ Most Popular',
                                'desc' => 'Best for: Growing businesses and agencies that need deeper data to build a strong, long-term SEO strategy.',
                                'price' => '₹6,999',
                                'active' => true,
                                'items' => array(
                                    'Analyse 10 competitors across keywords, backlinks, traffic & content',
                                    'Comprehensive view of your entire niche',
                                    'Top-performing pages & on-page SEO comparison',
                                    'Identify where the real opportunities lie',
                                ),
                                'tagline' => '🚀 Our most popular plan — giving you a comprehensive view of your entire niche.',
                            ),
                            array(
                                'name' => 'Pro — 15 Competitor Reports',
                                'desc' => 'Best for: SEO professionals, e-commerce brands, and businesses in competitive industries that need the full picture.',
                                'price' => '₹9,999',
                                'active' => false,
                                'items' => array(
                                    'Deep analysis across 15 competitors',
                                    'Data-rich insights for dominant SEO strategy',
                                    'Ideal for agencies managing multiple clients',
                                    'Full keyword, backlink, traffic & content breakdown',
                                ),
                                'tagline' => 'For businesses serious about market leadership — detailed, data-rich, and built to dominate.',
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
                                            aria-label="<?php esc_attr_e('Order Reports', 'digitalgrowth'); ?>">
                                            <?php esc_html_e('Order Reports', 'digitalgrowth'); ?>
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

    <!-- Backlink Pricing Table -->
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
                        <?php esc_html_e('Backlink Plans', 'digitalgrowth'); ?>
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
                    <?php esc_html_e('High-Authority Backlink Packages', 'digitalgrowth'); ?>
                </h2>
            </div>

            <div class="section-content" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="table-responsive radius18" style="overflow-x:auto;">
                            <table class="table text text-18" style="width:100%;border-collapse:collapse;">
                                <thead>
                                    <tr style="background:var(--color-primary,#1C2539);color:#fff;">
                                        <th style="padding:16px 24px;text-align:left;">
                                            <?php esc_html_e('Plan', 'digitalgrowth'); ?>
                                        </th>
                                        <th style="padding:16px 24px;text-align:left;">
                                            <?php esc_html_e('Domain Rating', 'digitalgrowth'); ?>
                                        </th>
                                        <th style="padding:16px 24px;text-align:left;">
                                            <?php esc_html_e('Monthly Traffic', 'digitalgrowth'); ?>
                                        </th>
                                        <th style="padding:16px 24px;text-align:left;">
                                            <?php esc_html_e('Price (₹)', 'digitalgrowth'); ?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom:1px solid #e5e7eb;">
                                        <td style="padding:16px 24px;">
                                            <?php esc_html_e('Starter', 'digitalgrowth'); ?>
                                        </td>
                                        <td style="padding:16px 24px;">DR 10+</td>
                                        <td style="padding:16px 24px;">0–1k</td>
                                        <td style="padding:16px 24px;">₹5,499</td>
                                    </tr>
                                    <tr style="border-bottom:1px solid #e5e7eb;background:#f9fafb;">
                                        <td style="padding:16px 24px;">
                                            <?php esc_html_e('Growth', 'digitalgrowth'); ?>
                                        </td>
                                        <td style="padding:16px 24px;">DR 30+</td>
                                        <td style="padding:16px 24px;">1k–10k</td>
                                        <td style="padding:16px 24px;">₹10,499</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:16px 24px;">
                                            <?php esc_html_e('Premium', 'digitalgrowth'); ?>
                                        </td>
                                        <td style="padding:16px 24px;">DR 50+</td>
                                        <td style="padding:16px 24px;">10k–50k</td>
                                        <td style="padding:16px 24px;">₹16,499</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Our Reports Are Different / CTA -->
    <div class="not-sure mt-100">
        <div class="container">
            <div class="section-headings text-start">
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
                        <?php esc_html_e('Why Our Reports Are Different', 'digitalgrowth'); ?>
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
                    <?php esc_html_e('Ready to See What Your Competitors Are Hiding?', 'digitalgrowth'); ?>
                </h2>
                <p class="text text-18" data-aos="fade-up">
                    <?php esc_html_e('Most competitor analysis tools spit out raw data and leave you to figure out what it means. Every report we deliver is manually reviewed and verified before it reaches you — so you get clear, accurate insights you can act on immediately, not just numbers on a spreadsheet.', 'digitalgrowth'); ?>
                </p>
                <p class="text text-18" data-aos="fade-up">
                    <?php esc_html_e('Stop guessing and start strategising. Order your competitor analysis reports today and get a clear, data-backed advantage over your competition.', 'digitalgrowth'); ?>
                </p>

                <div class="buttons" data-aos="fade-up" data-aos-delay="100">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button button--primary"
                        aria-label="<?php esc_attr_e('Order Now', 'digitalgrowth'); ?>">
                        <?php esc_html_e('Order Now', 'digitalgrowth'); ?>
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
                            <?php esc_html_e('Everything you need to know about our competitor analysis services — answered clearly and honestly.', 'digitalgrowth'); ?>
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
                                    'q' => 'How long does it take to receive my reports?',
                                    'a' => 'Reports are typically delivered within 5–7 business days, depending on the package size. You\'ll receive them in a clean, easy-to-read PDF format.'
                                ),
                                array(
                                    'q' => 'How do you choose which competitors to analyse?',
                                    'a' => 'You can either provide a list of your top competitors or we can identify them for you based on who\'s currently ranking for your target keywords. Either way works.'
                                ),
                                array(
                                    'q' => 'Do I need any SEO knowledge to understand the reports?',
                                    'a' => 'No. Reports are written in plain language with clear explanations and actionable recommendations — no technical background needed.'
                                ),
                                array(
                                    'q' => 'Can I use these reports to brief my own SEO team or developer?',
                                    'a' => 'Absolutely. The reports are structured to be shared directly with your team, agency, or freelancer to implement the findings.'
                                ),
                                array(
                                    'q' => 'What if I need more than 15 competitor reports?',
                                    'a' => 'Get in touch, and we\'ll put together a custom package that fits your needs.'
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
    </div>


</main>

<?php get_footer(); ?>
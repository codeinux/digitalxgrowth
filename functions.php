<?php
/**
 * Digital Growth Theme functions and definitions
 *
 * @package digitalgrowth
 */

// -------------------------------------------------------
// Custom Nav Menu Walker — outputs nav-item + menu-link classes
// -------------------------------------------------------
class DigitalGrowth_Walker_Nav_Menu extends Walker_Nav_Menu
{

	/**
	 * Open a submenu wrapper — wraps <ul> inside the themed dropdown container.
	 */
	public function start_lvl(&$output, $depth = 0, $args = null)
	{
		$indent = str_repeat("\t", $depth);
		$output .= "\n{$indent}<div class=\"menu-absolute header-submenu submenu-color\">\n";
		$output .= "{$indent}\t<ul class=\"list-unstyled\">\n";
	}

	/**
	 * Close the submenu wrapper.
	 */
	public function end_lvl(&$output, $depth = 0, $args = null)
	{
		$indent = str_repeat("\t", $depth);
		$output .= "{$indent}\t</ul>\n";
		$output .= "{$indent}</div>\n";
	}

	public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
	{
		$item = $data_object;
		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		// Build CSS classes for <li>
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		$classes[] = 'nav-item';
		$has_children = in_array('menu-item-has-children', $classes, true);
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = $id ? ' id="' . esc_attr($id) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names . '>';

		// Build the link
		$atts = array();
		$atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
		$atts['target'] = !empty($item->target) ? $item->target : '';
		$atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
		$atts['href'] = !empty($item->url) ? $item->url : '';

		// Add our custom link classes
		$link_classes = 'menu-link';
		if ($depth === 0) {
			$link_classes .= ' menu-link-main';
			if ($has_children) {
				$link_classes .= ' menu-accrodion';
			}
		}
		$atts['class'] = $link_classes;

		$atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

		$attributes = '';
		foreach ($atts as $attr => $value) {
			if (!empty($value)) {
				$value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$title = apply_filters('the_title', $item->title, $item->ID);
		$title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

		// Dropdown arrow SVG for top-level items with children
		$dropdown_arrow = '';
		if ($depth === 0 && $has_children) {
			$dropdown_arrow = ' <svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 5L0 0H10L5 5Z" fill="currentColor" /></svg>';
		}

		$item_output = isset($args->before) ? $args->before : '';
		$item_output .= '<a' . $attributes . '>';
		$item_output .= (isset($args->link_before) ? $args->link_before : '') . $title . $dropdown_arrow . (isset($args->link_after) ? $args->link_after : '');
		$item_output .= '</a>';
		$item_output .= isset($args->after) ? $args->after : '';

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
}

if (!defined('ABSPATH')) {
	exit;
}

// -------------------------------------------------------
// Theme Setup
// -------------------------------------------------------
function digitalgrowth_setup()
{
	// Make theme available for translation
	load_theme_textdomain('digitalgrowth', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head
	add_theme_support('automatic-feed-links');

	// Let WordPress manage the document title
	add_theme_support('title-tag');

	// Post thumbnails
	add_theme_support('post-thumbnails');

	// HTML5 support
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	));

	// WooCommerce Support (crucial for custom template overrides)
	add_theme_support('woocommerce');

	// Register navigation menus
	register_nav_menus(array(
		'primary' => esc_html__('Primary Menu', 'digitalgrowth'),
		'services' => esc_html__('Services Menu', 'digitalgrowth'),
		'footer' => esc_html__('Footer Menu', 'digitalgrowth'),
	));

	// Custom logo support
	add_theme_support('custom-logo', array(
		'height' => 32,
		'width' => 189,
		'flex-width' => true,
		'flex-height' => true,
	));
}
add_action('after_setup_theme', 'digitalgrowth_setup');


// -------------------------------------------------------
// Enqueue Scripts & Styles
// -------------------------------------------------------
function digitalgrowth_scripts()
{
	// Google Fonts
	wp_enqueue_style(
		'digitalgrowth-google-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
		array(),
		null
	);

	// Vendor CSS (Bootstrap, Swiper, AOS, etc.)
	wp_enqueue_style(
		'digitalgrowth-vendor',
		get_template_directory_uri() . '/assets/css/vendor.css',
		array(),
		'1.0.0'
	);

	// Main Theme CSS
	wp_enqueue_style(
		'digitalgrowth-style',
		get_stylesheet_uri(),
		array('digitalgrowth-vendor'),
		'1.0.0'
	);

	// Template CSS (the original style.css from HTML template)
	wp_enqueue_style(
		'digitalgrowth-main-css',
		get_template_directory_uri() . '/assets/css/style.css',
		array('digitalgrowth-style'),
		'1.0.0'
	);

	// Vendor JS (Swiper, AOS, etc.) — depends on WP's built-in jQuery, no duplicate copy
	wp_enqueue_script(
		'digitalgrowth-vendor',
		get_template_directory_uri() . '/assets/js/vendor.js',
		array('jquery'),
		'1.0.0',
		true
	);

	// Main JS
	wp_enqueue_script(
		'digitalgrowth-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array('digitalgrowth-vendor'),
		'1.0.0',
		true
	);

	// Localise AJAX URL for contact form
	wp_localize_script('digitalgrowth-main', 'digitalgrowth_ajax', array(
		'ajax_url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('digitalgrowth_contact_nonce'),
	));

	// Comment reply script
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'digitalgrowth_scripts');


// -------------------------------------------------------
// Widget Areas / Sidebars
// -------------------------------------------------------
function digitalgrowth_widgets_init()
{
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'digitalgrowth'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Add widgets here.', 'digitalgrowth'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title heading text-22">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => esc_html__('Footer Widget Area', 'digitalgrowth'),
		'id' => 'footer-1',
		'description' => esc_html__('Footer widget area.', 'digitalgrowth'),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-heading heading text-22">',
		'after_title' => '</div>',
	));
}
add_action('widgets_init', 'digitalgrowth_widgets_init');


// -------------------------------------------------------
// Mail: Custom Sender Name & Email (replaces default "WordPress")
// -------------------------------------------------------
add_filter('wp_mail_from_name', function () {
	return 'Digital Growth';
});
add_filter('wp_mail_from', function () {
	return 'savitha@digitalxgrowth.com';
});

// -------------------------------------------------------
// Contact Form AJAX Handler
// -------------------------------------------------------
function digitalgrowth_handle_contact()
{
	// Verify nonce
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'digitalgrowth_contact_nonce')) {
		wp_send_json_error(array('message' => __('Security check failed.', 'digitalgrowth')));
	}

	$name = sanitize_text_field($_POST['name'] ?? '');
	$email = sanitize_email($_POST['email'] ?? '');
	$phone = sanitize_text_field($_POST['phone'] ?? '');
	$service = sanitize_text_field($_POST['service'] ?? '');
	$message = sanitize_textarea_field($_POST['message'] ?? '');

	if (empty($name) || empty($email) || empty($message)) {
		wp_send_json_error(array('message' => __('Please fill in all required fields.', 'digitalgrowth')));
	}

	if (!is_email($email)) {
		wp_send_json_error(array('message' => __('Please enter a valid email address.', 'digitalgrowth')));
	}

	$to = get_option('admin_email');
	$subject = sprintf(__('New Enquiry from %s - Digital Growth', 'digitalgrowth'), $name);
	$body = sprintf(
		"Name: %s\nEmail: %s\nPhone: %s\nService: %s\n\nMessage:\n%s",
		$name,
		$email,
		$phone,
		$service,
		$message
	);
	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'Reply-To: ' . $name . ' <' . $email . '>',
	);

	$sent = wp_mail($to, $subject, $body, $headers);

	if ($sent) {
		wp_send_json_success(array('message' => __('Thank you! Your message has been sent.', 'digitalgrowth')));
	} else {
		wp_send_json_error(array('message' => __('Failed to send message. Please try again.', 'digitalgrowth')));
	}
}
add_action('wp_ajax_digitalgrowth_contact', 'digitalgrowth_handle_contact');
add_action('wp_ajax_nopriv_digitalgrowth_contact', 'digitalgrowth_handle_contact');


// -------------------------------------------------------
// Custom excerpt length
// -------------------------------------------------------
function digitalgrowth_excerpt_length($length)
{
	return 25;
}
add_filter('excerpt_length', 'digitalgrowth_excerpt_length', 999);


// -------------------------------------------------------
// Add current-year shortcode helper (used in footer)
// -------------------------------------------------------
function digitalgrowth_current_year()
{
	return esc_html(wp_date('Y'));
}


// -------------------------------------------------------
// Custom body class
// -------------------------------------------------------
function digitalgrowth_body_classes($classes)
{
	if (is_singular() && !is_front_page()) {
		$classes[] = 'singular';
	}
	return $classes;
}
add_filter('body_class', 'digitalgrowth_body_classes');

// -------------------------------------------------------
// Custom comment callback — Digital Growth framework style
// NOTE: Walker_Comment opens AND closes the <li> itself.
// This callback only outputs the inner content.
// -------------------------------------------------------
function digitalgrowth_comment($comment, $args, $depth)
{
	$reply_svg = '<svg viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16927 13.6615L0.835938 6.99479L9.16927 0.328125V4.49479C13.7716 4.49479 17.5026 8.22579 17.5026 12.8281C17.5026 13.0555 17.4935 13.2809 17.4756 13.5037C16.2197 11.12 13.7176 9.49479 10.8359 9.49479H9.16927V13.6615Z" fill="currentColor"/></svg>';
	$replied_class = $depth > 1 ? ' replied-item' : '';
	?>
	<li id="comment-<?php comment_ID(); ?>" <?php comment_class('comments-item' . $replied_class, $comment); ?>
		data-aos="fade-up">

		<div class="commentator-img">
			<?php echo get_avatar($comment, 110, '', get_comment_author($comment), array('loading' => 'lazy')); ?>
		</div>

		<div class="comment-details">
			<div class="comments-top">
				<div class="comments-meta">
					<div class="comment-date text text-16">
						<?php echo esc_html(get_comment_date('M d, Y', $comment)); ?>
					</div>
					<h2 class="commentator-name heading text-22">
						<?php echo esc_html(get_comment_author($comment)); ?>
					</h2>
				</div>

				<?php if (comments_open() && $depth < $args['max_depth']): ?>
					<div class="button-reply text text-16 fw-500">
						<?php comment_reply_link(array_merge($args, array(
							'depth' => $depth,
							'max_depth' => $args['max_depth'],
							'before' => $reply_svg,
							'reply_text' => esc_html__('Reply', 'digitalgrowth'),
						))); ?>
					</div>
				<?php endif; ?>
			</div>

			<?php if ('0' == $comment->comment_approved): ?>
				<p class="comment-awaiting-moderation text text-16">
					<?php esc_html_e('Your comment is awaiting moderation.', 'digitalgrowth'); ?>
				</p>
			<?php endif; ?>

			<p class="comment-bottom text text-16">
				<?php comment_text(); ?>
			</p>
		</div>
		<?php
	// NOTE: closing </li> is intentionally omitted — WordPress walker adds it automatically.
}

// -------------------------------------------------------
// WooCommerce: Single-item cart (clear before adding new)
// -------------------------------------------------------
add_filter('woocommerce_add_to_cart_validation', 'digitalgrowth_clear_cart_before_add', 10, 3);
function digitalgrowth_clear_cart_before_add($passed, $product_id, $quantity)
{
	if (!WC()->cart->is_empty()) {
		WC()->cart->empty_cart();
	}
	return $passed;
}

// -------------------------------------------------------
// WooCommerce: Skip cart → go directly to Checkout
// -------------------------------------------------------
add_filter('woocommerce_add_to_cart_redirect', 'digitalgrowth_skip_cart_redirect_checkout');
function digitalgrowth_skip_cart_redirect_checkout()
{
	return wc_get_checkout_url();
}

// -------------------------------------------------------
// WooCommerce: Hide "Added to Cart" Message completely
// -------------------------------------------------------
add_filter('wc_add_to_cart_message_html', '__return_false');

// -------------------------------------------------------
// Security: Remove WP Version Number from Generator tag & Styles/Scripts
// -------------------------------------------------------
add_filter('the_generator', '__return_empty_string');
function digitalgrowth_remove_version_scripts_styles($src)
{
	if (strpos($src, 'ver=')) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter('style_loader_src', 'digitalgrowth_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'digitalgrowth_remove_version_scripts_styles', 9999);

// -------------------------------------------------------
// Security: Disable XML-RPC (Prevents DDoS and Brute Force Attacks)
// -------------------------------------------------------
add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

// -------------------------------------------------------
// Security: Add Basic Security Headers to Frontend
// -------------------------------------------------------
function digitalgrowth_add_security_headers()
{
	if (!is_admin()) {
		header("X-XSS-Protection: 1; mode=block");
		header("X-Content-Type-Options: nosniff");
		header("X-Frame-Options: SAMEORIGIN");
		header("Referrer-Policy: strict-origin-when-cross-origin");
	}
}
add_action('send_headers', 'digitalgrowth_add_security_headers');

// -------------------------------------------------------
// Performance: Remove Unused Block Library & Dashicons
// -------------------------------------------------------
function digitalgrowth_remove_unused_css()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('wc-blocks-style'); // WooCommerce block CSS

	// Remove Dashicons for non-logged-in users
	if (!is_admin() && !is_user_logged_in()) {
		wp_deregister_style('dashicons');
	}
}
add_action('wp_enqueue_scripts', 'digitalgrowth_remove_unused_css', 100);

// -------------------------------------------------------
// Performance: Move jQuery to Footer
// -------------------------------------------------------
function digitalgrowth_move_jquery_to_footer()
{
	if (!is_admin()) {
		wp_scripts()->add_data('jquery', 'group', 1);
		wp_scripts()->add_data('jquery-core', 'group', 1);
		wp_scripts()->add_data('jquery-migrate', 'group', 1);
	}
}
add_action('wp_enqueue_scripts', 'digitalgrowth_move_jquery_to_footer');

// -------------------------------------------------------
// Performance: Disable WooCommerce Scripts & Styles on Non-Shop Pages
// -------------------------------------------------------
// completely disable WooCommerce default styles array on non-shop pages
add_filter('woocommerce_enqueue_styles', function ($styles) {
	if (function_exists('is_woocommerce') && !is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page()) {
		return array();
	}
	return $styles;
});

function digitalgrowth_manage_woocommerce_styles()
{
	if (function_exists('is_woocommerce')) {
		// If not on Checkout, Cart, or Account page, strip WooCommerce overhead completely
		if (!is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page()) {
			$styles = array(
				'woocommerce-layout',
				'woocommerce-smallscreen',
				'woocommerce-general',
				'woocommerce-inline',
				'wc-blocks-vendors-style',
				'wc-blocks-style',
				'wc-blocks-packages-style'
			);
			foreach ($styles as $style) {
				wp_dequeue_style($style);
				wp_deregister_style($style);
			}

			wp_dequeue_script('wc-add-to-cart');
			wp_dequeue_script('wc-cart-fragments');
			wp_dequeue_script('woocommerce');
			wp_dequeue_script('jquery-blockui');
			wp_dequeue_script('jquery-placeholder');
			wp_dequeue_script('wc-order-attribution');
			wp_deregister_script('wc-order-attribution');
			wp_dequeue_script('sourcebuster-js');
		}
	}
}
add_action('wp_enqueue_scripts', 'digitalgrowth_manage_woocommerce_styles', 9999);

// -------------------------------------------------------
// WooCommerce: Remove Product Links (Virtual Packages)
// -------------------------------------------------------
add_filter('woocommerce_cart_item_permalink', '__return_false');
add_filter('woocommerce_order_item_permalink', '__return_false');

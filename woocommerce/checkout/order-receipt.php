<?php
/**
 * Checkout Order Receipt Template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/order-receipt.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.2.0
 */

if (!defined('ABSPATH')) {
	exit;
}
?>

<div class="row justify-content-center">
	<div class="col-lg-8">
		<div class="card-pricing radius18"
			style="background:#fff; border:1px solid #eee; padding:40px; box-shadow: 0px 10px 30px rgba(0,0,0,0.05); text-align: left;">
			<h3 class="heading text-30 mb-4"><?php esc_html_e('Order Payment Summary', 'digitalgrowth'); ?></h3>

			<div class="row mb-5" style="border-bottom:1px solid #eee; padding-bottom: 20px;">
				<div class="col-sm-3 col-6 mb-3">
					<div class="text text-14 text-uppercase fw-500 mb-1" style="color:#777; margin-bottom: 5px;">
						<?php esc_html_e('Order No.', 'woocommerce'); ?></div>
					<div class="heading text-20 fw-600"><?php echo esc_html($order->get_order_number()); ?></div>
				</div>
				<div class="col-sm-3 col-6 mb-3">
					<div class="text text-14 text-uppercase fw-500 mb-1" style="color:#777; margin-bottom: 5px;">
						<?php esc_html_e('Date', 'woocommerce'); ?></div>
					<div class="heading text-20 fw-600">
						<?php echo esc_html(wc_format_datetime($order->get_date_created())); ?></div>
				</div>
				<div class="col-sm-3 col-6 mb-3">
					<div class="text text-14 text-uppercase fw-500 mb-1" style="color:#777; margin-bottom: 5px;">
						<?php esc_html_e('Total', 'woocommerce'); ?></div>
					<div class="heading text-20 fw-600" style="color:#4CAF50;">
						<?php echo wp_kses_post($order->get_formatted_order_total()); ?></div>
				</div>
				<?php if ($order->get_payment_method_title()): ?>
					<div class="col-sm-3 col-6 mb-3">
						<div class="text text-14 text-uppercase fw-500 mb-1" style="color:#777; margin-bottom: 5px;">
							<?php esc_html_e('Method', 'woocommerce'); ?></div>
						<div class="heading text-20 fw-600">
							<?php echo wp_kses_post($order->get_payment_method_title()); ?></div>
					</div>
				<?php endif; ?>
			</div>

			<div class="payment-action-box" id="custom-payment-buttons" style="margin-top: 20px;">
				<?php do_action('woocommerce_receipt_' . $order->get_payment_method(), $order->get_id()); ?>
			</div>

			<div class="clear"></div>
		</div>
	</div>
</div>

<?php
/**
 * The template for displaying comments — Consulo template style.
 *
 * @package digitalgrowth
 */

if (post_password_required()) {
	return;
}
?>

<?php if (have_comments() || comments_open()): ?>

	<div class="comments-section scroll-margin" id="blog-comments">

		<?php if (have_comments()): ?>
			<h2 class="comment-section-heading heading text-36" data-aos="fade-up">
				<?php printf(
					esc_html(_n('%d Comment', '%d Comments', get_comments_number(), 'digitalgrowth')),
					(int) get_comments_number()
				); ?>
			</h2>

			<ul class="comments-area list-unstyled">
				<?php wp_list_comments(array(
					'callback' => 'digitalgrowth_comment',
					'style' => 'ul',
					'type' => 'all',
					'short_ping' => true,
				)); ?>
			</ul>

			<?php
			// Custom Consulo-style comments pagination
			$total_pages = get_comment_pages_count();
			if ($total_pages > 1):
				$current_page = get_query_var('cpage') ? (int) get_query_var('cpage') : 1;
				$prev_page = $current_page > 1 ? $current_page - 1 : null;
				$next_page = $current_page < $total_pages ? $current_page + 1 : null;
				?>
				<nav class="pagination" aria-label="<?php esc_attr_e('Comments pagination', 'digitalgrowth'); ?>">
					<ul class="list-unstyled pagintaion-list" data-aos="fade-up">

						<?php if ($prev_page): ?>
							<li>
								<a href="<?php echo esc_url(get_comments_pagenum_link($prev_page)); ?>" class="pagination-link"
									aria-label="<?php esc_attr_e('Previous page', 'digitalgrowth'); ?>">
									<svg viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M0.910711 5.40903C0.754485 5.5653 0.666722 5.77723 0.666722 5.9982C0.666722 6.21917 0.754485 6.43109 0.910711 6.58736L5.62488 11.3015C5.70175 11.3811 5.7937 11.4446 5.89537 11.4883C5.99704 11.532 6.10639 11.5549 6.21704 11.5559C6.32769 11.5569 6.43742 11.5358 6.53984 11.4939C6.64225 11.452 6.7353 11.3901 6.81354 11.3119C6.89178 11.2336 6.95366 11.1406 6.99556 11.0382C7.03746 10.9357 7.05855 10.826 7.05759 10.7154C7.05662 10.6047 7.03364 10.4954 6.98996 10.3937C6.94629 10.292 6.8828 10.2001 6.80321 10.1232L2.67821 5.9982L6.80321 1.8732C6.95501 1.71603 7.039 1.50553 7.03711 1.28703C7.03521 1.06853 6.94757 0.859522 6.79306 0.705015C6.63855 0.550508 6.42954 0.462868 6.21104 0.460969C5.99255 0.45907 5.78205 0.543066 5.62488 0.694864L0.910711 5.40903Z"
											fill="currentColor" />
									</svg>
								</a>
							</li>
						<?php endif; ?>

						<?php for ($i = 1; $i <= $total_pages; $i++): ?>
							<li>
								<a href="<?php echo esc_url(get_comments_pagenum_link($i)); ?>"
									class="pagination-link<?php echo $i === $current_page ? ' active' : ''; ?>"
									aria-label="<?php printf(esc_attr__('Page %d', 'digitalgrowth'), $i); ?>" <?php echo $i === $current_page ? 'aria-current="page"' : ''; ?>>
									<?php echo $i; ?>
								</a>
							</li>
						<?php endfor; ?>

						<?php if ($next_page): ?>
							<li>
								<a href="<?php echo esc_url(get_comments_pagenum_link($next_page)); ?>" class="pagination-link"
									aria-label="<?php esc_attr_e('Next page', 'digitalgrowth'); ?>">
									<svg viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M7.08929 5.40903C7.24552 5.5653 7.33328 5.77723 7.33328 5.9982C7.33328 6.21917 7.24552 6.43109 7.08929 6.58736L2.37512 11.3015C2.29825 11.3811 2.2063 11.4446 2.10463 11.4883C2.00296 11.532 1.89361 11.5549 1.78296 11.5559C1.67231 11.5569 1.56258 11.5358 1.46016 11.4939C1.35775 11.452 1.2647 11.3901 1.18646 11.3119C1.10822 11.2336 1.04634 11.1406 1.00444 11.0382C0.962537 10.9357 0.941453 10.826 0.942414 10.7154C0.943376 10.6047 0.966364 10.4954 1.01004 10.3937C1.05371 10.292 1.1172 10.2001 1.19679 10.1232L5.32179 5.9982L1.19679 1.8732C1.04499 1.71603 0.960996 1.50553 0.962894 1.28703C0.964793 1.06853 1.05243 0.859522 1.20694 0.705015C1.36145 0.550508 1.57046 0.462868 1.78896 0.460969C2.00745 0.45907 2.21795 0.543066 2.37512 0.694864L7.08929 5.40903Z"
											fill="currentColor" />
									</svg>
								</a>
							</li>
						<?php endif; ?>

					</ul>
				</nav>
			<?php endif; ?>


		<?php endif; ?>

		<?php if (comments_open()): ?>
			<div class="comments-form">
				<div class="comments-form-headings">
					<h2 class="heading text-36" data-aos="fade-up">
						<?php comment_form_title(esc_html__('Leave a Reply', 'digitalgrowth'), esc_html__('Leave a Reply', 'digitalgrowth')); ?>
					</h2>
					<p class="text text-16" data-aos="fade-up">
						<?php esc_html_e('Your email address will not be published. Required fields are marked *', 'digitalgrowth'); ?>
					</p>
				</div>

				<?php
				$reply_svg = '<svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path></svg>';

				comment_form(array(
					'class_form' => 'form contact-form',
					'class_submit' => 'button button--primary',
					'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" aria-label="' . esc_attr__('Post Comment', 'digitalgrowth') . '">' . esc_html__('Post Comment', 'digitalgrowth') . '<span class="svg-wrapper">' . $reply_svg . '</span></button>',
					'submit_field' => '<div class="form-button" data-aos="fade-up">%1$s %2$s</div>',
					'title_reply' => '',
					'title_reply_before' => '',
					'title_reply_after' => '',
					'cancel_reply_before' => '',
					'cancel_reply_after' => '',
					'must_log_in' => '<p class="must-log-in text text-16">' . sprintf(esc_html__('You must be <a href="%s">logged in</a> to post a comment.', 'digitalgrowth'), esc_url(wp_login_url(get_permalink()))) . '</p>',
					'comment_notes_before' => '',
					'comment_notes_after' => '',
					'fields' => array(
						'author' => '<div class="field w-half" data-aos="fade-up">
                          <label for="author" class="visually-hidden">' . esc_html__('Your Name', 'digitalgrowth') . '</label>
                          <input id="author" class="text text-16" name="author" type="text" placeholder="' . esc_attr__('Your Name *', 'digitalgrowth') . '" required>
                        </div>',
						'email' => '<div class="field w-half" data-aos="fade-up">
                          <label for="email" class="visually-hidden">' . esc_html__('Your Email', 'digitalgrowth') . '</label>
                          <input id="email" class="text text-16" name="email" type="email" placeholder="' . esc_attr__('Your Email *', 'digitalgrowth') . '" required>
                        </div>',
						'url' => '<div class="field" data-aos="fade-up">
                          <label for="url" class="visually-hidden">' . esc_html__('Your Website', 'digitalgrowth') . '</label>
                          <input id="url" class="text text-16" name="url" type="url" placeholder="' . esc_attr__('Your Website', 'digitalgrowth') . '">
                        </div>',
						'cookies' => '',
					),
					'comment_field' => '<div class="field" data-aos="fade-up">
                                     <label for="comment" class="visually-hidden">' . esc_html__('Type your message', 'digitalgrowth') . '</label>
                                     <textarea id="comment" class="text text-16" name="comment" rows="4" placeholder="' . esc_attr__('Type your message *', 'digitalgrowth') . '" required></textarea>
                                   </div>',
				));
				?>
			</div>
		<?php endif; ?>

	</div><!-- .comments-section -->

<?php endif; ?>
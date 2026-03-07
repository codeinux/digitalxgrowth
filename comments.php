<?php
/**
 * The template for displaying comments — Consulo template style.
 *
 * @package digitalgrowth
 */

if ( post_password_required() ) {
	return;
}
?>

<?php if ( have_comments() || comments_open() ) : ?>

<div class="comments-section scroll-margin" id="blog-comments">

  <?php if ( have_comments() ) : ?>
    <h2 class="comment-section-heading heading text-36" data-aos="fade-up">
      <?php printf(
        esc_html( _n( '%d Comment', '%d Comments', get_comments_number(), 'digitalgrowth' ) ),
        (int) get_comments_number()
      ); ?>
    </h2>

    <ul class="comments-area list-unstyled">
      <?php wp_list_comments( array(
        'callback'   => 'digitalgrowth_comment',
        'style'      => 'ul',
        'type'       => 'all',
        'short_ping' => true,
      ) ); ?>
    </ul>

    <?php the_comments_pagination( array(
      'prev_text' => esc_html__( '← Older Comments', 'digitalgrowth' ),
      'next_text' => esc_html__( 'Newer Comments →', 'digitalgrowth' ),
    ) ); ?>

  <?php endif; ?>

  <?php if ( comments_open() ) : ?>
    <div class="comments-form">
      <div class="comments-form-headings">
        <h2 class="heading text-36" data-aos="fade-up">
          <?php comment_form_title( esc_html__( 'Leave a Reply', 'digitalgrowth' ), esc_html__( 'Leave a Reply', 'digitalgrowth' ) ); ?>
        </h2>
        <p class="text text-16" data-aos="fade-up">
          <?php esc_html_e( 'Your email address will not be published. Required fields are marked *', 'digitalgrowth' ); ?>
        </p>
      </div>

      <?php
      $reply_svg = '<svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path></svg>';

      comment_form( array(
        'class_form'           => 'form contact-form',
        'class_submit'         => 'button button--primary',
        'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" aria-label="' . esc_attr__( 'Post Comment', 'digitalgrowth' ) . '">' . esc_html__( 'Post Comment', 'digitalgrowth' ) . '<span class="svg-wrapper">' . $reply_svg . '</span></button>',
        'submit_field'         => '<div class="form-button" data-aos="fade-up">%1$s %2$s</div>',
        'title_reply'          => '',
        'title_reply_before'   => '',
        'title_reply_after'    => '',
        'cancel_reply_before'  => '',
        'cancel_reply_after'   => '',
        'must_log_in'          => '<p class="must-log-in text text-16">' . sprintf( esc_html__( 'You must be <a href="%s">logged in</a> to post a comment.', 'digitalgrowth' ), esc_url( wp_login_url( get_permalink() ) ) ) . '</p>',
        'comment_notes_before' => '',
        'comment_notes_after'  => '',
        'fields'               => array(
          'author'  => '<div class="field w-half" data-aos="fade-up">
                          <label for="author" class="visually-hidden">' . esc_html__( 'Your Name', 'digitalgrowth' ) . '</label>
                          <input id="author" class="text text-16" name="author" type="text" placeholder="' . esc_attr__( 'Your Name *', 'digitalgrowth' ) . '" required>
                        </div>',
          'email'   => '<div class="field w-half" data-aos="fade-up">
                          <label for="email" class="visually-hidden">' . esc_html__( 'Your Email', 'digitalgrowth' ) . '</label>
                          <input id="email" class="text text-16" name="email" type="email" placeholder="' . esc_attr__( 'Your Email *', 'digitalgrowth' ) . '" required>
                        </div>',
          'url'     => '<div class="field" data-aos="fade-up">
                          <label for="url" class="visually-hidden">' . esc_html__( 'Your Website', 'digitalgrowth' ) . '</label>
                          <input id="url" class="text text-16" name="url" type="url" placeholder="' . esc_attr__( 'Your Website', 'digitalgrowth' ) . '">
                        </div>',
          'cookies' => '',
        ),
        'comment_field'        => '<div class="field" data-aos="fade-up">
                                     <label for="comment" class="visually-hidden">' . esc_html__( 'Type your message', 'digitalgrowth' ) . '</label>
                                     <textarea id="comment" class="text text-16" name="comment" rows="4" placeholder="' . esc_attr__( 'Type your message *', 'digitalgrowth' ) . '" required></textarea>
                                   </div>',
      ) );
      ?>
    </div>
  <?php endif; ?>

</div><!-- .comments-section -->

<?php endif; ?>

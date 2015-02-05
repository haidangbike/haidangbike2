<?php
	if (post_password_required()) {
		return;
	}
	if (have_comments()) : ?>
	<section id="comments">
		<h4><?php printf(_n('Có một thảo luận về bài viết &ldquo;%2$s&rdquo;', 'Có %1$s thảo luận trong bài viết &ldquo;%2$s&rdquo;', get_comments_number(), 'roots'), number_format_i18n(get_comments_number()), get_the_title()); ?></h4>
		<ol class="media-list">
			<?php wp_list_comments('callback=wordpressapi_comments'); ?>
		</ol>
		
		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
		<nav>
			<ul class="pager">
				<?php if (get_previous_comments_link()) : ?>
				<li class="previous"><?php previous_comments_link(__('&larr; Thảo luận cũ', 'roots')); ?></li>
				<?php endif; ?>
				<?php if (get_next_comments_link()) : ?>
				<li class="next"><?php next_comments_link(__('Thảo luận mới &rarr;', 'roots')); ?></li>
				<?php endif; ?>
			</ul>
		</nav>
		<?php endif; ?>
		<?php if (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>
		<div class="alert alert-warning">
			<?php _e('Comments bị đóng.', 'roots'); ?>
		</div>
		<?php endif; ?>
	</section><!-- /#comments -->
<?php endif; ?>

<?php if (!have_comments() && !comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>
  <section id="comments">
    <div class="alert alert-warning">
      <?php _e('Comments bị đóng', 'roots'); ?>
    </div>
  </section><!-- /#comments -->
<?php endif; ?>

<?php if (comments_open()) : ?>
  <section id="respond">
    <h3><?php comment_form_title(__('Để lại đánh giá', 'roots'), __('Trả lời tới %s', 'roots')); ?></h3>
    <p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>
    <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
      <p><?php printf(__('<a href="%s">Đăng nhập</a> để có thể thảo luận.', 'roots'), wp_login_url(get_permalink())); ?></p>
    <?php else : ?>
      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        <?php if (is_user_logged_in()) : ?>
          <p>
            <?php printf(__('Đăng nhập dưới tên: <a href="%s/wp-admin/profile.php">%s</a>.', 'roots'), get_option('siteurl'), $user_identity); ?>
            <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Đăng xuất', 'roots'); ?>"><?php _e('Đăng xuất &raquo;', 'roots'); ?></a>
          </p>
        <?php else : ?>
          <div class="form-group">
            <label for="author"><?php _e('Tên bạn: ', 'roots'); if ($req) _e(' (*)', 'roots'); ?></label>
            <input type="text" class="form-control" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" <?php if ($req) echo 'aria-required="true"'; ?>>
          </div>
          <div class="form-group">
            <label for="email"><?php _e('Email: ', 'roots'); if ($req) _e(' (*)', 'roots'); ?></label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" <?php if ($req) echo 'aria-required="true"'; ?>>
          </div>
          <div class="form-group">
            <label for="url"><?php _e('Website: ', 'roots'); ?></label>
            <input type="url" class="form-control" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22">
          </div>
        <?php endif; ?>
        <div class="form-group">
          <label for="comment"><?php _e('Nội dung', 'roots'); ?></label>
          <textarea name="comment" id="comment" class="form-control" rows="5" aria-required="true"></textarea>
        </div>
        <p><input name="submit" class="btn btn-warning" type="submit" id="submit" value="<?php _e('Gửi Comment', 'roots'); ?>"></p>
        <?php comment_id_fields(); ?>
        <?php do_action('comment_form', $post->ID); ?>
      </form>
    <?php endif; ?>
  </section><!-- /#respond -->
<?php endif; ?>

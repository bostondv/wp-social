<p class="submit cf-clearfix social-meta-broadcast-button <?php echo ($broadcasted ? 'broadcasted' : ''); ?>">
	<input type="submit" name="social_broadcast" value="<?php _e($button_text, Social::$i18n); ?>" />
	<input type="hidden" name="social_notify" value="1" />
	<a href="<?php echo esc_url(admin_url('profile.php#social-networks')); ?>"><?php _e('My Accounts', Social::$i18n); ?></a>
</p>
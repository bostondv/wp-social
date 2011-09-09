<?php
	if (empty($accounts) or !count($accounts)) {
		echo '<p class="mar-top-none">'.__('This post is scheduled to be published at a later date. However, it is not scheduled to be broadcasted to any of your social accounts.', Social::$i18n).'</p>';
	}
	else {
		echo '<p class="mar-top-none">'.__('This post is scheduled to be broadcasted to the following accounts.', Social::$i18n).'</p>';
		foreach ($accounts as $service => $_accounts) {
			if (isset($services[$service])) {
				$service = $services[$service];

				$output = '';
				foreach ($_accounts as $account) {
					if (($account = $service->account($account->id)) !== false) {
						$output .= Social_View::factory('wp-admin/post/meta/broadcast/parts/account', array('account' => $account));
					}
				}

				if (!empty($output)) {
					echo '<h4>'.$service->title().'</h4><ul style="margin:0 0 25px;">'.$output.'</ul>';
				}
			}
		}
	}
?>
<p class="submit" style="clear:both;padding:0;margin:20px 0 0;">
	<input type="submit" name="social_broadcast" value="<?php _e('Edit', Social::$i18n); ?>" />
	<input type="hidden" name="social_notify" value="1" />
	<a href="<?php echo esc_url(admin_url('profile.php#social-networks')); ?>" style="float:right;padding-top:8px;"><?php _e('My Accounts', Social::$i18n); ?></a>
</p>
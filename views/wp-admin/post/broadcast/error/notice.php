<?php

echo '<p>'.sprintf(__('Social failed to broadcast the blog post "%s" to one ore more of your Social accounts.', Social::$i18n), esc_html($post->post_title)).'</p>';

foreach ($accounts as $key => $items) {
	echo '<h4>'.$social->service($key)->title().':</h4><ul>';
	foreach ($items as $item) {
		echo '<li>'.esc_html($item->account->name()).' ('.$item->reason.')</li>';
	}
	echo '</ul>';
}
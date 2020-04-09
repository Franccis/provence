<?php

if (!function_exists('ambient_elated_register_widgets')) {

	function ambient_elated_register_widgets() {

		$widgets = array(
			'AmbientElatedClassAuthorInfoWidget',
			'AmbientElatedClassBlogListWidget',
			'AmbientElatedClassButtonWidget',
			'AmbientElatedClassFullScreenMenuOpener',
			'AmbientElatedClassIconWidget',
			'AmbientElatedClassImageWidget',
			'AmbientElatedClassSearchOpener',
			'AmbientElatedClassSeparatorWidget',
			'AmbientElatedClassSideAreaOpener',
			'AmbientElatedClassStickySidebar',
			'AmbientElatedClassSocialIconWidget'
		);

		foreach ($widgets as $widget) {
			register_widget($widget);
		}
	}
}

add_action('widgets_init', 'ambient_elated_register_widgets');
<?php
	/**"this is a very basic plugin";
	 * Plugin Name: Post Styler
	 * Description: styles blog posts
	 * version 1.0
	 **/

	function add_bootstrap_css() {
		wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
	}

	add_shortcode('bootstrap-css', 'add_bootstrap_css');

	function add_bootstrap_js() {
		wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
	}

	add_shortcode('bootstrap-js', 'add_bootstrap_js');

	function add_jquery() {
		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
	}

	add_shortcode('jquery', 'add_jquery');
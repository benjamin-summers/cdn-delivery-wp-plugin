<?php
	/**"use shortcodes to add stylesheets and scripts to page"
	 * Plugin Name: cdn fast delivery
	 * Description: adds stylesheets and scripts to pages and posts via shortcodes
	 * version 1.0
	 **/

	function add_menu() {
		add_menu_page('CDN FAST DELIVERY', 'CDN FAST', 'manage_options', 'cdn-fast', 'create_menu', '', 200);
	}

	add_action('admin_menu', 'add_menu');

	function create_menu() {
		?>
		<style>
            div.cdn-fast-header {
                text-align: center;
                width: 100%;
                line-height: 50px;
                background: #bfbfbf;
            }
            div.cdn-fast-moreInfo {
                text-align: center;
            }
			div.cdn-fast-main {
				text-align: center;
			}
            div.cdn-fast-footer {
                text-align: center;
            }
		</style>
        <div class="cdn-fast-header">
            <h1>This Plugin Is great For just adding a css library to a single page<br>
             or if you want to get even more specific a single post</h1>
        </div>
        <div class="cdn-fast-moreInfo">
            <h2>This plugin is also well suited for use with Page builders</h2>
            <h3>It goes great with Bold Page builder Its new on the scene</h3>
            <h4>but in my opinion its far better than elementor lite expecially considering it is free</h4>
            <h3><a href="https://wordpress.org/plugins/bold-page-builder/">Bold Page Builder</a></h3>
        </div>
        <hr>
        <hr>
		<div class="cdn-fast-main">
			<h1>Bootstrap</h1>
			<h3>Add Bootstrap css To any Page or to just a Post</h3>
			<h4>add the shortcode <code>[bootstrap-css]</code></h4>
			<h3>Add Bootstrap Js To any Page or to just a Post</h3>
			<h4>Add the shortcode <code>[bootstrap-js]</code></h4>
			<h1>Jquery</h1>
			<h3>Add Jquery min to any Page or to just a Post</h3>
			<h4>Add the shortcode <code>[jquery]</code></h4>
			<h1>Foundation</h1>
			<h3>Add Foundation Css To any Page or to just a Post</h3>
			<h4>Add the shortcode <code>[foundation-css]</code></h4>
			<h3>Add Foundation Js to any Page or to just a Post</h3>
			<h4>Add the shortcode <code>[foundation-js]</code></h4>
			<h1>Devicons Css</h1>
			<h3>Add Devicons css to any single Post or Page</h3>
			<h4>add the shortcode <code>[devicon-css]</code></h4>
		</div>
        <div class="cdn-fast-footer">
            <p>to check out more documentation on this plugin and to see more about me the author check out the link below</p>
            <p><a href="https://github.com/benjamin-summers/cdn-delivery-wp-plugin">CDN FAST</a></p>
        </div>
	<?php
	}

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

	function add_foundation_css() {
		wp_enqueue_style('foundation-css', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css');
	}

	add_shortcode('foundation-css', 'add_foundation_css');

	function add_foundation_js() {
		wp_enqueue_script('foundation-js', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js');
	}

	add_shortcode('foundation-js', 'add_foundation_js');


	function add_devicons_css() {
		wp_enqueue_script('devicon-css', 'https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css');
	}

	add_shortcode('devicon-css', 'add_devicons_css');

	function add_fontAwesome_css() {
		wp_enqueue_script('fontAwesome-css', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
	}

	add_shortcode('fontAwesome-css', 'add_fontAwesome_css');
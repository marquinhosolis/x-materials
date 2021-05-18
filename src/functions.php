<?php
    register_nav_menus( array(
        'mainNav' => 'Main Nav',
    ) );

	add_theme_support( 'post-thumbnails' );

	function create_post_type() {
		register_post_type( 'applications_pt',
			array(
				'labels' => array(
					'name' => __( 'Applications' ),
					'singular_name' => __( 'Application' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-hammer',
			'menu_position' => 5,
			)
		);
		register_post_type( 'media-kit-videos_pt',
			array(
				'labels' => array(
					'name' => __( 'Media Kit Videos' ),
					'singular_name' => __( 'Media Kit Video' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-video-alt',
			'menu_position' => 5,
			)
		);
		register_post_type( 'media-kit-release_pt',
			array(
				'labels' => array(
					'name' => __( 'Media Kit Releases' ),
					'singular_name' => __( 'Media Kit Release' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-format-aside',
			'menu_position' => 5,
			)
		);
	}
	add_action( 'init', 'create_post_type' );

	function custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	function new_excerpt_more( $more ) {
		return '';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	function slugify($text){
		// replace non letter or digits by -
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		// trim
		$text = trim($text, '-');

		// remove duplicate -
		$text = preg_replace('~-+~', '-', $text);

		// lowercase
		$text = strtolower($text);

		if (empty($text)) {
			return 'n-a';
		}

		return $text;
	}
?>
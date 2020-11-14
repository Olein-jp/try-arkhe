<?php
/**
 * Arkhe用子テーマ用 function.php
 */
defined( 'ABSPATH' ) || exit;


/**
 * 子テーマのパス, URI
 */
define( 'ARKHE_CHILD_PATH', get_stylesheet_directory() );
define( 'ARKHE_CHILD_URI', get_stylesheet_directory_uri() );


/**
 * style.css 読み込み
 */
add_action( 'wp_enqueue_scripts', function() {
	$time_stamp = date('mdgis');
	wp_enqueue_style( 'arkhe-child-style', ARKHE_CHILD_URI . '/style.css', [], $time_stamp );
} );

/**
 * arkhe_before_header
 */
add_action(
	'arkhe_before_header',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_before_header c-blinking" href="<?php echo esc_url( home_url( '/arkhe_before_header' ) ); ?>" role="button">arkhe_before_header</a>
		<?php
	}
);

/**
 * arkhe_after_header
 */
add_action(
	'arkhe_after_header',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_after_header c-blinking" href="<?php echo esc_url( home_url( '/arkhe_after_header' ) ); ?>" role="button">arkhe_after_header</a>
		<?php
	}
);

/**
 * arkhe_header_left_content
 */
add_action(
	'arkhe_header_left_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_header_left_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_header_left_content' ) ); ?>" role="button">arkhe_header_left_content</a>
		<?php
	}
);

/**
 * arkhe_header_right_content
 */
add_action(
	'arkhe_header_right_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_header_right_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_header_right_content' ) ); ?>" role="button">arkhe_header_right_content</a>
		<?php
	}
);

/**
 * arkhe_start_drawer_body
 */
add_action(
	'arkhe_start_drawer_body',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_start_drawer_body c-blinking" href="<?php echo esc_url( home_url( '/arkhe_start_drawer_body' ) ); ?>" role="button">arkhe_start_drawer_body</a>
		<?php
	}
);

/**
 * arkhe_after_drawer_nav
 */
add_action(
	'arkhe_after_drawer_nav',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_after_drawer_nav c-blinking" href="<?php echo esc_url( home_url( '/arkhe_after_drawer_nav' ) ); ?>" role="button">arkhe_after_drawer_nav</a>
		<?php
	}
);

/**
 * arkhe_end_drawer_body
 */
add_action(
	'arkhe_end_drawer_body',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_end_drawer_body c-blinking" href="<?php echo esc_url( home_url( '/arkhe_end_drawer_body' ) ); ?>" role="button">arkhe_end_drawer_body</a>
		<?php
	}
);

/**
 * arkhe_before_sidebar_content
 */
add_action(
	'arkhe_before_sidebar_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_before_sidebar_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_before_sidebar_content' ) ); ?>" role="button">arkhe_before_sidebar_content</a>
		<?php
	}
);

/**
 * arkhe_after_sidebar_content
 */
add_action(
	'arkhe_after_sidebar_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_after_sidebar_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_after_sidebar_content' ) ); ?>" role="button">arkhe_after_sidebar_content</a>
		<?php
	}
);

/**
 * arkhe_before_footer
 */
add_action(
	'arkhe_before_footer',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_before_footer c-blinking" href="<?php echo esc_url( home_url( '/arkhe_before_footer' ) ); ?>" role="button">arkhe_before_footer</a>
		<?php
	}
);

/**
 * arkhe_start_footer_inner
 */
add_action(
	'arkhe_start_footer_inner',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_start_footer_inner c-blinking" href="<?php echo esc_url( home_url( '/arkhe_start_footer_inner' ) ); ?>" role="button">arkhe_start_footer_inner</a>
		<?php
	}
);

/**
 * arkhe_start_footer_foot_content
 */
add_action(
	'arkhe_start_footer_foot_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_start_footer_foot_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_start_footer_foot_content' ) ); ?>" role="button">arkhe_start_footer_foot_content</a>
		<?php
	}
);

/**
 * arkhe_before_copyright
 */
add_action(
	'arkhe_before_copyright',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_before_copyright c-blinking" href="<?php echo esc_url( home_url( '/arkhe_before_copyright' ) ); ?>" role="button">arkhe_before_copyright</a>
		<?php
	}
);

/**
 * arkhe_after_copyright
 */
add_action(
	'arkhe_after_copyright',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_after_copyright c-blinking" href="<?php echo esc_url( home_url( '/arkhe_after_copyright' ) ); ?>" role="button">arkhe_after_copyright</a>
		<?php
	}
);

/**
 * arkhe_after_footer
 */
add_action(
	'arkhe_after_footer',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_after_footer c-blinking" href="<?php echo esc_url( home_url( '/arkhe_after_footer' ) ); ?>" role="button">arkhe_after_footer</a>
		<?php
	}
);

/**
 * arkhe_start_content
 */
add_action(
	'arkhe_start_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_start_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_start_content' ) ); ?>" role="button">arkhe_start_content</a>
		<?php
	}
);

/**
 * arkhe_before_front_content
 */
add_action(
	'arkhe_before_front_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_before_front_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_before_front_content' ) ); ?>" role="button">arkhe_before_front_content</a>
		<?php
	}
);

/**
 * arkhe_after_front_content
 */
add_action(
	'arkhe_after_front_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_after_front_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_after_front_content' ) ); ?>" role="button">arkhe_after_front_content</a>
		<?php
	}
);

/**
 * arkhe_before_home_content
 */
add_action(
	'arkhe_before_home_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_before_home_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_before_home_content' ) ); ?>" role="button">arkhe_before_home_content</a>
		<?php
	}
);

/**
 * arkhe_after_home_content
 */
add_action(
	'arkhe_after_home_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_after_home_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_after_home_content' ) ); ?>" role="button">arkhe_after_home_content</a>
		<?php
	}
);

/**
 * arkhe_start_page_main_content
 */
add_action(
	'arkhe_start_page_main_content',
	function( $the_id ) {
			?>
			<a class="c-ta-action-hook-point p-arkhe_start_page_main_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_start_page_main_content' ) ); ?>" role="button">arkhe_start_page_main_content / このページの記事IDは<?php echo esc_attr( $the_id ); ?>です</a>
		<?php
	},
	10,
	1
);

/**
 * arkhe_before_page_content
 */
add_action(
	'arkhe_before_page_content',
	function( $the_id ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_before_page_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_before_page_content' ) ); ?>" role="button">arkhe_before_page_content / このページの記事IDは<?php echo esc_attr( $the_id ); ?>です</a>
		<?php
	},
	10,
	1
);

/**
 * arkhe_after_page_content
 */
add_action(
	'arkhe_after_page_content',
	function( $the_id ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_after_page_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_after_page_content' ) ); ?>" role="button">arkhe_after_page_content / このページの記事IDは<?php echo esc_attr( $the_id ); ?>です</a>
		<?php
	},
	10,
	1
);

/**
 * arkhe_end_page_main_content
 */
add_action(
	'arkhe_end_page_main_content',
	function( $the_id ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_end_page_main_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_end_page_main_content' ) ); ?>" role="button">arkhe_end_page_main_content / このページの記事IDは<?php echo esc_attr( $the_id ); ?>です</a>
		<?php
	},
	10,
	1
);

/**
 * arkhe_page_subtitle
 */
add_action(
	'arkhe_page_subtitle',
	function( $the_id, $position ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_page_subtitle c-blinking" href="<?php echo esc_url( home_url( '/arkhe_page_subtitle' ) ); ?>" role="button">arkhe_page_subtitle / このページの記事IDは<?php echo esc_attr( $the_id ); ?>です</a>
		<?php
	},
	10,
	2
);

/**
 * arkhe_start_entry_main_content
 */
add_action(
	'arkhe_start_entry_main_content',
	function( $the_id ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_start_entry_main_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_start_entry_main_content' ) ); ?>" role="button">arkhe_start_entry_main_content / このページの記事IDは<?php echo esc_attr( $the_id ); ?>です</a>
		<?php
	},
	10,
	1
);

/**
 * arkhe_before_entry_content
 */
add_action(
	'arkhe_before_entry_content',
	function( $the_id ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_before_entry_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_before_entry_content' ) ); ?>" role="button">arkhe_before_entry_content / このページの記事IDは<?php echo esc_attr( $the_id ); ?>です</a>
		<?php
	},
	10,
	1
);

/**
 * arkhe_after_entry_content
 */
add_action(
	'arkhe_after_entry_content',
	function( $the_id ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_after_entry_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_after_entry_content' ) ); ?>" role="button">arkhe_after_entry_content / このページの記事IDは<?php echo esc_attr( $the_id ); ?>です</a>
		<?php
	},
	10,
	1
);

/**
 * arkhe_end_entry_main_content
 */
add_action(
	'arkhe_end_entry_main_content',
	function( $the_id ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_end_entry_main_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_end_entry_main_content' ) ); ?>" role="button">arkhe_end_entry_main_content / このページの記事IDは<?php echo esc_attr( $the_id ); ?>です</a>
		<?php
	},
	10,
	1
);

/**
 * arkhe_start_entry_foot
 */
add_action(
	'arkhe_start_entry_foot',
	function( $the_id ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_start_entry_foot c-blinking" href="<?php echo esc_url( home_url( '/arkhe_start_entry_foot' ) ); ?>" role="button">arkhe_start_entry_foot / このページの記事IDは<?php echo esc_attr( $the_id ); ?>です</a>
		<?php
	},
	10,
	1
);

/**
 * arkhe_end_entry_foot
 */
add_action(
	'arkhe_end_entry_foot',
	function( $the_id ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_end_entry_foot c-blinking" href="<?php echo esc_url( home_url( '/arkhe_end_entry_foot' ) ); ?>" role="button">arkhe_end_entry_foot / このページの記事IDは<?php echo esc_attr( $the_id ); ?>です</a>
		<?php
	},
	10,
	1
);

/**
 * arkhe_start_archive_main_content
 */
add_action(
	'arkhe_start_archive_main_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_start_archive_main_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_start_archive_main_content' ) ); ?>" role="button">arkhe_start_archive_main_content</a>
		<?php
	}
);

/**
 * arkhe_before_term_post_list
 */
add_action(
	'arkhe_before_term_post_list',
	function( $term_id ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_before_term_post_list c-blinking" href="<?php echo esc_url( home_url( '/arkhe_before_term_post_list' ) ); ?>" role="button">arkhe_before_term_post_list / タームIDは<?php echo esc_attr( $term_id ); ?></a>
		<?php
	},
	10,
	1
);

/**
 * arkhe_end_archive_main_content
 */
add_action(
	'arkhe_end_archive_main_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_end_archive_main_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_end_archive_main_content' ) ); ?>" role="button">arkhe_end_archive_main_content</a>
		<?php
	}
);

/**
 * arkhe_start_author_main_content
 */
add_action(
	'arkhe_start_author_main_content',
	function( $author_id ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_start_author_main_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_start_author_main_content' ) ); ?>" role="button">arkhe_start_author_main_content / 著者IDは<?php echo esc_attr( $author_id ); ?>です。</a>
		<?php
	}
);

/**
 * arkhe_before_author_post_list
 */
add_action(
	'arkhe_before_author_post_list',
	function( $author_id ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_before_author_post_list c-blinking" href="<?php echo esc_url( home_url( '/arkhe_before_author_post_list' ) ); ?>" role="button">arkhe_before_author_post_list / 著者IDは<?php echo esc_attr( $author_id ); ?>です。</a>
		<?php
	}
);

/**
 * arkhe_end_author_main_content
 */
add_action(
	'arkhe_end_author_main_content',
	function( $author_id ) {
		?>
		<a class="c-ta-action-hook-point p-arkhe_end_author_main_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_end_author_main_content' ) ); ?>" role="button">arkhe_end_author_main_content / 著者IDは<?php echo esc_attr( $author_id ); ?>です。</a>
		<?php
	}
);

/**
 * arkhe_start_search_main_content
 */
add_action(
	'arkhe_start_search_main_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_start_search_main_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_start_search_main_content' ) ); ?>" role="button">arkhe_start_search_main_content</a>
		<?php
	}
);

/**
 * arkhe_before_search_post_list
 */
add_action(
	'arkhe_before_search_post_list',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_before_search_post_list c-blinking" href="<?php echo esc_url( home_url( '/arkhe_before_search_post_list' ) ); ?>" role="button">arkhe_before_search_post_list</a>
		<?php
	}
);

/**
 * arkhe_end_search_main_content
 */
add_action(
	'arkhe_end_search_main_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_end_search_main_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_end_search_main_content' ) ); ?>" role="button">arkhe_end_search_main_content</a>
		<?php
	}
);

/**
 * arkhe_start_404_main_content
 */
add_action(
	'arkhe_start_404_main_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_start_404_main_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_start_404_main_content' ) ); ?>" role="button">arkhe_start_404_main_content</a>
		<?php
	}
);

/**
 * arkhe_before_404_content
 */
add_action(
	'arkhe_before_404_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_before_404_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_before_404_content' ) ); ?>" role="button">arkhe_before_404_content</a>
		<?php
	}
);

/**
 * arkhe_after_404_content
 */
add_action(
	'arkhe_after_404_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_after_404_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_after_404_content' ) ); ?>" role="button">arkhe_after_404_content</a>
		<?php
	}
);

/**
 * arkhe_end_404_main_content
 */
add_action(
	'arkhe_end_404_main_content',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_end_404_main_content c-blinking" href="<?php echo esc_url( home_url( '/arkhe_end_404_main_content' ) ); ?>" role="button">arkhe_end_404_main_content</a>
		<?php
	}
);

/**
 * arkhe_after_author_name
 */
add_action(
	'arkhe_after_author_name',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_after_author_name c-blinking" href="<?php echo esc_url( home_url( '/arkhe_after_author_name' ) ); ?>" role="button">arkhe_after_author_name</a>
		<?php
	}
);

/**
 * arkhe_author_links
 */
add_action(
	'arkhe_author_links',
	function() {
		?>
		<a class="c-ta-action-hook-point p-arkhe_author_links c-blinking" href="<?php echo esc_url( home_url( '/arkhe_author_links' ) ); ?>" role="button">arkhe_author_links</a>
		<?php
	}
);

/**
 * 投稿の下部に出力するCTA
 */
add_action(
	'arkhe_after_entry_content',
	function() {
		global $post;
		$slug = $post->post_name;
		if ( in_category( 'action-hook' ) || in_category( 'filter-hook' ) ) {
		?>
		<a class="p-search-hook-by-google-button" href="https://www.google.com/search?q=<?php echo $slug; ?>" target="_blank">「<?php echo $slug; ?>」をGoogleで検索する</a>
		<?php }
	},
	1,
	1
);
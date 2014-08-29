<?php 
add_action( 'after_setup_theme', 'et_setup_theme' );
if ( ! function_exists( 'et_setup_theme' ) ){
	function et_setup_theme(){
		global $themename, $shortname;
		$themename = "Evolution";
		$shortname = "Evolution";
	
		require_once(TEMPLATEPATH . '/epanel/custom_functions.php'); 

		require_once(TEMPLATEPATH . '/includes/functions/comments.php'); 

		require_once(TEMPLATEPATH . '/includes/functions/sidebars.php'); 

		load_theme_textdomain('Evolution',get_template_directory().'/lang');

		require_once(TEMPLATEPATH . '/epanel/options_evolution.php');

		require_once(TEMPLATEPATH . '/epanel/core_functions.php'); 

		require_once(TEMPLATEPATH . '/epanel/post_thumbnails_evolution.php');
		
		include(TEMPLATEPATH . '/includes/widgets.php');
		
		add_theme_support( 'automatic-feed-links' );
		
		add_action( 'wp_enqueue_scripts', 'et_add_responsive_shortcodes_css', 11 );
		
		add_action( 'pre_get_posts', 'et_home_posts_query' );
		
		add_action( 'et_epanel_changing_options', 'et_delete_featured_ids_cache' );
		add_action( 'delete_post', 'et_delete_featured_ids_cache' );	
		add_action( 'save_post', 'et_delete_featured_ids_cache' );
	}
}

function register_main_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu', 'Evolution' )
		)
	);
}
if (function_exists('register_nav_menus')) add_action( 'init', 'register_main_menus' );

// add Home link to the custom menu WP-Admin page
function et_add_home_link( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'et_add_home_link' );

add_action( 'wp_enqueue_scripts', 'et_load_evolution_scripts' );
function et_load_evolution_scripts(){
	if ( !is_admin() ){
		$template_dir = get_template_directory_uri();
		
		wp_enqueue_script('superfish', $template_dir . '/js/superfish.js', array('jquery'), '1.0', true);
		wp_enqueue_script('flexslider', $template_dir . '/js/jquery.flexslider-min.js', array('jquery'), '1.0', true);
		wp_enqueue_script('fitvids', $template_dir . '/js/jquery.fitvids.js', array('jquery'), '1.0', true);
		wp_enqueue_script('custom_script', $template_dir . '/js/custom.js', array('jquery'), '1.0', true);
	}
	if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
}

add_action( 'wp_head', 'et_flexslider_css' );
function et_flexslider_css(){
	echo '<link rel="stylesheet" href="' . esc_url( get_template_directory_uri() . '/css/flexslider.css' ) . '" type="text/css" media="screen" />';
}

add_action( 'wp_head', 'et_add_viewport_meta' );
function et_add_viewport_meta(){
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />';
}

if ( ! function_exists( 'et_list_pings' ) ){
	function et_list_pings($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment; ?>
		<li id="comment-<?php comment_ID(); ?>"><?php comment_author_link(); ?> - <?php comment_excerpt(); ?>
	<?php }
}

/**
 * Gets featured posts IDs from transient, if the transient doesn't exist - runs the query and stores IDs
 */
function et_get_featured_posts_ids(){
	if ( false === ( $et_featured_post_ids = get_transient( 'et_featured_post_ids' ) ) ) {
		$featured_query = new WP_Query( apply_filters( 'et_featured_post_args', array(
			'posts_per_page'	=> (int) et_get_option( 'evolution_featured_num' ),
			'cat'				=> get_catId( et_get_option( 'evolution_feat_cat' ) )
		) ) );

		if ( $featured_query->have_posts() ) {
			while ( $featured_query->have_posts() ) {
				$featured_query->the_post();
				
				$et_featured_post_ids[] = get_the_ID();
			}

			set_transient( 'et_featured_post_ids', $et_featured_post_ids );
		}
		
		wp_reset_postdata();
	}
	
	return $et_featured_post_ids;
}

/**
 * Filters the main query on homepage
 */
function et_home_posts_query( $query = false ) {
	/* Don't proceed if it's not homepage or the main query */
	if ( ! is_home() || ! is_a( $query, 'WP_Query' ) || ! $query->is_main_query() ) return;
	
	/* Exclude slider posts, if the slider is activated, pages are not featured and posts duplication is disabled in ePanel  */
	if ( 'on' == et_get_option( 'evolution_featured', 'on' ) && 'false' == et_get_option( 'evolution_use_pages', 'false' ) && 'false' == et_get_option( 'evolution_duplicate', 'on' ) )
		$query->set( 'post__not_in', et_get_featured_posts_ids() );
	
	if ( 'false' == et_get_option( 'evolution_blog_style', 'false' ) ) {
		if ( 'on' == et_get_option( 'evolution_display_recent_blog_posts', 'on' ) ) {
			$query->set( 'posts_per_page', et_get_option( 'evolution_posts_blog_num', '3' ) );
			$query->set( 'ignore_sticky_posts', 1 );
			$query->set( 'cat', get_cat_ID( et_get_option('evolution_home_recentblog_section') ) );
		}
		
		return;
	}
	
	/* Set the amount of posts per page on homepage */
	$query->set( 'posts_per_page', et_get_option( 'evolution_homepage_posts', '6' ) );
	
	/* Exclude categories set in ePanel */
	$exclude_categories = et_get_option( 'evolution_exlcats_recent', false );
	if ( $exclude_categories ) $query->set( 'category__not_in', $exclude_categories );
}

/**
 * Deletes featured posts IDs transient, when the user saves, resets ePanel settings, creates or moves posts to trash in WP-Admin
 */
function et_delete_featured_ids_cache(){
	if ( false !== get_transient( 'et_featured_post_ids' ) ) delete_transient( 'et_featured_post_ids' );
}

add_action( 'admin_enqueue_scripts', 'et_portfolio_fullwidth_delete' );
function et_portfolio_fullwidth_delete( $hook_suffix ) {
	if ( in_array($hook_suffix, array('post.php','post-new.php')) ) { 
		wp_enqueue_script('et-ptemplates-fwdelete', get_bloginfo('template_directory') . '/js/delete_fwidth.js', array('jquery'), '1.1', false);
	}
} ?>
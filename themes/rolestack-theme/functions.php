<?php
/**
 * rolestack-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rolestack-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rolestack_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on rolestack-theme, use a find and replace
		* to change 'rolestack-theme' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'rolestack-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'rolestack-theme' ),
			)
		);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

	// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'rolestack_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

	// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'rolestack_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rolestack_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rolestack_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'rolestack_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rolestack_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rolestack-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rolestack-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rolestack_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rolestack_theme_scripts() {
	wp_enqueue_style( 'rolestack-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'rolestack-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'rolestack-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rolestack_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require locate_template('/functions/backend-ss-styling.php');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function focus_cloud_sap_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'focus-cloud-sap' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'focus-cloud-sap' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'focus_cloud_sap_widgets_init' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

add_theme_support( 'job-manager-templates' );


// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => 'Case Studies',
		'singular_name'         => 'Case Study',
		'menu_name'             => 'Case Studies',
		'name_admin_bar'        => 'Case Study',
		'archives'              => 'Case Study Archives',
		'attributes'            => 'Case Study Attributes',
		'parent_item_colon'     => 'Parent Case Study:',
		'all_items'             => 'All Case Studies',
		'add_new_item'          => 'Add New Case Study',
		'add_new'               => 'Add New',
		'new_item'              => 'New Case Study',
		'edit_item'             => 'Edit Case Study',
		'update_item'           => 'Update Case Study',
		'view_item'             => 'View Case Study',
		'view_items'            => 'View Case Studies',
		'search_items'          => 'Search Case Study',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Case Study',
		'uploaded_to_this_item' => 'Uploaded to this Case Study',
		'items_list'            => 'Case Studies list',
		'items_list_navigation' => 'Case Studies list navigation',
		'filter_items_list'     => 'Filter Case Studies list',
	);
	$rewrite = array(
		'slug'                  => 'case-study',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Case Study',
		'description'           => 'Case Study Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		//'taxonomies'            => array( 'category'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'case_study', $args );

}
add_action( 'init', 'custom_post_type', 0 );

function cptui_register_my_taxes_casestudy_categories() {

	/**
	 * Taxonomy: Categories.
	 */

	$labels = [
		"name" => esc_html__( "Categories", "rolestack-theme" ),
		"singular_name" => esc_html__( "Category", "rolestack-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Categories", "rolestack-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'casestudies_cat', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => true,
		"rest_base" => "casestudies_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => true,
	];
	register_taxonomy( "casestudies_cat", [ "case_study" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_casestudy_categories' );



/*
* Creating a function to create our CPT
*/

function teamCustomPostType() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Team Members', 'Post Type General Name', 'twentytwentyone' ),
		'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'twentytwentyone' ),
		'menu_name'           => __( 'Team', 'twentytwentyone' ),
		'parent_item_colon'   => __( 'Parent Team', 'twentytwentyone' ),
		'all_items'           => __( 'All Team', 'twentytwentyone' ),
		'view_item'           => __( 'View Team', 'twentytwentyone' ),
		'add_new_item'        => __( 'Add New Team', 'twentytwentyone' ),
		'add_new'             => __( 'Add New', 'twentytwentyone' ),
		'edit_item'           => __( 'Edit Team', 'twentytwentyone' ),
		'update_item'         => __( 'Update Team', 'twentytwentyone' ),
		'search_items'        => __( 'Search Team', 'twentytwentyone' ),
		'not_found'           => __( 'Not Found', 'twentytwentyone' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'team', 'twentytwentyone' ),
		'description'         => __( 'TeamMembers', 'twentytwentyone' ),
		'labels'              => $labels,
        // Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
	register_post_type( 'team', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'teamCustomPostType', 0 );




function filter_projects() {

	$catSlug = $_POST['category'];

	$ajaxposts = new WP_Query([
		'post_type' => 'post',
		'category_name' => $catSlug,
		'post_status' => 'publish',
		'posts_per_page' => '-1',
		'paged' => 1,
	]);

	$response = '';

	if ($ajaxposts->have_posts()) : while ($ajaxposts->have_posts()) : $ajaxposts->the_post();
		$response .= include('project-list-item.php');

	endwhile;
endif;
wp_reset_postdata();
}

add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');


add_filter( 'wpjm_job_salary_currency', function( $currency ) {
	return;
} );

add_filter( 'wpjm_job_salary_unit', function( $unit ) {
	return;
} );

function create_roundabout_event_cpt() {
    $labels = array(
        'name' => _x('Roundabout Events', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Roundabout Event', 'Post Type Singular Name', 'text_domain'),
        // ... other labels ...
    );
    $args = array(
        'label' => __('Roundabout Event', 'text_domain'),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', ),
        'public' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_rest' => true,
        // ... other args ...
    );
    register_post_type('roundabout_event', $args);
}
add_action('init', 'create_roundabout_event_cpt', 0);

function create_roundabout_news_cpt() {
    $labels = array(
        'name' => _x('Roundabout News', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Roundabout News', 'Post Type Singular Name', 'text_domain'),
        // ... other labels ...
    );
    $args = array(
        'label' => __('Roundabout News', 'text_domain'),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', ),
        'public' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_rest' => true,
        // ... other args ...
    );
    register_post_type('roundabout_news', $args);
}
add_action('init', 'create_roundabout_news_cpt', 0);

add_filter( 'submit_job_form_fields', 'make_location_field_required' );

function make_location_field_required( $fields ) {
	$fields['job']['job_location']['required'] = true;
	return $fields;
}

add_filter( 'submit_job_form_fields', 'make_job_category_field_required' );

add_filter( 'job_manager_job_listing_data_fields', 'custom_hide_organization_name_field', 10, 1 );

add_filter( 'job_manager_job_listing_data_fields', 'custom_hide_organization_name_field', 10, 1 );

function custom_hide_organization_name_field( $fields ) {
    // Check if the organization name field exists and unset it
    if ( isset( $fields['_company_name'] ) ) {
        unset( $fields['_company_name'] );
    }
 if ( isset( $fields['_company_website'] ) ) {
        unset( $fields['_company_website'] );
    }
 if ( isset( $fields['_company_twitter'] ) ) {
        unset( $fields['_company_twitter'] );
    }
 if ( isset( $fields['_company_tagline'] ) ) {
        unset( $fields['_company_tagline'] );
    }
 if ( isset( $fields['_company_twitter'] ) ) {
        unset( $fields['_company_twitter'] );
    }
 if ( isset( $fields['_company_video'] ) ) {
        unset( $fields['_company_video'] );
    }

    return $fields;
}

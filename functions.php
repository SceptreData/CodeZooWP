<?php
/**
 * CodeZoo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CodeZoo
 */

if ( ! function_exists( 'codezoo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function codezoo_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'codezoo' ),
		) );	/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CodeZoo, use a find and replace
		 * to change 'codezoo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'codezoo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_image_size('');
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
      	register_nav_menus(array('jargon-site' => __( 'Jargon Site Navigation' )));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'codezoo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'codezoo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function codezoo_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'codezoo_content_width', 640 );
}
add_action( 'after_setup_theme', 'codezoo_content_width', 0 );
// Change default "Enter Title Here" text 
// for admin area based on CPT
add_action('admin_head', 'hide_wp_title_input');
function hide_wp_title_input()
{
    $screen = get_current_screen();
    if ($screen->id != 'food') {
        return;
    }
    ?>
    <style type="text/css">
      #post-body-content {
        display: none;
      }
    </style>
  <?php
}

// you'll want to rename your  function
// XXX => name of your post type
function save_post_type_handler($post_id) {

		$valid_post_types = ['articles', 'movies'];
    $post_type = get_post_type($post_id);
    if (!in_array($post_id, $valid_post_types)) {
        return;
    }

    // add the name of the filed that contains the 
    // title YYYYYY = name of the group that contains the
    // title
    $header = get_field('header');
    //ZZZZ ===> name of field for the title
    $post_title = $header['title'];
    $post_name = sanitize_title($post_title);
    $post = array(
        'ID' => $post_id,
        'post_name' => $post_name,
        'post_title' => $post_title
    );
		wp_update_post($post);

}


add_action('acf/save_post', 'save_post_type_handler'); 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function codezoo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'codezoo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'codezoo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'codezoo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function codezoo_scripts() {
  wp_enqueue_style( 'codezoo-style', get_stylesheet_uri() );


	wp_enqueue_script( 'codezoo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'codezoo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script("jargon-mobile-menu",  get_template_directory_uri() . "/js/mobile-menu.js");
	wp_enqueue_script( 'codezoo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'codezoo_scripts' );
add_filter('use_block_editor_for_post', '__return_false', 10);


function add_custom_post_types_to_archives($query)
{
    // We do not want unintended consequences.
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    if (is_category() || is_tag() && empty($query->query_vars['suppress_filters'])) {
        $cptui_post_types = cptui_get_post_type_slugs();

        $query->set(
            'post_type',
            array_merge(
                array('post'),
                $cptui_post_types
            )
        );
    }
}
add_filter('pre_get_posts', 'add_custom_post_types_to_archives');
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


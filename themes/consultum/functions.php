<?php
/**
 * consultum functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package consultum
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
function consultum_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on consultum, use a find and replace
		* to change 'consultum' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'consultum', get_template_directory() . '/languages' );

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
			'top' => esc_html__( 'Top menu', 'consultum' ),
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
			'consultum_custom_background_args',
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

  add_theme_support( 'editor-styles' );
  add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'consultum_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function consultum_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'consultum_content_width', 640 );
}
add_action( 'after_setup_theme', 'consultum_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function consultum_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'consultum' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'consultum' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'consultum_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function consultum_scripts() {
	// wp_enqueue_style( 'consultum-style', get_stylesheet_uri(), array(), _S_VERSION );
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/bootstrap-5.0.2-dist/css/bootstrap.min.css' );

  wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.css' );

  wp_enqueue_style( 'consultum-style', get_stylesheet_uri(), array(), time() );
	wp_style_add_data( 'consultum-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'consultum-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap-5.0.2-dist/js/bootstrap.min.js', array(), _S_VERSION, true );

  wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'consultum_scripts' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
// require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }

// ==============================
add_action('admin_enqueue_scripts', 'custom_admin_styles');

function custom_admin_styles() {
    wp_enqueue_style('custom-admin-styles', get_template_directory_uri() . '/assets/custom-admin-styles.css');
}

// ============================== add custom post type articles
require_once get_template_directory() . '/functions_parts/articles.php';

// ============================== add custom post type doctors
require_once get_template_directory() . '/functions_parts/doctors.php';

// ============================== add pattern and category (terapy) to gutenberg
require_once get_template_directory() . '/functions_parts/gutenberg_pattern_category.php';

// ==============================

function my_custom_block_categories( $categories, $post ) {
  $new_category = array(
      'slug'  => 'terapi-category',
      'title' => __( 'Terapi', 'text-domain' ),
      'icon'  => 'star',
  );
  $categories[] = $new_category;

  return $categories;
}

add_filter( 'block_categories_all', 'my_custom_block_categories', 10, 2 );


// ===============================

function register_custom_blocks() {
  $blocks = [
      [
          'name' => 'cards-1',
          'title' => __('Cards 1'),
          'template' => 'cards-1/template.php'
      ],
      [
        'name' => 'timeline-1',
        'title' => __('Time-line 1'),
        'template' => 'timeline-1/template.php'
      ],
      [
        'name' => 'articles-carousel-1',
        'title' => __('Articles-carousel 1'),
        'template' => 'articles-carousel-1/template.php'
      ],
      [
        'name' => 'articles-6-last-blocks',
        'title' => __('Articles 6 last blocks'),
        'template' => 'articles-6-last-blocks/template.php'
      ],
      [
        'name' => 'comments-carousel-1',
        'title' => __('Comments Carousel 1'),
        'template' => 'comments-carousel-1/template.php'
      ],
      [
        'name' => 'doctors-carousel-1',
        'title' => __('Doctors Carousel 1'),
        'template' => 'doctors-carousel-1/template.php'
      ],
      [
        'name' => 'doctors-4-block',
        'title' => __('Doctors 4 block'),
        'template' => 'doctors-4-block/template.php'
      ],
      [
        'name' => 'experience-two-block',
        'title' => __('Experience two block'),
        'template' => 'experience-two-block/template.php'
      ],
      [
        'name' => 'therapist-profile-1',
        'title' => __('Therapist profile 1'),
        'template' => 'therapist-profile-1/template.php'
      ],
  ];

  foreach ($blocks as $block) {
      acf_register_block_type(array(
          'name'              => $block['name'],
          'title'             => $block['title'],
          'description'       => __(''),
          'render_callback'   => 'render_custom_block',
          'category'          => 'terapi-category',
          'icon'              => 'admin-comments',
          'keywords'          => array('custom', 'acf'),
          'enqueue_assets'    => function () use ($block) {
              // wp_enqueue_style для каждого блока при необходимости
              // Пример: wp_enqueue_style($block['name'] . '-editor', get_template_directory_uri() . '/blocks/' . $block['name'] . '/editor.css');
            if ($block['name'] === 'articles-carousel-1'){
              wp_enqueue_script(
                'articles-carousel-1-script',
                get_template_directory_uri() . '/blocks/articles-carousel-1/script.js',
                array('jquery'),
                null,
                true
              );
            }
            if ($block['name'] === 'comments-carousel-1'){
              wp_enqueue_script(
                'comments-carousel-1',
                get_template_directory_uri() . '/blocks/comments-carousel-1/script.js',
                array('jquery'),
                null,
                true
              );
            }
            if ($block['name'] === 'doctors-carousel-1'){
              wp_enqueue_script(
                'doctors-carousel-1',
                get_template_directory_uri() . '/blocks/doctors-carousel-1/script.js',
                array('jquery'),
                null,
                true
              );
            }
          }
      ));
  }
}
add_action('acf/init', 'register_custom_blocks');

function render_custom_block($block) {
  $block_name = $block['name']; 
  
  $block_slug = str_replace('acf/', '', $block_name);

  $template_path = get_template_directory() . '/blocks/' . $block_slug . '/template.php';

  if (file_exists($template_path)) {
      include_once($template_path);
  } else {
      echo 'Template not found: ' . esc_html($template_path);
  }
}

// =============================== articles-carousel block logic
include_once get_template_directory() . '/blocks/articles-carousel-1/index.php';

include_once get_template_directory() . '/blocks/articles-6-last-blocks/index.php';

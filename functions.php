<?php
/**
 * batanaWeb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package batanaWeb
 */

if ( ! function_exists( 'batanaweb_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function batanaweb_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on batanaWeb, use a find and replace
		 * to change 'batanaweb' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'batanaweb', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'batanaweb' ),
			'menu-aux' => esc_html__( 'Menu Auxiliar', 'batanaweb' ),
			'menu-nosotros' => esc_html__( 'Menú Nosotros', 'batanaweb'),
			'menu-ayuda' => esc_html__( 'Menú Ayuda', 'batanaweb'),
			'menu-socialFooter' => esc_html__( 'Menú Social Footer', 'batanaweb'),
			'menu-tiendaOnline' => esc_html__( 'Menú Tienda Online Footer', 'batanaweb'),
		) );

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
		add_theme_support( 'custom-background', apply_filters( 'batanaweb_custom_background_args', array(
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
add_action( 'after_setup_theme', 'batanaweb_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function batanaweb_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'batanaweb_content_width', 640 );
}
add_action( 'after_setup_theme', 'batanaweb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function batanaweb_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'batanaweb' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'batanaweb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'batanaweb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function batanaweb_scripts() {
	wp_enqueue_style( 'batanaweb-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstracss', get_template_directory_uri() . '/css/bootstrap.css' );

	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );

	wp_enqueue_style( 'slickcss', get_template_directory_uri() . '/css/slick.css' );

	wp_enqueue_style( 'slicktheme', get_template_directory_uri() . '/css/slick-theme.css' );

	wp_enqueue_style( 'woocommerce', get_template_directory_uri() . '/css/woocommerce.css' );
		
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), true );

	wp_enqueue_script( 'slickjs', get_template_directory_uri() . '/js/slick.min.js' );

	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/main.js' );

	wp_enqueue_script( 'batanaweb-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'batanaweb-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'batanaweb_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );


//Eliminamos las valoraciones en los productos

add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
 function sb_woo_remove_reviews_tab($tabs)
 {
 unset($tabs['reviews']);
 return $tabs;
 }

 /**
* Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
*/
add_filter('wp_nav_menu_items', 'add_admin_link', 20, 2);
function add_admin_link($items, $args){
    if( $args->theme_location == 'menu-aux' ){
        $items .= '<li id="menu-item-220" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-220"><a  href="#" data-toggle="modal" data-target="#searchModal"><i class="fas fa-search"></i></a></li>';
    }
    return $items;
}



// For Woocommerce version 3 and above only
add_filter( 'woocommerce_loop_add_to_cart_link', 'filter_loop_add_to_cart_link', 20, 3 );
function filter_loop_add_to_cart_link( $button, $product, $args = array() ) {
    if( $product->is_in_stock() ) return $button;

    // HERE set your button text (when product is not on stock)
    $button_text = __('Ver Producto', 'woocommerce');

   	$url = get_permalink($product_id);

   	$toggle = __('modal', 'woocommerce');

   

    return sprintf( '<div class="add-to-cart-container">
    	                <a class="add_to_cart_button product_type_simple single_add_to_cart_button btn btn-outline-primary btn-block ajax_add_to_cart" href="%s" rel="nofollow" data-toggle="%s" >%s</a></div>', $url, $toogle, $button_text );
    
}

//intento agotado

add_action('woocommerce_after_add_to_cart_button','cmk_additional_button');
function cmk_additional_button()
{

// 	echo '<a href="cart/?add-to-cart=10233&variation_id=10234&attribute_pa_color=red" button type="submit" class="button alt">Sample 
// Pot</a>';

}



// The sold_out button replacement
function sold_out_button() {
    global $post, $product;

    ?>
    <div class="woocommerce-variation-add-to-cart variations_button">
        <?php
            do_action( 'woocommerce_before_add_to_cart_quantity' );

            woocommerce_quantity_input( array(
                'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : $product->get_min_purchase_quantity(),
            ) );

            do_action( 'woocommerce_after_add_to_cart_quantity' );
        ?>
        <a class="single_sold_out_button button alt disabled wc-variation-is-unavailable"><?php _e( "Sold Out", "woocommerce" ); ?></a>
    </div>
    <?php
}
<?php
/*-----------------------------------------------------------------------------------*/
/*Enqueue CSS Save css with different ? string every time*/
/*-----------------------------------------------------------------------------------*/
function bootstrapchile_theme_styles() {
		wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
}
add_action('wp_enqueue_scripts', 'bootstrapchile_theme_styles');
/*-----------------------------------------------------------------------------------*/
/*	Google fonts
/*-----------------------------------------------------------------------------------*/
function wpb_add_google_fonts() {
   wp_enqueue_style( 'wpb-google-fonts', '//fonts.googleapis.com/css?family=Lato:300,700|Prata', false );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
/*-----------------------------------------------------------------------------------*/
/*Enqueue JS*/
/*-----------------------------------------------------------------------------------*/
function bootstrapchile_scripts_styles() {
     wp_enqueue_script('jquery-tools', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '3', true);
}
add_action('wp_enqueue_scripts', 'bootstrapchile_scripts_styles');
/*-----------------------------------------------------------------------------------*/
/*Favicon*/
/*-----------------------------------------------------------------------------------*/
function blog_favicon() {
echo '<link rel="Shortcut Icon" type="image/x-icon" href=" '. get_template_directory_uri() .'/assets/img/favicon.png" />';
}
add_action('wp_head', 'blog_favicon');
/*-----------------------------------------------------------------------------------*/
/*Screenshot*/
/*-----------------------------------------------------------------------------------*/
function scrn_icon() {
echo '<link rel="image_src" href="'. get_template_directory_uri() .'/assets/img/screenshot.png" />';
}
add_action('wp_head', 'scrn_icon');
/*-----------------------------------------------------------------------------------*/
/*Thumbnail*/
/*-----------------------------------------------------------------------------------*/
if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );
/*-----------------------------------------------------------------------------------*/
/*Menu*/
/*-----------------------------------------------------------------------------------*/
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'bootstrapchiletheme'),
    'secondary' => __( 'Secondary Menu', 'bootstrapchiletheme' ),
    'third' => __( 'Third Menu', 'bootstrapchiletheme' ),
    'fourth' => __( 'Fourth Menu', 'bootstrapchiletheme' ),
    'fifth' => __( 'Fifth Menu', 'bootstrapchiletheme' )
));
/*-----------------------------------------------------------------------------------*/
/*Custom post SUPERDUPER*/
/*-----------------------------------------------------------------------------------*/
function superduper_post_type(){
	$args = array(
		'label'                 => __( 'New post type', 'bootstrapchiletheme' ),
		'description'           => __( 'Custom post type', 'bootstrapchiletheme' ),
		'supports'              => array( 'title' ),
		'menu_icon' 			=> 'dashicons-location-alt',
		'public'                => true,
		'menu_position'         => 5,
		'has_archive'           => true,
		'rewrite'               =>  array('slug' => 'superdupercustom'),
	);
	register_post_type( 'superduper', $args );
}
add_action('init', 'superduper_post_type');
/*-----------------------------------------------------------------------------------*/
/*Pagination*/
/*-----------------------------------------------------------------------------------*/
function numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="menu pagination border-bottom"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link('«') );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="current-menu-item"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link('»') );

	echo '</ul></div>' . "\n";

}
/*-----------------------------------------------------------------------------------*/
/*Sidebar*/
/*-----------------------------------------------------------------------------------*/
function bootstrapchile_register_sidebar() {

	register_sidebar( array(
		'name'	=> __('Sidebar principal', 'bootstrapchile'),
		'id'	=> 'main_sidebar',
		'description'	=>  __('Sidebar principal para los widgets', 'bootstrapchile'),
		'before_widget'	=>	'<div id="%1$s" class="menu_widget %2$s">',
		'after_widget'	=> 	'</div>',
		'before_title'	=>	'<p class="h2 border-bottom aside_title">',
		'after_title'	=>	'</p>',
	) );
}
add_action( 'widgets_init', 'bootstrapchile_register_sidebar' );
?>

<?php
// Enqueue the stylesheet
function wunder_hello_scripts() {
	wp_enqueue_style( 'wunder-hello-style', get_stylesheet_uri() );

	// Tailwind (local build if present)
	$tailwind_build_path = get_template_directory() . '/assets/css/output.css';
	$tailwind_build_url  = get_template_directory_uri() . '/assets/css/output.css';
	if ( file_exists( $tailwind_build_path ) ) {
		wp_enqueue_style( 'tailwind-output', $tailwind_build_url, array(), filemtime( $tailwind_build_path ) );
	}

	// Swiper CSS (for hero slider)
	wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper@10/swiper-bundle.min.css', array(), '10.0.0' );

	// Tailwind via CDN (play build for quick prototyping) — kept as fallback
	wp_enqueue_script( 'tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false );

	// Swiper JS
	wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper@10/swiper-bundle.min.js', array(), '10.0.0', true );

	// Theme JS (initializes slider, etc.)
	wp_enqueue_script( 'wunder-hello-theme', get_template_directory_uri() . '/assets/js/theme.js', array( 'swiper' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wunder_hello_scripts' );

// Theme setup: menus, supports
function wunder_hello_setup() {
	// Title tag support
	add_theme_support( 'title-tag' );

	// Post thumbnails if needed later
	add_theme_support( 'post-thumbnails' );

	// HTML5 markup support
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	// Register navigation menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wunder-hello' ),
		'footer'  => __( 'Footer Menu', 'wunder-hello' ),
	) );
}
add_action( 'after_setup_theme', 'wunder_hello_setup' );

// Widget areas: footer columns
function wunder_hello_widgets_init() {
	for ( $i = 1; $i <= 3; $i++ ) {
		register_sidebar( array(
			'name'          => sprintf( __( 'Footer Column %d', 'wunder-hello' ), $i ),
			'id'            => 'footer-' . $i,
			'description'   => __( 'Add widgets here to appear in the footer.', 'wunder-hello' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}

	// Main sidebar
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wunder-hello' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in the sidebar.', 'wunder-hello' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wunder_hello_widgets_init' );

// Projects Custom Post Type
function wunder_hello_register_cpt_projects() {
	$labels = array(
		'name'               => _x( 'Projects', 'post type general name', 'wunder-hello' ),
		'singular_name'      => _x( 'Project', 'post type singular name', 'wunder-hello' ),
		'menu_name'          => _x( 'Projects', 'admin menu', 'wunder-hello' ),
		'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'wunder-hello' ),
		'add_new'            => _x( 'Add New', 'project', 'wunder-hello' ),
		'add_new_item'       => __( 'Add New Project', 'wunder-hello' ),
		'new_item'           => __( 'New Project', 'wunder-hello' ),
		'edit_item'          => __( 'Edit Project', 'wunder-hello' ),
		'view_item'          => __( 'View Project', 'wunder-hello' ),
		'all_items'          => __( 'All Projects', 'wunder-hello' ),
		'search_items'       => __( 'Search Projects', 'wunder-hello' ),
		'not_found'          => __( 'No projects found.', 'wunder-hello' ),
		'not_found_in_trash' => __( 'No projects found in Trash.', 'wunder-hello' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'projects' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'show_in_rest'       => true,
	);
	register_post_type( 'project', $args );
}
add_action( 'init', 'wunder_hello_register_cpt_projects' );

// Project URL Meta Box
function wunder_hello_project_meta_box() {
	add_meta_box(
		'wunder_project_url',
		__( 'Project URL', 'wunder-hello' ),
		'wunder_hello_project_url_callback',
		'project',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'wunder_hello_project_meta_box' );

function wunder_hello_project_url_callback( $post ) {
	wp_nonce_field( 'wunder_project_url_nonce', 'wunder_project_url_nonce_field' );
	$value = get_post_meta( $post->ID, '_project_url', true );
	echo '<label for="wunder_project_url_field">' . esc_html__( 'Enter the external project URL', 'wunder-hello' ) . '</label>';
	echo '<input style="width:100%;margin-top:6px;" type="url" id="wunder_project_url_field" name="wunder_project_url_field" value="' . esc_attr( $value ) . '" placeholder="https://example.com" />';
}

function wunder_hello_save_project_url( $post_id ) {
	if ( ! isset( $_POST['wunder_project_url_nonce_field'] ) || ! wp_verify_nonce( $_POST['wunder_project_url_nonce_field'], 'wunder_project_url_nonce' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( isset( $_POST['post_type'] ) && 'project' === $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}
	if ( isset( $_POST['wunder_project_url_field'] ) ) {
		update_post_meta( $post_id, '_project_url', esc_url_raw( $_POST['wunder_project_url_field'] ) );
	}
}
add_action( 'save_post', 'wunder_hello_save_project_url' );
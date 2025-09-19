<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>
<a class="skip-link screen-reader-text" href="#primary-content"><?php _e( 'Skip to content', 'wunder-hello' ); ?></a>
<header class="site-header border-b border-gray-200 bg-white/80 backdrop-blur">
	<div class="container mx-auto px-4 py-3 flex items-center justify-between gap-4">
		<div class="site-branding">
			<h1 class="site-title m-0 text-lg font-semibold"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<?php if ( get_bloginfo( 'description' ) ) : ?>
				<p class="site-description text-sm text-gray-600 m-0"><?php bloginfo( 'description' ); ?></p>
			<?php endif; ?>
		</div>
		<nav class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'wunder-hello' ); ?>">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'      => 'primary-menu',
					'fallback_cb'     => function() {
						echo '<ul class="primary-menu"><li><a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">' . esc_html__( 'Set up your menu', 'wunder-hello' ) . '</a></li></ul>';
					},
				) );
			?>
		</nav>
	</div>
</header>
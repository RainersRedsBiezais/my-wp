<?php wp_footer(); ?>

<footer class="site-footer" role="contentinfo">
	<div class="container mx-auto px-4">
		<div class="footer-widgets">
			<div class="footer-column">
				<?php if ( is_active_sidebar( 'footer-1' ) ) { dynamic_sidebar( 'footer-1' ); } ?>
			</div>
			<div class="footer-column">
				<?php if ( is_active_sidebar( 'footer-2' ) ) { dynamic_sidebar( 'footer-2' ); } ?>
			</div>
			<div class="footer-column footer-social">
				<?php if ( is_active_sidebar( 'footer-3' ) ) { dynamic_sidebar( 'footer-3' ); } ?>
			</div>
		</div>
		<div class="footer-bottom mt-4">
			<div class="footer-copyright">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php _e( 'All rights reserved.', 'wunder-hello' ); ?></div>
			<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'wunder-hello' ); ?>">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'      => 'footer-menu',
						'depth'           => 1,
					) );
				?>
			</nav>
		</div>
	</div>
</footer>

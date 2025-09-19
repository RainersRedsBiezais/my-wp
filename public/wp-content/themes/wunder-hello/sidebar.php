<div id="sidebar">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php else : ?>
		<h3><?php _e( 'Sidebar', 'wunder-hello' ); ?></h3>
		<p><?php _e( 'Add widgets via Appearance → Widgets to populate this area.', 'wunder-hello' ); ?></p>
	<?php endif; ?>
</div>

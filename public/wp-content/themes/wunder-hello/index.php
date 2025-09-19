<?php get_header(); ?>

<main id="primary-content" class="site-main">
	<?php
	// Hero Slider Section
	get_template_part( 'hero-slider' );
	
	// Services Overview Section
	get_template_part( 'services-overview' );
	
	// Featured Posts Section
	get_template_part( 'featured-posts' );
	
	// Recent Projects Section
	get_template_part( 'recent-projects' );
	
	// Main Content with Sidebar Section
	get_template_part( 'main-content' );
	?>
</main>

<?php get_footer(); ?>

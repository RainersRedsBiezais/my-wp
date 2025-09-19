<?php get_header(); ?>

<main id="primary-content" class="container mx-auto px-4 py-8">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="page-<?php the_ID(); ?>" <?php post_class( 'prose max-w-none' ); ?>>
			<!-- Page Header -->
			<header class="mb-8">
				<h1 class="text-4xl font-bold mb-4 text-gray-900"><?php the_title(); ?></h1>
				
				<!-- Page Meta -->
				<div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 mb-6">
					<span class="flex items-center gap-2">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
						</svg>
						<time datetime="<?php echo get_the_modified_date('c'); ?>">
							<?php _e( 'Last updated:', 'wunder-hello' ); ?> <?php echo get_the_modified_date(); ?>
						</time>
					</span>
					<span class="flex items-center gap-2">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
						</svg>
						<?php echo do_shortcode('[reading_time]'); ?>
					</span>
				</div>
			</header>

			<!-- Featured Image -->
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="mb-8">
					<?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto rounded-lg shadow-lg' ) ); ?>
				</div>
			<?php endif; ?>

			<!-- Page Content -->
			<div class="content mb-8">
				<?php the_content(); ?>
			</div>

			<!-- Page Navigation (if hierarchical) -->
			<?php
			$children = get_pages( array(
				'parent'      => get_the_ID(),
				'sort_column' => 'menu_order',
				'sort_order'  => 'ASC'
			) );
			
			if ( $children ) :
				?>
				<div class="mb-8">
					<h3 class="text-xl font-semibold mb-4 text-gray-900"><?php _e( 'Subpages', 'wunder-hello' ); ?></h3>
					<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
						<?php foreach ( $children as $child ) : ?>
							<div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
								<h4 class="text-lg font-semibold mb-2">
									<a href="<?php echo esc_url( get_permalink( $child->ID ) ); ?>" class="text-blue-600 hover:text-blue-800">
										<?php echo esc_html( $child->post_title ); ?>
									</a>
								</h4>
								<?php if ( $child->post_excerpt ) : ?>
									<p class="text-sm text-gray-600"><?php echo esc_html( $child->post_excerpt ); ?></p>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>

			<!-- Breadcrumb Navigation -->
			<nav class="flex items-center gap-2 text-sm text-gray-600 pt-8 border-t border-gray-200">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-blue-600 hover:text-blue-800">
					<?php _e( 'Home', 'wunder-hello' ); ?>
				</a>
				<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
				</svg>
				<span class="text-gray-900"><?php the_title(); ?></span>
			</nav>
		</article>
	<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>

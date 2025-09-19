<?php get_header(); ?>

<main id="primary-content" class="container mx-auto px-4 py-8">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="project-<?php the_ID(); ?>" <?php post_class( 'prose max-w-none' ); ?>>
			<!-- Project Header -->
			<header class="mb-8">
				<h1 class="text-4xl font-bold mb-4 text-gray-900"><?php the_title(); ?></h1>
				
				<!-- Project Meta -->
				<div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 mb-6">
					<span class="flex items-center gap-2">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
						</svg>
						<time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
					</span>
					<span class="flex items-center gap-2">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
						</svg>
						<?php _e( 'Project', 'wunder-hello' ); ?>
					</span>
				</div>
			</header>

			<!-- Featured Image -->
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="mb-8">
					<?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto rounded-lg shadow-lg' ) ); ?>
				</div>
			<?php endif; ?>

			<!-- Project Content -->
			<div class="content mb-8">
				<?php the_content(); ?>
			</div>

			<!-- Project URL -->
			<?php $project_url = get_post_meta( get_the_ID(), '_project_url', true ); ?>
			<?php if ( $project_url ) : ?>
				<div class="mb-8 p-6 bg-blue-50 border border-blue-200 rounded-lg">
					<h3 class="text-lg font-semibold mb-3 text-gray-900"><?php _e( 'View Project', 'wunder-hello' ); ?></h3>
					<p class="text-gray-600 mb-4"><?php _e( 'Check out this project in action:', 'wunder-hello' ); ?></p>
					<a class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors" href="<?php echo esc_url( $project_url ); ?>" target="_blank" rel="noopener">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
						</svg>
						<?php _e( 'Visit Project', 'wunder-hello' ); ?>
					</a>
				</div>
			<?php endif; ?>

			<!-- Project Navigation -->
			<nav class="flex justify-between items-center pt-8 border-t border-gray-200">
				<div class="flex-1">
					<?php
					$prev_project = get_previous_post( true, '', 'project' );
					if ( $prev_project ) :
						?>
						<a href="<?php echo esc_url( get_permalink( $prev_project->ID ) ); ?>" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 transition-colors">
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
							</svg>
							<?php _e( 'Previous Project', 'wunder-hello' ); ?>
						</a>
						<p class="text-sm text-gray-600 mt-1"><?php echo esc_html( $prev_project->post_title ); ?></p>
					<?php endif; ?>
				</div>
				<div class="flex-1 text-right">
					<?php
					$next_project = get_next_post( true, '', 'project' );
					if ( $next_project ) :
						?>
						<a href="<?php echo esc_url( get_permalink( $next_project->ID ) ); ?>" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 transition-colors">
							<?php _e( 'Next Project', 'wunder-hello' ); ?>
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
							</svg>
						</a>
						<p class="text-sm text-gray-600 mt-1"><?php echo esc_html( $next_project->post_title ); ?></p>
					<?php endif; ?>
				</div>
			</nav>
		</article>
	<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>



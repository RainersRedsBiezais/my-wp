<?php get_header(); ?>

<main id="primary-content" class="container mx-auto px-4 py-8">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'prose max-w-none' ); ?>>
			<!-- Post Header -->
			<header class="mb-8">
				<h1 class="text-4xl font-bold mb-4 text-gray-900"><?php the_title(); ?></h1>
				
				<!-- Post Meta -->
				<div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 mb-6">
					<span class="flex items-center gap-2">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
						</svg>
						<time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
					</span>
					<span class="flex items-center gap-2">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
						</svg>
						<?php _e( 'By', 'wunder-hello' ); ?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="text-blue-600 hover:text-blue-800"><?php the_author(); ?></a>
					</span>
					<?php if ( has_category() ) : ?>
						<span class="flex items-center gap-2">
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
							</svg>
							<?php the_category( ', ' ); ?>
						</span>
					<?php endif; ?>
				</div>
			</header>

			<!-- Featured Image -->
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="mb-8">
					<?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto rounded-lg shadow-lg' ) ); ?>
				</div>
			<?php endif; ?>

			<!-- Post Content -->
			<div class="content mb-8">
				<?php the_content(); ?>
			</div>

			<!-- Post Tags -->
			<?php if ( has_tag() ) : ?>
				<div class="mb-8">
					<h3 class="text-lg font-semibold mb-3 text-gray-900"><?php _e( 'Tags', 'wunder-hello' ); ?></h3>
					<div class="flex flex-wrap gap-2">
						<?php
						$tags = get_the_tags();
						if ( $tags ) {
							foreach ( $tags as $tag ) {
								echo '<span class="inline-block bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition-colors">';
								echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '" class="text-gray-700 hover:text-gray-900">';
								echo esc_html( $tag->name );
								echo '</a></span>';
							}
						}
						?>
					</div>
				</div>
			<?php endif; ?>

			<!-- Navigation -->
			<nav class="flex justify-between items-center pt-8 border-t border-gray-200">
				<div class="flex-1">
					<?php
					$prev_post = get_previous_post();
					if ( $prev_post ) :
						?>
						<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 transition-colors">
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
							</svg>
							<?php _e( 'Previous Post', 'wunder-hello' ); ?>
						</a>
						<p class="text-sm text-gray-600 mt-1"><?php echo esc_html( $prev_post->post_title ); ?></p>
					<?php endif; ?>
				</div>
				<div class="flex-1 text-right">
					<?php
					$next_post = get_next_post();
					if ( $next_post ) :
						?>
						<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 transition-colors">
							<?php _e( 'Next Post', 'wunder-hello' ); ?>
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
							</svg>
						</a>
						<p class="text-sm text-gray-600 mt-1"><?php echo esc_html( $next_post->post_title ); ?></p>
					<?php endif; ?>
				</div>
			</nav>
		</article>
	<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>

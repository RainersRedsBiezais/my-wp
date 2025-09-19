<?php
/**
 * Featured Posts Section
 * 
 * @package Wunder_Hello
 */
?>

<!-- Featured Blog Posts -->
<section class="container mx-auto px-4 py-10">
	<h2 class="text-xl font-semibold mb-4"><?php _e( 'Featured Posts', 'wunder-hello' ); ?></h2>
	<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
		<?php
		$sticky = get_option( 'sticky_posts' );
		$args = array(
			'post_type'      => 'post',
			'posts_per_page' => 3,
			'ignore_sticky_posts' => 1,
		);
		if ( ! empty( $sticky ) ) {
			$args['post__in'] = $sticky;
		}
		$featured = new WP_Query( $args );
		if ( $featured->have_posts() ) :
			while ( $featured->have_posts() ) : $featured->the_post(); ?>
				<article class="rounded border border-gray-200 overflow-hidden bg-white">
					<a href="<?php the_permalink(); ?>" class="block">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-48 object-cover' ) ); ?>
						<?php else : ?>
							<div class="w-full h-48 bg-gray-100"></div>
						<?php endif; ?>
						<div class="p-4">
							<h3 class="text-lg font-semibold mb-1"><?php the_title(); ?></h3>
							<p class="text-sm text-gray-600"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
						</div>
					</a>
				</article>
			<?php endwhile; wp_reset_postdata(); else : ?>
				<p><?php _e( 'No featured posts yet.', 'wunder-hello' ); ?></p>
			<?php endif; ?>
	</div>
</section>

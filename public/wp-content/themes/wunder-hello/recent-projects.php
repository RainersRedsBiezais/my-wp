<?php
/**
 * Recent Projects Section
 * 
 * @package Wunder_Hello
 */
?>

<!-- Recent Projects Grid -->
<section class="container mx-auto px-4 py-10">
	<h2 class="text-xl font-semibold mb-4"><?php _e( 'Recent Projects', 'wunder-hello' ); ?></h2>
	<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
		<?php
		$projects = new WP_Query( array(
			'post_type'      => 'project',
			'posts_per_page' => 6,
		) );
		if ( $projects->have_posts() ) :
			while ( $projects->have_posts() ) : $projects->the_post();
				$project_url = get_post_meta( get_the_ID(), '_project_url', true );
				?>
				<article class="rounded border border-gray-200 overflow-hidden bg-white">
					<a href="<?php echo esc_url( get_permalink() ); ?>" class="block">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-48 object-cover' ) ); ?>
						<?php else : ?>
							<div class="w-full h-48 bg-gray-100"></div>
						<?php endif; ?>
						<div class="p-4">
							<h3 class="text-lg font-semibold mb-1"><?php the_title(); ?></h3>
							<?php if ( has_excerpt() ) : ?>
								<p class="text-sm text-gray-600"><?php echo get_the_excerpt(); ?></p>
							<?php endif; ?>
						</div>
					</a>
					<?php if ( $project_url ) : ?>
						<div class="px-4 pb-4">
							<a href="<?php echo esc_url( $project_url ); ?>" target="_blank" rel="noopener" class="text-blue-700 hover:underline"><?php _e( 'Visit project →', 'wunder-hello' ); ?></a>
						</div>
					<?php endif; ?>
				</article>
				<?php
			endwhile; wp_reset_postdata();
		else :
			echo '<p>' . esc_html__( 'No projects yet. Create some in WP Admin → Projects.', 'wunder-hello' ) . '</p>';
		endif;
		?>
	</div>
</section>

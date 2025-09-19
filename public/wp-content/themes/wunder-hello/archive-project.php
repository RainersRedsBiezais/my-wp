<?php get_header(); ?>

<main id="primary-content" class="container mx-auto px-4 py-8">
	<h1 class="text-2xl font-bold mb-6"><?php post_type_archive_title(); ?></h1>
	<?php if ( have_posts() ) : ?>
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="rounded border border-gray-200 overflow-hidden bg-white">
					<a href="<?php the_permalink(); ?>" class="block">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-48 object-cover' ) ); ?>
						<?php else : ?>
							<div class="w-full h-48 bg-gray-100"></div>
						<?php endif; ?>
						<div class="p-4">
							<h2 class="text-lg font-semibold mb-1"><?php the_title(); ?></h2>
							<?php if ( has_excerpt() ) : ?>
								<p class="text-sm text-gray-600"><?php echo get_the_excerpt(); ?></p>
							<?php endif; ?>
						</div>
					</a>
				</article>
			<?php endwhile; ?>
		</div>
		<div class="mt-6">
			<?php the_posts_pagination(); ?>
		</div>
	<?php else : ?>
		<p><?php _e( 'No projects found.', 'wunder-hello' ); ?></p>
	<?php endif; ?>
</main>

<?php get_footer(); ?>



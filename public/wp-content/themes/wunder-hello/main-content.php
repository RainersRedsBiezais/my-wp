<?php
/**
 * Main Content Section with Sidebar
 * 
 * @package Wunder_Hello
 */
?>

<!-- Main Content with Sidebar -->
<section class="container mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-6">
	<div class="md:col-span-2">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-8 p-5 bg-white rounded border border-gray-200' ); ?>>
				<h2 class="text-xl font-semibold mb-2"><a href="<?php the_permalink(); ?>" class="hover:underline"><?php the_title(); ?></a></h2>
				<div class="prose max-w-none"><?php the_excerpt(); ?></div>
			</article>
		<?php endwhile; else : ?>
			<p><?php _e( 'No posts found!', 'wunder-hello' ); ?></p>
		<?php endif; ?>
	</div>
	<aside class="space-y-4">
		<?php get_sidebar(); ?>
	</aside>
</section>

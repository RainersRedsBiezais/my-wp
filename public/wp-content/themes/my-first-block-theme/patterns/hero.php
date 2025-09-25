<?php
/**
 * Title: Hero Section
 * Slug: my-first-block-theme/hero
 * Description: A hero section with heading and call-to-action button.
 * Categories: featured
 * Keywords: hero, banner, call to action
 */

register_block_pattern(
    'my-first-block-theme/hero',
    array(
        'title'       => __('Hero Section', 'my-first-block-theme'),
        'description' => __('A hero section with heading and call-to-action button.', 'my-first-block-theme'),
        'categories'  => array('featured'),
        'keywords'    => array('hero', 'banner', 'call to action'),
        'content'     => '<!-- wp:cover {"overlayColor":"primary","minHeight":400,"align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:400px">
  <div class="wp-block-cover__inner-container">
    <!-- wp:heading {"textAlign":"center","level":1,"textColor":"neutral-light","fontSize":"xx-large"} -->
    <h1 class="has-text-align-center has-neutral-light-color has-text-color has-xx-large-font-size">Adventure Awaits</h1>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","textColor":"neutral-light","fontSize":"large"} -->
    <p class="has-text-align-center has-neutral-light-color has-text-color has-large-font-size">Discover amazing destinations and share your travel stories</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
      <!-- wp:button {"backgroundColor":"accent","textColor":"neutral-light"} -->
      <div class="wp-block-button"><a class="wp-block-button__link has-neutral-light-color has-accent-background-color has-text-color has-background">Start Exploring</a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
  </div>
</div>
<!-- /wp:cover -->',
    )
);

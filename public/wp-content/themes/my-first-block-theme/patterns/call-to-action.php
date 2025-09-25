<?php
/**
 * Title: Call to Action Section
 * Slug: my-first-block-theme/call-to-action
 * Description: A call-to-action section with heading, text, and button.
 * Categories: featured
 * Keywords: cta, call to action, button, section
 */

register_block_pattern(
    'my-first-block-theme/call-to-action',
    array(
        'title'       => __('Call to Action Section', 'my-first-block-theme'),
        'description' => __('A call-to-action section with heading, text, and button.', 'my-first-block-theme'),
        'categories'  => array('featured'),
        'keywords'    => array('cta', 'call to action', 'button', 'section'),
        'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"40px","right":"40px"}}},"backgroundColor":"secondary"} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:60px;padding-bottom:60px;padding-left:40px;padding-right:40px">
  <!-- wp:heading {"textAlign":"center","level":2,"textColor":"neutral-light","fontSize":"x-large"} -->
  <h2 class="has-text-align-center has-neutral-light-color has-text-color has-x-large-font-size">Ready for Your Next Adventure?</h2>
  <!-- /wp:heading -->
  
  <!-- wp:paragraph {"align":"center","textColor":"neutral-light","fontSize":"large"} -->
  <p class="has-text-align-center has-neutral-light-color has-text-color has-large-font-size">Join thousands of travelers sharing their stories and discovering new destinations.</p>
  <!-- /wp:paragraph -->
  
  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
  <div class="wp-block-buttons">
    <!-- wp:button {"backgroundColor":"warm","textColor":"neutral-dark"} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-neutral-dark-color has-warm-background-color has-text-color has-background">Join Our Community</a></div>
    <!-- /wp:button -->
    
    <!-- wp:button {"backgroundColor":"neutral-light","textColor":"secondary"} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-neutral-light-background-color has-text-color has-background">Learn More</a></div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
    )
);

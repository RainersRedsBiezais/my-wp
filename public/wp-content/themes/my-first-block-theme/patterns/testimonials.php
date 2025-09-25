<?php
/**
 * Title: Testimonials Section
 * Slug: my-first-block-theme/testimonials
 * Description: A testimonials section with customer reviews and ratings.
 * Categories: featured
 * Keywords: testimonials, reviews, customer, feedback
 */

register_block_pattern(
    'my-first-block-theme/testimonials',
    array(
        'title'       => __('Testimonials Section', 'my-first-block-theme'),
        'description' => __('A testimonials section with customer reviews and ratings.', 'my-first-block-theme'),
        'categories'  => array('featured'),
        'keywords'    => array('testimonials', 'reviews', 'customer', 'feedback'),
        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}}} -->
<div class="wp-block-group" style="padding-top:60px;padding-bottom:60px">
  <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"x-large","style":{"spacing":{"margin":{"bottom":"40px"}}}} -->
  <h2 class="has-text-align-center has-x-large-font-size" style="margin-bottom:40px">What Our Travelers Say</h2>
  <!-- /wp:heading -->
  
  <!-- wp:columns {"align":"wide"} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"20px","right":"20px"}},"border":{"radius":"8px"}},"backgroundColor":"neutral-light"} -->
      <div class="wp-block-group has-neutral-light-background-color has-background" style="border-radius:8px;padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px">
        <!-- wp:paragraph {"align":"center","fontSize":"large","style":{"typography":{"fontStyle":"italic"}}} -->
        <p class="has-text-align-center has-large-font-size" style="font-style:italic">"This travel blog changed how I see the world. Every destination feels like a new adventure waiting to be discovered!"</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:separator {"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}}} -->
        <hr class="wp-block-separator has-alpha-channel-opacity"/>
        <!-- /wp:separator -->
        
        <!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
        <h4 class="has-text-align-center has-medium-font-size">Alex Thompson</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small"} -->
        <p class="has-text-align-center has-primary-color has-text-color has-small-font-size">Adventure Seeker</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"20px","right":"20px"}},"border":{"radius":"8px"}},"backgroundColor":"neutral-light"} -->
      <div class="wp-block-group has-neutral-light-background-color has-background" style="border-radius:8px;padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px">
        <!-- wp:paragraph {"align":"center","fontSize":"large","style":{"typography":{"fontStyle":"italic"}}} -->
        <p class="has-text-align-center has-large-font-size" style="font-style:italic">"The photography tips and destination guides are absolutely incredible. I\'ve planned three trips based on your recommendations!"</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:separator {"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}}} -->
        <hr class="wp-block-separator has-alpha-channel-opacity"/>
        <!-- /wp:separator -->
        
        <!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
        <h4 class="has-text-align-center has-medium-font-size">Maria Garcia</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small"} -->
        <p class="has-text-align-center has-primary-color has-text-color has-small-font-size">Photography Enthusiast</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"20px","right":"20px"}},"border":{"radius":"8px"}},"backgroundColor":"neutral-light"} -->
      <div class="wp-block-group has-neutral-light-background-color has-background" style="border-radius:8px;padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px">
        <!-- wp:paragraph {"align":"center","fontSize":"large","style":{"typography":{"fontStyle":"italic"}}} -->
        <p class="has-text-align-center has-large-font-size" style="font-style:italic">"From hidden gems to popular destinations, this blog covers everything. The cultural insights are particularly valuable!"</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:separator {"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}}} -->
        <hr class="wp-block-separator has-alpha-channel-opacity"/>
        <!-- /wp:separator -->
        
        <!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
        <h4 class="has-text-align-center has-medium-font-size">David Kim</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small"} -->
        <p class="has-text-align-center has-primary-color has-text-color has-small-font-size">Cultural Explorer</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->',
    )
);

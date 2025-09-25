<?php
/**
 * Title: Team Section
 * Slug: my-first-block-theme/team-section
 * Description: A team section with 3 columns showing team members.
 * Categories: featured
 * Keywords: team, about, people, columns
 */

register_block_pattern(
    'my-first-block-theme/team-section',
    array(
        'title'       => __('Team Section', 'my-first-block-theme'),
        'description' => __('A team section with 3 columns showing team members.', 'my-first-block-theme'),
        'categories'  => array('featured'),
        'keywords'    => array('team', 'about', 'people', 'columns'),
        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}}} -->
<div class="wp-block-group" style="padding-top:60px;padding-bottom:60px">
  <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"x-large","style":{"spacing":{"margin":{"bottom":"40px"}}}} -->
  <h2 class="has-text-align-center has-x-large-font-size" style="margin-bottom:40px">Meet Our Travel Team</h2>
  <!-- /wp:heading -->
  
  <!-- wp:columns {"align":"wide"} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"8px"}},"backgroundColor":"neutral-light"} -->
      <div class="wp-block-group has-neutral-light-background-color has-background" style="border-radius:8px;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px">
        <!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
        <figure class="wp-block-image size-medium"><img style="border-radius:50%" alt=""/></figure>
        <!-- /wp:image -->
        
        <!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
        <h3 class="has-text-align-center has-large-font-size">Sarah Johnson</h3>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"medium"} -->
        <p class="has-text-align-center has-primary-color has-text-color has-medium-font-size">Adventure Photographer</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
        <p class="has-text-align-center has-small-font-size">Capturing the world\'s most beautiful moments, one destination at a time.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"8px"}},"backgroundColor":"neutral-light"} -->
      <div class="wp-block-group has-neutral-light-background-color has-background" style="border-radius:8px;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px">
        <!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
        <figure class="wp-block-image size-medium"><img style="border-radius:50%" alt=""/></figure>
        <!-- /wp:image -->
        
        <!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
        <h3 class="has-text-align-center has-large-font-size">Mike Chen</h3>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"medium"} -->
        <p class="has-text-align-center has-primary-color has-text-color has-medium-font-size">Travel Writer</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
        <p class="has-text-align-center has-small-font-size">Sharing stories from remote corners of the globe and hidden gems.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"8px"}},"backgroundColor":"neutral-light"} -->
      <div class="wp-block-group has-neutral-light-background-color has-background" style="border-radius:8px;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px">
        <!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
        <figure class="wp-block-image size-medium"><img style="border-radius:50%" alt=""/></figure>
        <!-- /wp:image -->
        
        <!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
        <h3 class="has-text-align-center has-large-font-size">Emma Rodriguez</h3>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"medium"} -->
        <p class="has-text-align-center has-primary-color has-text-color has-medium-font-size">Cultural Explorer</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
        <p class="has-text-align-center has-small-font-size">Discovering local cultures and traditions in every corner of the world.</p>
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

<?php
/**
 * My First Block Theme functions and definitions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register block patterns
 */
function my_first_block_theme_register_block_patterns() {
    // Register hero pattern
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

    // Register call-to-action pattern
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

    // Register team section pattern
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

    // Register testimonials pattern
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

    // Register sidebar pattern
    register_block_pattern(
        'my-first-block-theme/sidebar-pattern',
        array(
            'title'       => __('Sidebar Pattern', 'my-first-block-theme'),
            'description' => __('A sidebar with search, recent posts, and social links.', 'my-first-block-theme'),
            'categories'  => array('featured'),
            'keywords'    => array('sidebar', 'navigation', 'recent posts', 'social'),
            'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"8px"}},"backgroundColor":"neutral-light"} -->
<div class="wp-block-group has-neutral-light-background-color has-background" style="border-radius:8px;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px">
  <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"20px"}}}} -->
  <h3 class="has-large-font-size" style="margin-bottom:20px">Explore More</h3>
  <!-- /wp:heading -->
  
  <!-- wp:search {"label":"Search adventures...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"spacing":{"margin":{"bottom":"30px"}}}} /-->
  
  <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"15px"}}}} -->
  <h4 class="has-medium-font-size" style="margin-bottom:15px">Recent Adventures</h4>
  <!-- /wp:heading -->
  
  <!-- wp:query {"queryId":4,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
  <div class="wp-block-query">
    <!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}}} -->
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"neutral-light"} -->
    <div class="wp-block-group has-neutral-light-background-color has-background" style="border-radius:4px;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px">
      <!-- wp:post-title {"level":5,"isLink":true,"fontSize":"small"} /-->
      
      <!-- wp:post-date {"style":{"typography":{"fontSize":"12px"}},"textColor":"neutral-dark"} /-->
    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->
  </div>
  <!-- /wp:query -->
  
  <!-- wp:separator {"style":{"spacing":{"margin":{"top":"30px","bottom":"20px"}}}} -->
  <hr class="wp-block-separator has-alpha-channel-opacity"/>
  <!-- /wp:separator -->
  
  <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"15px"}}}} -->
  <h4 class="has-medium-font-size" style="margin-bottom:15px">Categories</h4>
  <!-- /wp:heading -->
  
  <!-- wp:tag-cloud {"style":{"spacing":{"margin":{"bottom":"20px"}}}} /-->
  
  <!-- wp:separator {"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}}} -->
  <hr class="wp-block-separator has-alpha-channel-opacity"/>
  <!-- /wp:separator -->
  
  <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"15px"}}}} -->
  <h4 class="has-medium-font-size" style="margin-bottom:15px">Follow Us</h4>
  <!-- /wp:heading -->
  
  <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#1e40af","iconBackgroundColor":"neutral-light","iconBackgroundColorValue":"#f8fafc","style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
  <ul class="wp-block-social-links has-icon-color has-icon-background-color">
    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
    <!-- wp:social-link {"url":"#","service":"twitter"} /-->
    <!-- wp:social-link {"url":"#","service":"youtube"} /-->
  </ul>
  <!-- /wp:social-links -->
</div>
<!-- /wp:group -->',
        )
    );
}
add_action('init', 'my_first_block_theme_register_block_patterns');

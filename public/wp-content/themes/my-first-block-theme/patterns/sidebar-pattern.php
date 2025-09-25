<?php
/**
 * Title: Sidebar Pattern
 * Slug: my-first-block-theme/sidebar-pattern
 * Description: A sidebar with search, recent posts, and social links.
 * Categories: featured
 * Keywords: sidebar, navigation, recent posts, social
 */

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

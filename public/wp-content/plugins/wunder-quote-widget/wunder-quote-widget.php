<?php
/**
 * Plugin Name: Wunder Quote Widget
 * Description: Displays a new motivational quote every day in the sidebar.
 * Version: 1.0
 * Author: Rainers Reds Biezais
 */
class Wunder_Quote_Widget extends WP_Widget {

  private $quotes = [
    "Believe you can and you're halfway there. – Theodore Roosevelt",
    "Simplicity is the soul of efficiency. – Austin Freeman",
    "The only way to learn a new programming language is by writing programs in it. – Dennis Ritchie",
    "Don’t comment bad code—rewrite it. – Brian Kernighan",
    "The best way to predict the future is to invent it. – Alan Kay"
  ];

  function __construct() {
    parent::__construct(
      'wunder_quote_widget',
      __('Wunder Quote of the Day', 'text_domain'),
      array('description' => __('Shows a new quote every day.', 'text_domain'))
    );
  }

  function widget($args, $instance) {
    echo $args['before_widget'];
    echo $args['before_title'] . apply_filters('widget_title', 'Quote of the Day') . $args['after_title'];

    // Rotate quote based on day of the year
    $dayOfYear = date('z'); // 0 - 365
    $quoteIndex = $dayOfYear % count($this->quotes);
    $quote = $this->quotes[$quoteIndex];

    echo '<p style="font-style: italic;">' . esc_html($quote) . '</p>';

    echo $args['after_widget'];
  }

}
function register_wunder_quote_widget() {
  register_widget('Wunder_Quote_Widget');
}
add_action('widgets_init', 'register_wunder_quote_widget');

<?php

/* styles and scripts */
function wp_boilerplate_enqueue_scripts() {
  wp_enqueue_style('styles_css', get_template_directory_uri() . '/dist/css/main.css');
  wp_enqueue_script('scripts_js', get_template_directory_uri() . '/dist/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'wp_boilerplate_enqueue_scripts');

/* enable title tag */
add_theme_support( 'title-tag' );

/* enable thumbnails */
add_theme_support('post-thumbnails');

/* disable wordpress automatic update */
add_filter( 'automatic_updater_disabled', '__return_true' );

/* enable options page (acf) */
if ( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

/* flush rewrite rules for new cpts and taxonomies */
flush_rewrite_rules();

/* disable the emoji's */
// function disable_emojis() {
//   remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
//   remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
//   remove_action( 'wp_print_styles', 'print_emoji_styles' );
//   remove_action( 'admin_print_styles', 'print_emoji_styles' );
//   remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
//   remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
//   remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
//   add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
//   add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
// }
// add_action( 'init', 'disable_emojis' );

// /* remove tinymce emoji plugin */
// function disable_emojis_tinymce( $plugins ) {
//   if ( is_array( $plugins ) ) {
//     return array_diff( $plugins, array( 'wpemoji' ) );
//   } else {
//     return array();
//   }
// }

// /* remove emoji cdn hostname from dns prefetching hints */
// function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
//   if ( 'dns-prefetch' == $relation_type ) {
//     $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
//     $urls = array_diff( $urls, array( $emoji_svg_url ) );
//   }
//   return $urls;
// }

// /* disable wp-embed script */
// function remove_wpembed_script(){
//   wp_dequeue_script( 'wp-embed' );
// }
// add_action( 'wp_footer', 'remove_wpembed_script' );

?>

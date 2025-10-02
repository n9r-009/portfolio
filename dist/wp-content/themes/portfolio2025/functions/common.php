<?php

/**
 * 共通処理を記載していきます。
 */

/*━━━━━━━━━━━━━━━━━━━━━━━━━━
エディタ、Guternbergの幅変更
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
add_action('admin_head', function () {
  echo '<style>.wp-block{max-width: 800px !important}</style>' . "\n";
});

/*━━━━━━━━━━━━━━━━━━━━━━━━━━
自動絵文字機能無効化
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
function disable_emoji()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'disable_emoji');

/*==========================================
一番親の固定ページ取得
==========================================*/
function is_subpage($post)
{
  if (is_page() && $post->post_parent) {
    $page = get_post($post->post_parent);
    return $page->post_name;
  } else {
    return false;
  }
}

<?php
/**
 * 変数に関わる処理を記載していきます。
 */

/*━━━━━━━━━━━━━━━━━━━━━━━━━
wordpress関数を変数化
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
// home_url
$siteUrl = get_home_url('') . '/';
$siteUrl = esc_url($siteUrl);
// template_directory_uri
$astUrl = get_template_directory_uri('') . '/';
$astUrl = esc_url($astUrl);

// 投稿内で上記のコードと同じ結果を得る
// home_url
function home_url_shortcode()
{
  return esc_url(get_home_url('') . '/');
}
add_shortcode('siteUrl', 'home_url_shortcode');
// template_directory_uri
function get_template_directory_uri_shortcode()
{
  return esc_url(get_template_directory_uri('') . '/');
}
add_shortcode('astUrl', 'get_template_directory_uri_shortcode');

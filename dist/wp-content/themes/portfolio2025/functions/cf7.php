<?php

/**
 * Contact Form 7に関わる処理を記載していきます。
 */

// 『(設定エラー) サイトのドメインに属していないメールアドレスが送信元に設定されています。』を回避する
add_filter("wpcf7_validate_configuration", "__return_false");

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter("wpcf7_autop_or_not", "wpcf7_autop_return_false");
function wpcf7_autop_return_false()
{
  return false;
}

// WordPressのショートコードを追加
add_shortcode("url", "homepage_url");
function homepage_url()
{
  return home_url() . "/";
}

// プラグインが有効時のみ実行
include_once(ABSPATH . 'wp-admin/includes/plugin.php');

if (is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
  add_action('wpcf7_init', function () {
    wpcf7_add_form_tag('url', 'homepage_url'); // Contact Form 7のショートコードを追加
  });
}

// フォームのオートコンプリートを無効化
add_filter(
  "wpcf7_form_autocomplete",
  function ($autocomplete) {
    $autocomplete = "off";
    return $autocomplete;
  },
  10,
  1
);

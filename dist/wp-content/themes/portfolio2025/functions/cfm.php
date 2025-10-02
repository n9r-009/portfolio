<?php

/**
 * Converter for Mediaに関わる処理を記載していきます。
 */

/*==========================================
Converter for Media
ソースのURLにuploadsがあった場合
webpディレクトリを設定する
==========================================*/
function setConverterForMedia($url, $html = false)
{
  // テーマのディレクトリ設定
  $parts = explode("/themes/", get_template_directory_uri());
  $theme = end($parts) . '/assets/img/';

  // WebP用のURLを生成
  if (strpos($url, '/uploads/') !== false) {
    $webp_url = str_replace('uploads', 'uploads-webpc/uploads', $url) . ".webp";
  } else if (strpos($url, $theme) !== false) {
    $webp_url = str_replace('themes', 'uploads-webpc/themes', $url) . ".webp";
  } else {
    return $url . get_acd();  // 該当しない場合はキャッシュパラメータ付きで返す
  }

  // WebPファイルのパスを絶対パスで確認
  $webp_path = ABSPATH . str_replace(home_url('/'), '', $webp_url);

  // 存在すれば WebP URL + キャッシュパラメータ、なければ元URL + キャッシュパラメータ
  if (file_exists($webp_path)) {
    return $webp_url . get_acd();
  } else {
    return $url . get_acd();
  }
}

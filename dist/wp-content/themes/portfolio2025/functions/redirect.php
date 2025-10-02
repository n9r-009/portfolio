<?php

/**
 * リダイレクト関わる処理を記載していきます。
 */

/*━━━━━━━━━━━━━━━━━━━━━━━━━━
指定したURLをリダイレクトする
source => target
$redirect_rules = [
  [
    "source" => ヒットするURL,
    "target" => リダイレクト先のURL（内部 or 外部）,
    "status" => 301 or 302
  ],
・内部 => wp__safe_redirect
・外部 => wp_redirect
https://developer.wordpress.org/reference/functions/wp_redirect/
https://developer.wordpress.org/reference/functions/wp_safe_redirect/
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
// function custom_redirect_external_links()
// {
//   // リダイレクトするリンクを定義
//   $redirect_rules = [
//     ["source" => "https://raziel.jp/about-1", "target" => "https://raziel.jp/service/", "status" => "301"],
//     ["source" => "https://raziel.jp/about-5", "target" => "https://raziel.jp/about/", "status" => "301"],
//     ["source" => "https://raziel.jp/blank-1", "target" => "https://raziel.jp/about/", "status" => "301"],
//     ["source" => "https://raziel.jp/blank-2", "target" => "https://raziel.jp/service/", "status" => "301"],
//     ["source" => "https://raziel.jp/blank-3", "target" => "https://raziel.jp/contact/", "status" => "301"],
//     ["source" => "https://raziel.jp/general-7", "target" => "https://raziel.jp/recruit/", "status" => "301"],
//   ];
//   //以下にリンクを追加

//   // URLの取得
//   $protocol = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on" ? "https" : "http";
//   $host = $_SERVER["HTTP_HOST"];
//   $request_uri = $_SERVER["REQUEST_URI"];
//   $current_url = $protocol . "://" . $host . $request_uri;

//   // リダイレクト処理
//   foreach ($redirect_rules as $rule) {
//     $source_url = $rule["source"];
//     $target_url = $rule["target"];
//     $status = $rule["status"];

//     if ($current_url === $source_url) {
//       if (strpos($target_url, get_home_url("")) !== false) {
//         // ホームURLを含む場合
//         wp_safe_redirect($target_url, $status);
//       } else {
//         // 外部URLの場合
//         wp_redirect($target_url, $status);
//       }
//       exit();
//     }
//   }
// }

// add_action("template_redirect", "custom_redirect_external_links");

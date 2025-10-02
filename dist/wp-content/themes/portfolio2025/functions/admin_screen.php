<?php

/**
 * 管理画面に関わる処理を記載していきます。
 */

/*━━━━━━━━━━━━━━━━━━━━━━━━━
固定ページの順番日付順に変更
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
function admin_custom_posttype_order($wp_query)
{
  // 管理画面のメインクエリのみを対象にする
  if (is_admin() && $wp_query->is_main_query()) {
    // すべての投稿タイプに対して並び順を設定
    $wp_query->set('orderby', 'date');
    $wp_query->set('order', 'DESC');
  }
}
add_filter('pre_get_posts', 'admin_custom_posttype_order');

/*━━━━━━━━━━━━━━━━━━━━━━━━━
管理画面の左メニュー順番変更
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
// function my_custom_menu_order($menu_order)
// {
//   if (!$menu_order) return true;
//   return array(
//     'edit.php', //投稿
//     'edit.php?post_type=works', //カスタム投稿
//     'edit.php?post_type=page', //固定ページ
//     'wpcf7', // ContactForm7
//     'index.php', //ダッシュボード
//     'upload.php', //メディア
//     'edit-comments.php', //コメント
//     'themes.php', //外観
//     'plugins.php', //プラグイン
//     'users.php', //ユーザー
//     'tools.php', //ツール
//     'ai1wm_export', // All-in-One WP Migration
//     'options-general.php', //設定
//   );
// }
// add_filter('custom_menu_order', 'my_custom_menu_order');
// add_filter('menu_order', 'my_custom_menu_order');

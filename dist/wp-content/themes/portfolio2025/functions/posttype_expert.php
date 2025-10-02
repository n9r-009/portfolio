<?php

/**
 * 投稿タイプ"expert"に関わる処理を記載していきます。
 */

add_action('init', 'create_post_type_expert');
function create_post_type_expert()
{
  register_post_type('expert', [ // 投稿タイプ名の定義
    'labels' => [
      'name' => '専門情報', // 管理画面上で表示する投稿タイプ名
      'singular_name' => 'expert',    // カスタム投稿の識別名
      'all_items' => '専門情報一覧',
      'add_new' => '新規追加',
      'add_new_item' => '専門情報の新規追加'
    ],
    'public' => true,  // 投稿タイプをpublicにするか
    'menu_position' => 5,     // 管理画面上での配置場所
    'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
    'has_archive' => true,
    'hierarchical' => true,
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes')
  ]);
  register_taxonomy(
    'expert-category',
    'expert',
    array(
      'hierarchical' => true,
      'label' => '専門情報カテゴリー',
      'show_ui' => true,
      'singular_label' => '専門情報カテゴリー',
      'show_admin_column' => true,
      'show_in_menu' => true,
      'show_in_rest' => true,
    )
  );
}

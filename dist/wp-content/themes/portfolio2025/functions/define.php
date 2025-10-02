<?php

/**
 *  定数:定数はここに全部書いてください
 *  定数名は単語毎「_」区切りで全て大文字にすること
 *  使用方法のコメントを必ず残すこと
 * // home url
 * define('HOME_URL', home_url('/'));
 * // テーマディレクトリまでのパス
 * define('ITEM_URL', get_stylesheet_directory_uri() . '/');
 * // ノーイメージパス
 * define('NOIMAGE', ITEM_URL . 'assets/images/noimage.png');
 * //css,js等のアセットへのパス
 * define('ASSETS_DIR', get_stylesheet_directory_uri() . '/assets/');
 * //staticsへのパス
 * define('STATICS_DIR', get_stylesheet_directory_uri() . '/statics/');
 */

// デバッグモードならエラーを表示する
// if (defined('WP_DEBUG') && WP_DEBUG) {
//     ini_set('display_errors', 1);
// }

// define('AUTOMATIC_UPDATER_DISABLED', true);
// define('DISALLOW_FILE_EDIT', true);

// home url

// テーマディレクトリまでのパス

// ノーイメージパス

//css,js等のアセットへのパス
//アセットへのパス
define('ASSETS_DIR', get_stylesheet_directory_uri() . '/assets/');
// css
define('AST_CSS', get_stylesheet_directory_uri() . '/assets/css/');
// js
define('AST_JS', get_stylesheet_directory_uri() .  '/assets/js/');
// img
define('AST_IMG', get_stylesheet_directory_uri()  . '/assets/img/');
// ダミーサムネイル
define('AST_DUMMYTHUMB', get_stylesheet_directory_uri()  . '/assets/img/dummy/thumb.jpg');
define('AST_DUMMYTHUMBMV', get_stylesheet_directory_uri()  . '/assets/img/dummy/thumbmv.jpg');
//staticsへのパス
// PDF


//URL
// TOPページ
define('URL_TOP', get_home_url(''));
// TOPページ サービス紹介
define('URL_TOP_SERVICE', get_home_url('') . '?anker=service');
// TOPページ 会社概要
define('URL_TOP_COMPANY', get_home_url('') . '?anker=company');
// TOPページ アクセス
define('URL_TOP_MAP', get_home_url('') . '?anker=map');
// TOPページ お知らせ
define('URL_TOP_NEWS', get_home_url('') . '?anker=news');
// TOPページ お問い合わせ
define('URL_TOP_CONTACT', get_home_url('') . '?anker=contact');

//お知らせ一覧 すべて
define('URL_NEWS_ALL', get_home_url('') . '/' . 'news' . '?post-all');
//お知らせ一覧
define('URL_NEWS', get_home_url('') . '/' . 'news');
//専門情報一覧
define('URL_EXPERT', get_home_url('') . '/' . 'expert');

// サービス紹介
define('URL_SERVICE', get_home_url('') . '/' . 'service');

// プライバシーポリシー
define('URL_PRIVACY', get_home_url('') . '/' . 'privacy');

// TEL
define('URL_TEL', 'tel:0123-45-6789');

// Instagram
define('URL_INSTA', '');

<?php
/**
 * クエリに関わる処理を記載していきます。
 */

/*-----------------------------------------
メインクエリ条件変更
------------------------------------------*/
function custom_loop_rules($query)
{
  // 管理画面や、メインクエリ以外の処理に影響を及ぼさないように
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  // 投稿表示数変更
  // カテゴリーのアーカイブページ
  // タクソノミーのアーカイブページ
  if (
    $query->is_post_type_archive('news')
  ) {
    $query->set('posts_per_page', '-1');
    return;
  }
}
add_action('pre_get_posts', 'custom_loop_rules');

/*-----------------------------------------
カスタム投稿の表示順変更
------------------------------------------*/
add_filter(
  'pre_get_posts',
  function( $query ) {
    if ( is_admin() ) {
      // 「custom_post_type」は適宜カスタム投稿タイプスラッグに変更してください.
      if (isset($query->query['post_type']) && 'service' === $query->query['post_type'] ) {
        $query->set( 'orderby', 'date' );
        $query->set( 'order', 'DESC' );
      }
    }
  }
);

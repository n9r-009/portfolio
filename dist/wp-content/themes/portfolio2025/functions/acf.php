<?php

/**
 * acfに関わる処理を記載していきます。
 */


/*━━━━━━━━━━━━━━━━━━━━━━━━━
プレビュー時ポストID取得
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
function fix_post_id_on_preview($null, $post_id)
{
  if (is_preview()) {
    // プレビュー時は現在のポストIDを返す
    return get_the_ID();
  } else {
    // プレビューでない場合は、渡された$post_idを検証して返す
    $acf_post_id = isset($post_id->ID) ? $post_id->ID : $post_id;
    if (!empty($acf_post_id)) {
      return $acf_post_id;
    } else {
      return $null;
    }
  }
}
add_filter('acf/pre_load_post_id', 'fix_post_id_on_preview', 10, 2);

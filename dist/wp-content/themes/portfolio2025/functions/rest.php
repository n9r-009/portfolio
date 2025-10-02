<?php

/**
 * ここはREST API設定を記載するファイルです。
 */

/*━━━━━━━━━━━━━━━━━━━━━━━━━━
REST API機能を無効化する
ユーザーのみ
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
function my_filter_rest_endpoints($endpoints)
{
  if (isset($endpoints['/wp/v2/users'])) {
    unset($endpoints['/wp/v2/users']);
  }
  if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
    unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
  }
  return $endpoints;
}
add_filter('rest_endpoints', 'my_filter_rest_endpoints', 10, 1);

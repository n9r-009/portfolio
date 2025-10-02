<?php

/**
 * キャッシュに関わる処理を記載していきます。
 */

/*━━━━━━━━━━━━━━━━━━━━━━━━━
テスト時のみ
キャッシュパラメータ常にクリア
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
define("VERSION", "20250922-0001");
// define("VERSION", date("Ymd-G:i:s"));
function acd()
{
  $version = VERSION;
  echo "?" . $version;
}
function get_acd()
{
  $version = VERSION;
  return "?" . $version;
}

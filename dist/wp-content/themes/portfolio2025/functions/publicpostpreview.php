<?php

/**
 * publicpostpreviewの設定を記載するファイルです。
 */

/*━━━━━━━━━━━━━━━━━━━━━━━━━━
publicpostpreviewの期間変更
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
add_filter("ppp_nonce_life", "my_nonce_life");
function my_nonce_life()
{
  return 60 * 60 * 24 * 5;
}

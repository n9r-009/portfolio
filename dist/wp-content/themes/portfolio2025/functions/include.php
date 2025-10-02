<?php
/**
 * インクルードに関わる処理を記載していきます。
 */


/*━━━━━━━━━━━━━━━━━━━━━━━━━
外部ファイルをインクルードする
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
function get_file($fileName = "")
{
  return get_template_part('inc/' . $fileName);
}

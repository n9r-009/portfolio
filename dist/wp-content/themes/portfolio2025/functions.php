<?php

/*━━━━━━━━━━━━━━━━━━━━━━━━━
classesフォルダ内読み込み
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
foreach (glob(__DIR__ . "/classes/*.php") as $file) {
  require_once $file;
}

/*━━━━━━━━━━━━━━━━━━━━━━━━━
functionsフォルダ内読み込み
━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
foreach (glob(__DIR__ . "/functions/*.php") as $file) {
  require_once $file;
}

#!/bin/bash

SCRIPT_DIR=$(cd "$(dirname "$0")" && pwd)

# .env ファイルのパスを指定
env_file="$SCRIPT_DIR/.env"

# 除外ファイルリストの初期化
EXCLUDE_FILES=""
if [ -f "$env_file" ]; then
    source "$env_file"
fi

# 現在のブランチを取得
BRANCH=$(git rev-parse --abbrev-ref HEAD)

# 分岐元ブランチ（必要に応じて変更可）
BASE_BRANCH="develop"

# ブランチ作成時の元コミットを取得
DIFF_1=$(git merge-base "$BASE_BRANCH" "$BRANCH")

# 最新のコミット
DIFF_2=$(git rev-parse HEAD)

# 出力ファイル名
output_file="changed_files.zip"

# 除外ファイル処理
exclude_files=()
if [ -n "$EXCLUDE_FILES" ]; then
    IFS=',' read -ra exclude_files <<< "$EXCLUDE_FILES"
fi

# 差分のファイル取得
cmd=("git diff --name-only --diff-filter=d $DIFF_1 $DIFF_2")
for exclude in "${exclude_files[@]}"; do
    cmd+=(":!$exclude")
done

# コマンドを実行してZIP化
eval "${cmd[@]}" | xargs git archive "$BRANCH" --format=zip -o "$output_file" --

# 可視化ログ
echo "===== Git 差分情報 ====="
echo "DIFF_1 (分岐元)   : $DIFF_1"
echo "DIFF_2 (最新)     : $DIFF_2"
echo "BRANCH (対象ブランチ): $BRANCH"
echo "========================"
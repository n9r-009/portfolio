SCRIPT_DIR=$(cd $(dirname $0); pwd)
cd $SCRIPT_DIR
select VAR in npm-install docker-run npm-run-dev docker-stop docker-stop-all archive exit
#doからdoneまでループ処理
do
    echo "あなたが選んだ項目は"$VAR"です。"
    if [ "$VAR" = "npm-install" ]; then
    npm ci
    elif [ "$VAR" = "docker-run" ]; then
    docker compose up -d
    elif [ "$VAR" = "npm-run-dev" ]; then
    npm run dev
    elif [ "$VAR" = "docker-stop" ]; then
    docker compose stop
    elif [ "$VAR" = "docker-stop-all" ]; then
    docker stop $(docker ps -q)
    elif [ "$VAR" = "archive" ]; then
    bash archive.sh
    elif [ "$VAR" = "exit" ]; then
    exit
	break
    fi
done

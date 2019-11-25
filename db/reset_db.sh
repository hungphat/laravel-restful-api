#!/usr/bin/env bash
s=$BASH_SOURCE ; s=$(dirname "$s") ; s=$(cd "$s" && pwd) ; SCRIPT_HOME="$s"  # get SCRIPT_HOME=executed script's path, containing folder, cd & pwd to get container path
APP_HOME="$SCRIPT_HOME/../.."

c=hungphat_laravel_restful_api  # c aka container

docker cp "$APP_HOME/SQL/CreateDatabase.sql" $c:/
docker cp "$APP_HOME/SQL/CreateCustomer.sql" $c:/
docker cp "$APP_HOME/SQL/InsertList.sql"     $c:/

docker exec $c bash -c "mysql -Uroot                 -f /CreateDatabase.sql"
docker exec $c bash -c "mysql -Uroot -d customerdata -f /CreateCustomer.sql"
docker exec $c bash -c "mysql -Uroot -d customerdata -f /InsertList.sql"

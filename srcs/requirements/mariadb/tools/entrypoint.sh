#!/bin/bash

if [ ! -d /var/lib/mysql/$MYSQL_DATABASE ]; then
	"$@" &
	MARIADB_PID=$!

	while ! mysqladmin ping -h localhost --silent; do
		sleep 1
	done

	envsubst < /tmp/db_init.sql | mysql
	kill $MARIADB_PID
fi

exec "$@"

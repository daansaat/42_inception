#!/bin/bash

envsubst '${MYSQL_DATABASE},${MYSQL_USER},${MYSQL_PASSWORD},${MYSQL_HOSTNAME}' \
  < template.conf \
  > /etc/nginx/sites-enabled/dsaat.42.fr

rm /var/log/nginx/access.log
rm /var/log/nginx/error.log

ln -s /dev/stdout /var/log/nginx/access.log
ln -s /dev/stderr /var/log/nginx/error.log

exec "$@"

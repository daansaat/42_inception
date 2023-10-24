#!/bin/bash

envsubst '${MYSQL_DATABASE},${MYSQL_USER},${MYSQL_PASSWORD},${MYSQL_HOSTNAME}' \
  < template.conf \
  > /etc/nginx/sites-enabled/dsaat.42.fr

exec "$@"

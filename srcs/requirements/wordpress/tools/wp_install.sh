#!/bin/bash

if [ ! -f wp-config.php ]; then
	echo "Installing wordpress..."
	wp core download --allow-root --path=/var/www/html
fi

exec "$@"
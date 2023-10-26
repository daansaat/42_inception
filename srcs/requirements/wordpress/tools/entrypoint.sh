#!/bin/bash


# if [ ! -f /var/www/html/wp-config.php ]; then
if ! wp core is-installed; then
	# mv wp-config.php /var/www/html/wp-config.php
	cd /var/www/html
	wp core download --allow-root
	wp core install --allow-root --skip-email \
		--url=https://$DOMAIN_NAME \
		--title=$WP_TITLE \
		--admin_user=$WP_ADMIN \
		--admin_password=$WP_ADMIN_PASSWORD \
		--admin_email=$WP_ADMIN_EMAIL
	wp user create --allow-root $WP_USER $WP_USER_EMAIL \
		--user_pass=$WP_USER_PASSWORD
fi

exec "$@"

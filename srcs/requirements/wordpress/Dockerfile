FROM debian:bullseye

RUN apt-get update; \
    apt-get install -y php-fpm php-mysqli wget; \
    wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar; \
    chmod +x wp-cli.phar; \
    mv wp-cli.phar /usr/local/bin/wp; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*; \
    mkdir /run/php

COPY ./conf/www.conf /etc/php/7.4/fpm/pool.d/

COPY ./conf/wp-config.php ./var/www/html/wp-config.php
# COPY ./conf/wp-config.php .

COPY --chmod=1 ./tools/entrypoint.sh ./usr/local/bin

ENTRYPOINT ["entrypoint.sh"]

EXPOSE 9000

CMD ["php-fpm7.4", "--nodaemonize"]

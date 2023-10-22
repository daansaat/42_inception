FROM debian:bullseye

RUN apt-get update && \
    apt-get install -y php-fpm php-mysqli && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* && \
    mkdir /run/php

ADD --chmod=1 https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar /usr/local/bin/wp

COPY ./conf/www.conf /etc/php/7.4/fpm/pool.d/
COPY ./tools/wp_install.sh .

ENTRYPOINT ["./wp_install.sh"]

EXPOSE 9000

CMD ["php-fpm7.4", "--nodaemonize"]

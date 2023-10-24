FROM debian:bullseye

RUN apt-get update; \
    apt-get install -y mariadb-server gettext; \
    apt-get clean; \
    mkdir -p /run/mysqld; \
    chown -R mysql:mysql /run/mysqld; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY ./conf/db_init.sql ./tmp/db_init.sql

COPY --chmod=1 ./tools/entrypoint.sh /usr/local/bin/

ENTRYPOINT ["entrypoint.sh"]

EXPOSE 3306

CMD ["mysqld", "--bind-address=0.0.0.0"]

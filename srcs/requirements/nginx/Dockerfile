FROM debian:bullseye

RUN apt-get update; \
    apt-get install -y nginx ssl-cert gettext; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY ./conf/template.conf .

COPY --chmod=1 ./tools/entrypoint.sh ./usr/local/bin

ENTRYPOINT ["entrypoint.sh"]

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"];

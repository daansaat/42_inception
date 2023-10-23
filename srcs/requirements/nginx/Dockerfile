FROM debian:bullseye

RUN apt-get update && \
    apt-get install -y nginx ssl-cert gettext && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# COPY ./conf/server.conf /etc/nginx/sites-enabled/dsaat.42.fr

COPY ./conf/template.conf .

COPY --chmod=1 ./tools/envsubst-on-template.sh .

ENTRYPOINT ["./envsubst-on-template.sh"]

CMD ["nginx", "-g", "daemon off;"];

FROM debian:bullseye

RUN apt-get update && \
    apt-get install -y nginx ssl-cert && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY ./conf/server.conf /etc/nginx/sites-enabled/dsaat.42.fr

CMD ["nginx", "-g", "daemon off;"];

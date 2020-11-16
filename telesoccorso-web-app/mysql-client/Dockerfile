FROM alpine:3.4

MAINTAINER Samuel mansour <s83@users.noreply.github.com>

RUN apk add --update mysql-client && rm -rf /var/cache/apk/*

VOLUME /app

COPY ./mysql-init/* /app
COPY ./mysql-exec.sh /app
RUN ["chmod", "+x", "/app/mysql-exec.sh"]

#CMD ["/bin/bash -c /app/mysql-exec.sh"]

WORKDIR /app
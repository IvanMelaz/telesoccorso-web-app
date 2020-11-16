FROM openjdk:8-jdk-alpine
MAINTAINER hypertube.ltd@gmail.com

VOLUME ["/opt/spring-boot/lib/"]
RUN apk --no-cache add netcat-openbsd bash iputils netcat-openbsd && rm -rf /var/cache/apk/*

RUN echo  nc -- help

ARG MYSQL_DATABASE
ARG MYSQL_PORT
ARG MYSQL_USERNAME
ARG MYSQL_PASSWORD
ARG APP_NAME

RUN echo "database host: $MYSQL_DATABASE"
RUN echo "database port: $MYSQL_PORT"
RUN echo "java app name : $APP_NAME"

RUN echo  nc -- help

COPY ./$APP_NAME /opt/spring-boot/lib/
#copy properties
COPY ./smartwatch-server.application.properties /opt/spring-boot/lib/smartwatch-server.application.properties

COPY ./wait-for-it.sh /wait-for-it.sh
USER root
RUN chmod +x /wait-for-it.sh

FROM ubuntu:12.04
MAINTAINER Alexander Schenkel <alex@alexi.ch>

ARG website_host
ARG database_host

RUN echo "website host: $website_host"
RUN echo "database host: $database_host"

VOLUME ["/var/www"]

RUN apt-get update && \
    apt-get install -y \
      apache2 \
      php5 \
      php5-cli \
      libapache2-mod-php5 \
      php5-gd \
      php5-ldap \
      php5-mysql \
      php5-pgsql \
      sed \
      iputils-ping

COPY ./conf/apache_default /etc/apache2/sites-available/default
COPY ./conf/run.sh /usr/local/bin/run.sh

RUN chmod +x /usr/local/bin/run.sh
RUN a2enmod rewrite

#replace var name into php file
#RUN sed -i 's,'$pattern',Say hurrah to &: \0/,' "$file"
#RUN sed -i 's,'$pattern',Say hurrah to &: \0/,' "$file"
#RUN sed -i 's,'$pattern',Say hurrah to &: \0/,' "$file"

EXPOSE 80
CMD ["/usr/local/bin/run.sh"]
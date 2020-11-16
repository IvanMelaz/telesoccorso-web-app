FROM mysql:5.7

# Environment variables
ENV MYSQL_ROOT_PASSWORD=midara
ENV MYSQL_DATABASE=tsc
ENV MYSQL_USER=tsc
ENV MYSQL_PASSWORD=midara

# Allows you to change the value of "max_allowed_packet"
# ADD ["mysqlconf/gatewaymy.cnf", "/etc/mysql/conf.d/conf_mysql.cnf"]
COPY ./my_custom.cnf /etc/mysql/my.cnf

# Create Database
RUN	mkdir /usr/sql
RUN	chmod 644 /usr/sql

ADD ./mysql-init /docker-entrypoint-initdb.d/
RUN chown -R mysql:mysql /docker-entrypoint-initdb.d/

CMD ["mysqld", "--character-set-server=utf8mb4", "--collation-server=utf8mb4_unicode_ci"]
FROM	debian:buster

RUN		apt-get update
RUN		apt-get install -y mariadb-server

EXPOSE	3306

COPY  	./config/51-server.cnf  /etc/mysql/mariadb.conf.d/51-server.cnf

RUN		mkdir /var/run/mysqld \
&&		chown -R mysql:root /var/run/mysqld \
&&		chown mysql:mysql /etc/mysql/my.cnf
# \
# &&		sed -i "s/127.0.0.1/0.0.0.0/g" /etc/mysql/mariadb.conf.d/50-server.cnf

ARG		DB_HOST
ARG		DB_NAME
ARG		DB_USER
ARG		DB_PASSWORD

RUN		service mysql start \
&&		mariadb -u root -e "\
CREATE DATABASE ${DB_NAME};\
CREATE USER '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASSWORD}';\
GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO '${DB_USER}'@'%';\
FLUSH PRIVILEGES;"\
&&		service mysql stop

HEALTHCHECK	CMD mariadb -e 'SELECT @@datadir;' || exit 1

CMD		["mysqld"]

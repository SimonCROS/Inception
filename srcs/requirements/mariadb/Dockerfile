FROM	debian:buster

ARG		DB_CONNECTION
ARG		DB_HOST
ARG		DB_PORT
ARG		DB_DATABASE
ARG		DB_USERNAME
ARG		DB_PASSWORD

RUN		apt-get update
RUN		apt-get install -y mariadb-server

EXPOSE	3306

RUN		mkdir /var/run/mysqld && chown -R mysql:root /var/run/mysqld

RUN		service mysql start && mariadb -u root -e "\
CREATE DATABASE "${DB_DATABASE}";\
CREATE USER '"${DB_USERNAME}"'@'localhost' IDENTIFIED BY '"${DB_PASSWORD}"';\
GRANT ALL PRIVILEGES ON "${DB_DATABASE}".* TO '"${DB_USERNAME}"'@'localhost';\
FLUSH PRIVILEGES;"

HEALTHCHECK	CMD mariadb -e 'SELECT @@datadir;' || exit 1

CMD		["mysqld"]

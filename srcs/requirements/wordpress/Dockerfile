FROM	debian:buster

WORKDIR	/var/www/html

RUN		apt-get update -y && \
		apt-get install -y php-cli php-cgi php-common php-pear php-mbstring php-zip php-net-socket php-gd php-xml-util php-gettext php-mysql php-bcmath php-fpm

RUN		apt-get install -y wget curl tar

RUN		wget https://wordpress.org/wordpress-5.8.2.tar.gz && tar --strip-components=1 -xf wordpress-5.8.2.tar.gz && rm wordpress-5.8.2.tar.gz
RUN		curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
&&		chmod +x wp-cli.phar \
&&		mv wp-cli.phar /usr/local/bin/wp

RUN		mkdir /run/php && chown -R www-data:www-data /var/www

COPY	./config/www.conf /etc/php/7.3/fpm/pool.d/www.conf
COPY	./config/wp-config.php .
COPY	./scripts/start_inception.sh .

EXPOSE	9000

CMD		["sh", "start_inception.sh"]

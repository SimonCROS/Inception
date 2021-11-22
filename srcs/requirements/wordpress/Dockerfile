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

ARG		WP_URL
ARG		WP_TITLE
ARG		WP_USER
ARG		WP_EMAIL
ARG		WP_PASSWORD

RUN		wp --allow-root core install --url="$(WP_URL)" --title="$(WP_TITLE)" --admin_user="$(WP_USER)" --admin_email="$(WP_EMAIL)" --admin_password="$(WP_PASSWORD)"
RUN		wp --allow-root user create test test@example.com

EXPOSE	9000

CMD		["php-fpm7.3", "-F"]

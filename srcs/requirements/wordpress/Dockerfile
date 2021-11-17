FROM debian:buster

WORKDIR /var/www/html

RUN apt-get update -y && \
	apt-get install -y php-cli php-cgi php-common php-pear php-mbstring php-zip php-net-socket php-gd php-xml-util php-gettext php-mysql php-bcmath php-fpm

RUN apt-get install -y wget tar

RUN wget https://fr.wordpress.org/wordpress-5.8.2-fr_FR.tar.gz && tar --strip-components=1 -xf wordpress-5.8.2-fr_FR.tar.gz  && rm wordpress-5.8.2-fr_FR.tar.gz

RUN mkdir /run/php

COPY ./config/wp-config.php .

RUN chown -R www-data:www-data /var/www

COPY ./config/www.conf /etc/php/7.3/fpm/pool.d/www.conf

EXPOSE 9000

CMD ["php-fpm7.3", "-F"]

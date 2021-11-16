FROM debian:buster

WORKDIR /var/www/html

RUN apt-get update -y && \
	apt-get install -y php-cli php-cgi php-common php-pear php-mbstring php-zip php-net-socket php-gd php-xml-util php-gettext php-mysql php-bcmath php-fpm

RUN apt-get install -y wget tar

RUN wget https://fr.wordpress.org/wordpress-5.8.2-fr_FR.tar.gz && tar --strip-components=1 -xf wordpress-5.8.2-fr_FR.tar.gz  && rm wordpress-5.8.2-fr_FR.tar.gz

RUN mkdir /run/php

# RUN addgroup -g 3000 -S app
# RUN adduser -u 3000 -S -D -G app app

COPY ./config/php-fpm.conf /etc/php7/php-fpm.conf
COPY ./config/www.conf /etc/php7/php-fpm.d/www.conf

EXPOSE 9000

CMD ["php-fpm7.3", "-F"]

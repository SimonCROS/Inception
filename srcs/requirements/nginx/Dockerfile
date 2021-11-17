FROM	debian:buster

RUN		apt-get update -y && \
		apt-get install -y nginx openssl

RUN		openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
		-subj "/C=FR/ST=France/L=Lyon/emailAddress=scros@student.42lyon.fr" \
		-keyout /etc/ssl/private/nginx-selfsigned.key \
		-out /etc/ssl/certs/nginx-selfsigned.crt

COPY	./config/wp.conf /etc/nginx/sites-available/default

EXPOSE	443

CMD		["nginx", "-g", "daemon off;"]

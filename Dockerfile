FROM asixgrup09/debian-apache-php7.4-asixgrup09
COPY app /var/www/html
WORKDIR /var/www/html
EXPOSE 80
RUN "chmod 777 -R /var/www/html"

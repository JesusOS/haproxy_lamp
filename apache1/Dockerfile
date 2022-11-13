FROM php:8.0-apache
COPY index.php /var/www/html/index.php
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
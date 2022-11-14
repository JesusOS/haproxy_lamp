FROM php:8.0-apache
COPY ./mysql.conf /etc/apache2/sites-available/
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
RUN a2dissite 000-default.conf
RUN a2dissite default-ssl.conf
RUN a2ensite mysql.conf
CMD ["apachectl", "-D", "FOREGROUND"]
COPY consulta.php /var/www/mysql/
RUN chown www-data:www-data /var/www/mysql
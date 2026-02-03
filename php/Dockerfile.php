FROM php:8.2-apache

RUN docker-php-ext-install mysqli

COPY ../index.php /var/www/html/pinacoteca/index.php
COPY ../*.jpg /var/www/html/pinacoteca/

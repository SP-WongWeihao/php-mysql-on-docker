FROM php:8.2-apache

WORKDIR /var/www/html

COPY ./php /var/www/html

RUN apt update -y && apt upgrade -y
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN pecl install redis && docker-php-ext-enable redis
RUN a2enmod rewrite
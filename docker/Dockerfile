FROM php:7.1-apache

COPY ./ /work
COPY ./.env /work/.env
COPY /docker/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY /docker/initdb.sql /docker-entrypoint-initdb.d/initdb.sql
COPY /docker/php-custom.ini /usr/local/etc/php/conf.d/php-custom.ini

WORKDIR /work
RUN apt-get update && apt-get install -y \
            apt-transport-https \
            libicu-dev \
            libfreetype6-dev \
            libjpeg62-turbo-dev \
            libpng-dev
RUN docker-php-ext-install mbstring pdo pdo_mysql intl gd
RUN chown -R www-data:www-data /work
RUN a2enmod rewrite

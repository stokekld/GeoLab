FROM php:5.6-apache

RUN a2enmod rewrite

COPY conf/php.ini /usr/local/etc/php/
COPY conf/apache2.conf /etc/apache2/
COPY conf/000-default.conf /etc/apache2/sites-enabled

RUN mkdir -p /usr/src/app

WORKDIR /usr/src/app

EXPOSE 80

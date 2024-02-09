FROM php:8.3.0-fpm-bullseye

RUN apt-get update --fix-missing
RUN apt-get update

COPY my.ini $PHP_INI_DIR/conf.d/x-my.ini
COPY ll /usr/local/bin/ll

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

RUN apt-get autoclean && rm -r /var/lib/apt/lists/*

RUN usermod -u 1000 www-data
USER 1000
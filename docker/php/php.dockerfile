FROM php:8.3.0-fpm-bullseye

RUN apt-get update --fix-missing
RUN apt-get update \
    && apt-get -y install curl build-essential libssl-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev libicu-dev \
    libmagickwand-dev libzip-dev zip

RUN docker-php-ext-install gd pdo pdo_mysql zip intl
# RUN pecl install xdebug-3.2.2  docker-php-ext-enable xdebug

COPY my.ini $PHP_INI_DIR/conf.d/x-my.ini
COPY ll /usr/local/bin/ll

# RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

RUN curl https://getcomposer.org/download/2.5.4/composer.phar --output /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

RUN mkdir /var/www/.composer
RUN chown www-data:www-data /var/www/.composer
# Пока так
RUN chmod 777 /var/www/.composer

RUN apt-get autoclean && rm -r /var/lib/apt/lists/*

VOLUME /var/www/.composer

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
RUN touch /var/www/.gitconfig
RUN chown www-data:www-data /var/www/.gitconfig
# Пока так
RUN chmod 777 /var/www/.gitconfig

#RUN git config --global user.email "skulines@mail.ru"
#RUN git config --global user.name "pers1307"

#RUN apt-get autoclean && rm -r /var/lib/apt/lists/*

RUN usermod -u 1000 www-data
USER 1000

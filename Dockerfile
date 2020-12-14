FROM php:7.4-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y zip unzip \
    && apt-get install -y libcurl4-openssl-dev pkg-config libssl-dev \
	&& pecl install mongodb && docker-php-ext-enable mongodb

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

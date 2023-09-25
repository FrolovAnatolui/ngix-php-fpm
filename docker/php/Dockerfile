#FROM php:7-fpm
FROM php:8-fpm

RUN apt-get update && apt-get install -y
RUN apt-get update && apt-get install -y \
    git \
    libzip-dev \
    unzip

RUN pecl install zip && docker-php-ext-enable zip

RUN docker-php-ext-install pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN pecl install xdebug
#COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
RUN apt-get install git
RUN docker-php-ext-enable xdebug
RUN composer global require phpunit/phpunit


WORKDIR /var/www

CMD ["php-fpm"]

EXPOSE 9000





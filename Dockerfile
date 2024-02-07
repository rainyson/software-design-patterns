FROM php:8.2-fpm-alpine

RUN apk update && apk upgrade
RUN docker-php-ext-install pdo pdo_mysql

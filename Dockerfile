FROM php:7.1.21-cli-alpine

COPY --from=composer:1.7.2 /usr/bin/composer /usr/bin/composer

RUN apk add --update git zlib-dev libpng-dev freetype-dev libjpeg-turbo-dev && \
  docker-php-ext-install zip gd

WORKDIR /app

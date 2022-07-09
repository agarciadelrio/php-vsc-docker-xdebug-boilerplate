FROM php:7.4-alpine
LABEL Name=phpdebug Version=0.0.1
WORKDIR /app
RUN apk update
RUN apk add --no-cache $PHPIZE_DEPS
RUN pecl install -f xdebug && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini;
COPY ./app /app
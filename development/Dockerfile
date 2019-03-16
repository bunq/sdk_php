FROM php:7.2-cli

RUN apt-get update -yqq \
 && apt-get install -yqq \
    # install ping and netcat (for debugging xdebug connectivity)
    iputils-ping netcat \
    wget \
;
RUN  pecl config-set php_ini /usr/local/etc/php/php.ini \
    && pecl install xdebug
COPY ./development/php.ini /usr/local/etc/php/php.ini

RUN wget https://phar.phpunit.de/phpunit-6.5.phar \
    && chmod +x phpunit-6.5.phar \
    && mv phpunit-6.5.phar /usr/local/bin/phpunit \
    && phpunit --version

EXPOSE 9000

CMD ["bin/sh"]
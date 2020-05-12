ARG WP_VERSION=5.4.1
ARG PHP_VERSION=5.6
ARG PHP_UNIT_VERSION=5.7.20
FROM wordpress:${WP_VERSION}-php${PHP_VERSION}

ARG PHP_UNIT_VERSION

RUN apt-get update && apt-get install -y less \
    wget \
    subversion \
    default-mysql-client

RUN curl -s https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

RUN wget https://phar.phpunit.de/phpunit-${PHP_UNIT_VERSION}.phar && \
    chmod +x phpunit-${PHP_UNIT_VERSION}.phar && \
    mv phpunit-${PHP_UNIT_VERSION}.phar /usr/local/bin/phpunit

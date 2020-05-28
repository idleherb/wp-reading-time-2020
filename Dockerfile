ARG PHP_VERSION=7.3
ARG WP_VERSION=5.4.1
FROM wordpress:${WP_VERSION}-php${PHP_VERSION}

ARG PHP_VERSION

RUN apt-get update && apt-get install -y less \
    wget \
    subversion \
    default-mysql-client

RUN curl -s https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

RUN /bin/bash -c '\
    if [[ $PHP_VERSION == 7.1.* ]] || \
        [[ $PHP_VERSION == 7.2.* ]] || \
        [[ $PHP_VERSION == 7.3.* ]] || \
        [[ $PHP_VERSION == 7.4.* ]] \
    ; then \
        pecl install xdebug && \
        docker-php-ext-enable xdebug \
    ; fi \
'

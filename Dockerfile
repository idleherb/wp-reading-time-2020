ARG PHP_VERSION=7.3
ARG WP_VERSION=5.4.1
FROM wordpress:${WP_VERSION}-php${PHP_VERSION}

RUN apt-get update && apt-get install -y less \
    wget \
    subversion \
    default-mysql-client

RUN curl -s https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

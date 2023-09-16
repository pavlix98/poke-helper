FROM php:8.1-fpm-alpine

ARG SYMFONY_CLI_VERSION=5.4.8

# install php extensions
RUN apk add --no-cache \
        git \
        libzip-dev \
        zip \
    && docker-php-ext-install zip \
    ;

# Install postgreSQL PDO
RUN apk add --no-cache php-pgsql \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Chromium and ChromeDriver
ENV PANTHER_NO_SANDBOX 1
ENV PANTHER_CHROME_ARGUMENTS='--disable-dev-shm-usage'
RUN apk add --no-cache chromium chromium-chromedriver

# install symfony CLI
RUN wget https://github.com/symfony-cli/symfony-cli/releases/download/v${SYMFONY_CLI_VERSION}/symfony-cli_${SYMFONY_CLI_VERSION}_x86_64.apk

RUN apk add --allow-untrusted ./symfony-cli_${SYMFONY_CLI_VERSION}_x86_64.apk
RUN rm ./symfony-cli_${SYMFONY_CLI_VERSION}_x86_64.apk

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# create user
RUN adduser --disabled-password --uid 1000 user
USER user

FROM php:8.1-fpm-alpine

ARG SYMFONY_CLI_VERSION=5.4.8

# install php
RUN apk add --no-cache \
        git \
    ;


# install symfony CLI
RUN wget https://github.com/symfony-cli/symfony-cli/releases/download/v${SYMFONY_CLI_VERSION}/symfony-cli_${SYMFONY_CLI_VERSION}_x86_64.apk

RUN apk add --allow-untrusted ./symfony-cli_${SYMFONY_CLI_VERSION}_x86_64.apk
RUN rm ./symfony-cli_${SYMFONY_CLI_VERSION}_x86_64.apk

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# create user
RUN adduser --disabled-password --uid 1000 user
USER user

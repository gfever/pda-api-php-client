FROM php:7.4.9-cli

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && apt-get install -y \
  libonig-dev \
  gnupg2 \
  sudo \
  curl \
  unzip \
  git \
  gettext-base \
  libssl-dev \
  zlib1g-dev \
  libcurl4-gnutls-dev \
  libzip-dev \
  libpng-dev

# install & configure php extensions
RUN pecl install xdebug \
  && pecl install protobuf \
  && docker-php-ext-enable xdebug \
  && docker-php-ext-enable protobuf \
  && docker-php-ext-install -j$(nproc) zip curl pdo_mysql bcmath mbstring gd sockets \
  && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ARG PROTOC_ZIP=protoc-3.7.1-linux-x86_64.zip
RUN curl -OL https://github.com/protocolbuffers/protobuf/releases/download/v3.7.1/$PROTOC_ZIP
RUN unzip -o $PROTOC_ZIP -d /usr/local bin/protoc
RUN unzip -o $PROTOC_ZIP -d /usr/local 'include/*'
RUN rm -f $PROTOC_ZIP

# configure php
WORKDIR /app

COPY /docker/php/php.ini /usr/local/etc/php/php.ini
COPY /docker/php/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

ADD ./ /app
WORKDIR /app

# build backend
RUN composer install

RUN chmod 777 /app/docker/entrypoint.sh
ENTRYPOINT ["sh", "docker/entrypoint.sh"]
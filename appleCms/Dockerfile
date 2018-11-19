FROM php:7.2.4-apache

MAINTAINER jeven<10396857@qq.com>

ENV WWW_ROOT /var/www/html/

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

RUN apt-get install -y  unzip\
    && cd ${WWW_ROOT}  \
    && ls -l \
    && rm -rf * \
    && curl http://down.maccms.com/10x/maccms10.zip -o cms.zip --progress  \
    && unzip cms.zip  \
    && chmod -R 777 * \
    && rm -f cms.zip  \
    && rm -rf /var/lib/apt/lists/*  \
    && ls -l 

FROM php:7.2.4-apache

MAINTAINER jeven<10396857@qq.com>

ENV WWW_ROOT /var/www/html/

RUN apt-get update  \
    && apt-get install -y  unzip php-gd\
    && cd ${WWW_ROOT}  \
    && ls -l \
    && rm -rf * \
    && curl http://down.maccms.com/10x/maccms10.zip -o cms.zip --progress  \
    && unzip cms.zip  \
    && chmod -R 777 * \
    && rm -f cms.zip  \
    && rm -rf /var/lib/apt/lists/*  \
    && ls -l 

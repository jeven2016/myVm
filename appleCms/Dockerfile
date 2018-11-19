FROM php:5.6-apache

MAINTAINER jeven<10396857@qq.com>

ENV WWW_ROOT /var/www/html/

RUN apt-get update \
    && apt-get install -y unzip php5-gd php5-mysql docker-php-ext-install  \
    && cd ${WWW_ROOT}  \
    && ls -l \
    && curl http://down.maccms.com/10x/maccms10.zip -o cms.zip --progress  \
    && unzip cms.zip  \
    && chmod -R 777 * \
    && rm -f cms.zip  \
    && ls -l 

EXPOSE 80 443

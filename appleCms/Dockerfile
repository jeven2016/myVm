FROM php:5.6-apache

MAINTAINER jeven<10396857@qq.com>

ENV WWW_ROOT /var/www/html

RUN apt-get update \
    && apt-get install unzip \
    && curl http://down.maccms.com/10x/maccms10.zip -o cms.zip --progress  \
    && mv cms.zip ${WWW_ROOT}  \
    && cd ${WWW_ROOT}  \
    && unzip cms.zip  \
    && rm -f cms.zip  \
    && ls -l 

EXPOSE 80 443
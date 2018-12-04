#FROM php:7.2.4-apache
FROM php:7.2.12-apache


MAINTAINER jeven<10396857@qq.com>

ENV WWW_ROOT /var/www/html/
RUN rm -rf ${WWW_ROOT}/* 
COPY 4.0.181010.zip /var/www/html/cms.zip
RUN ls -l ${WWW_ROOT}

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    zlib1g-dev \
    libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd  \
    && docker-php-ext-install pdo_mysql  \
    && docker-php-ext-install zip \
    && echo "php env is aviable now......."

RUN apt-get install -y  unzip  \
    && cd ${WWW_ROOT}  \
    && echo "list all files in this direct" \
    && pwd  \
    && ls -l \
    && unzip *.zip  \
    && chmod -R 777 * \
    && rm -rf /var/lib/apt/lists/*  \
    && rm -f *.zip  \
    && mv admin.php myAdmin.php \
    && ls -l

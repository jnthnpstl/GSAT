FROM php:7.4-fpm

RUN sed -i 's/9000/9120/' /usr/local/etc/php-fpm.d/zz-docker.conf

WORKDIR /var/www/GSAT


ENV TZ=Asia/Manila

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update \
    && apt-get install -y \
    curl \
    zip \
    unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo pdo_mysql

# RUN docker-php-ext-install pdo pdo_mysql\
#     && docker-php-ext-install zip

RUN php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer


RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

COPY --chown=www:www . /var/www/GSAT

USER www


CMD ["php-fpm"]

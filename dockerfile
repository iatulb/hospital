FROM composer:latest

RUN docker-php-ext-install mysqli pdo pdo_mysql sockets

WORKDIR "/"

RUN git clone -b master https://github.com/iatulb/service1.git

WORKDIR "/service1"

RUN git pull origin master

RUN composer install \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --no-dev \
    --prefer-dist

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080", "-t", "public/"]

FROM composer:latest

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

RUN apt-get install php-mysql

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080", "-t", "public/"]

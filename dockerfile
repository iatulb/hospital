FROM composer:latest

WORKDIR /app

COPY * /app

COPY package*.json ./

RUN composer install \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --no-dev \
    --prefer-dist

EXPOSE 8080

COPY . /app

CMD ["php", "-S", "0.0.0.0:8080", "-t", "public/"]
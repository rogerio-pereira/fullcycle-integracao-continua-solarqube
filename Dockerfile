FROM php:8.2

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install

CMD ["php", "/var/www/html/src/Math.php"]
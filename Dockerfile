FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libzip-dev unzip git sqlite3 libsqlite3-dev \
    && docker-php-ext-install zip pdo pdo_sqlite

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]



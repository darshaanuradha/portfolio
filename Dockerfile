FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libzip-dev unzip git sqlite3 libsqlite3-dev curl \
    && docker-php-ext-install zip pdo pdo_sqlite \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Install Node.js v18 and npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm

WORKDIR /var/www/html

# Copy Composer from official image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy app files
COPY . .

# Install PHP deps
RUN composer install --no-dev --optimize-autoloader

# Build frontend assets
RUN npm install
RUN npm run build

# Copy and prepare entrypoint
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache database public/build

# Use entrypoint at runtime
CMD ["/entrypoint.sh"]

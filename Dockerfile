FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libzip-dev unzip git sqlite3 libsqlite3-dev curl \
    && docker-php-ext-install zip pdo pdo_sqlite \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Install Node.js (v18 LTS) and npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm --version

WORKDIR /var/www/html

# Copy Composer binary from official Composer image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy all files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node.js dependencies and build assets with Vite
RUN npm install
RUN npm run build

# Set permissions for Laravel folders, including database and build assets
RUN chown -R www-data:www-data storage bootstrap/cache database public/build

# Create SQLite database file if it doesn't exist
RUN touch database/database.sqlite

# Expose port 8000
EXPOSE 8000

# Start Laravel's built-in PHP server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

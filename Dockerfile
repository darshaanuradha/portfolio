FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libzip-dev unzip git sqlite3 libsqlite3-dev curl \
    && docker-php-ext-install zip pdo pdo_sqlite \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Install Node.js & npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm

# Set workdir
WORKDIR /var/www/html
RUN touch /opt/render/project/src/database/database.sqlite \
    && chown -R www-data:www-data /opt/render/project/src/database/database.sqlite

RUN chmod -R 775 /opt/render/project/src/database
# Copy Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy files
COPY . .

# Install PHP deps
RUN composer install --no-dev --optimize-autoloader

# Install and build frontend
RUN npm install && npm run build

# Copy entrypoint
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Final permissions
RUN chown -R www-data:www-data storage bootstrap/cache database public/build

CMD ["/entrypoint.sh"]


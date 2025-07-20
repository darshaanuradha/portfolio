FROM php:8.2-apache

# Update and install all dependencies properly in one RUN block
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git sqlite3 libsqlite3-dev curl \
    && docker-php-ext-install zip pdo pdo_sqlite \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Install Node.js & npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm \
    && rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www/html

# Copy Composer binary
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node modules and build frontend assets
RUN npm install
RUN npm run build

# Copy and set permissions for entrypoint
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Set ownership for Laravel folders and built assets
RUN chown -R www-data:www-data storage bootstrap/cache database public/build

# Start Laravel app using entrypoint script
CMD ["/entrypoint.sh"]

FROM php:8.2-apache

RUN apt-get update && apt-get install -y 
RUN libzip-dev unzip git sqlite3 libsqlite3-dev curl 
RUN docker-php-ext-install zip pdo pdo_sqlite 
RUN a2enmod rewrite 
RUN rm -rf /var/lib/apt/lists/*

# Install Node.js & npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - 
RUN apt-get install -y nodejs 
RUN  npm install -g npm

# Set workdir
WORKDIR /var/www/html

# Copy Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy files
COPY . .

# Install PHP deps
RUN composer install --no-dev --optimize-autoloader

# Install and build frontend
RUN npm run build

# Copy entrypoint
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Final permissions
RUN chown -R www-data:www-data storage bootstrap/cache database public/build

# Start app
CMD ["/entrypoint.sh"]

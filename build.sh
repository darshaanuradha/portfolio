#!/usr/bin/env bash

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Create SQLite file if not exists
mkdir -p database
touch database/database.sqlite

# Set permissions
chmod -R 775 storage bootstrap/cache

# Run migrations
php artisan migrate --force

# Link storage
php artisan storage:link

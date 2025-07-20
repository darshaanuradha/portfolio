#!/bin/bash

# Ensure SQLite DB file exists
if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
  echo "✔ SQLite database file created"
fi

# Set permissions
chown -R www-data:www-data storage bootstrap/cache database

# Clear and rebuild cache
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan config:cache

# Optional: Run migrations
php artisan migrate --force || echo "⚠️ Migrations skipped or failed"

# Start Laravel development server
php artisan serve --host=0.0.0.0 --port=8000

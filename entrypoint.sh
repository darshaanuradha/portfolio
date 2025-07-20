#!/bin/bash

# ✅ Create SQLite file if it doesn’t exist
if [ ! -f /opt/render/project/src/database/database.sqlite ]; then
  echo "Creating SQLite DB file..."
  touch /opt/render/project/src/database/database.sqlite
fi

# ✅ Permissions
chown -R www-data:www-data /opt/render/project/src/storage /opt/render/project/src/bootstrap/cache

# ✅ Laravel setup
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan config:cache

# # ✅ Run migrations (optional if not needed)
# php artisan migrate --force || echo "⚠️ Migration failed or skipped"

# ✅ Start server
php artisan serve --host=0.0.0.0 --port=8000

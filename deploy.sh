#!/bin/bash

echo "🚀 Starting Portfolio Deployment..."

# Clear all caches
echo "📦 Clearing caches..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Optimize for production
echo "⚡ Optimizing for production..."
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Build assets
echo "🎨 Building assets..."
npm run build

# Run migrations
echo "🗄️ Running migrations..."
php artisan migrate --force

# Seed admin user if not exists
echo "👤 Seeding admin user..."
php artisan db:seed --class=AdminUserSeeder

echo "✅ Deployment preparation complete!"
echo ""
echo "📋 Next steps:"
echo "1. Choose your deployment platform:"
echo "   - Vercel: vercel --prod"
echo "   - Railway: railway up"
echo "   - Shared hosting: Upload files to public_html"
echo ""
echo "🔑 Admin credentials:"
echo "   - Email: admin@portfolio.com"
echo "   - Password: admin123"
echo ""
echo "📧 Don't forget to configure email settings in your .env file!" 
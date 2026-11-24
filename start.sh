#!/usr/bin/env bash
set -e

echo "Starting deployment initialization..."

# Automatically enforce HTTPS URLs on Railway
if [ -n "${RAILWAY_PUBLIC_DOMAIN}" ]; then
    export APP_URL="https://${RAILWAY_PUBLIC_DOMAIN}"
    export ASSET_URL="https://${RAILWAY_PUBLIC_DOMAIN}"
elif [ -n "${APP_URL}" ]; then
    export APP_URL="${APP_URL/http:\/\//https:\/\/}"
    export ASSET_URL="${APP_URL}"
fi

# Ensure SQLite file exists
mkdir -p database
if [ ! -f "database/database.sqlite" ]; then
    touch database/database.sqlite
    php artisan migrate --force
    php artisan db:seed --force
fi

# Clear and re-cache configuration, routes, and views for production performance
php artisan config:clear
php artisan route:clear
php artisan view:clear

php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run database migrations and seeders explicitly
php artisan migrate --force
php artisan db:seed --force

echo "Application ready. Starting web server on port ${PORT:-8080}..."
php artisan serve --host=0.0.0.0 --port=${PORT:-8080}

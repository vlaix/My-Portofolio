#!/usr/bin/env bash
set -e

echo "Starting deployment initialization..."

# Automatically enforce HTTPS URLs on Railway
if [ -n "${RAILWAY_PUBLIC_DOMAIN}" ]; then
    export APP_URL="https://${RAILWAY_PUBLIC_DOMAIN}"
    export ASSET_URL="https://${RAILWAY_PUBLIC_DOMAIN}"
fi

# If using SQLite, create database file if it doesn't exist
if [ "${DB_CONNECTION}" = "sqlite" ] || [ -z "${DB_CONNECTION}" ]; then
    mkdir -p database
    touch database/database.sqlite
fi

# Cache configuration, routes, and views for production performance
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run database migrations and seeders
php artisan migrate --force --seed

echo "Application ready. Starting web server on port ${PORT:-8080}..."
php artisan serve --host=0.0.0.0 --port=${PORT:-8080}

web: vendor/bin/heroku-php-apache2 public/ -C apache_app.conf
release: composer install --no-dev --optimize-autoloader && php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan view:cache && php artisan storage:link

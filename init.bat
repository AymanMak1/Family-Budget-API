call composer install --no-interaction --quiet
copy .env.example .env
call php artisan key:generate
type nul > database/database.sqlite
call php artisan migrate:fresh
call php artisan db:seed
mkdir .\storage\app\public
call php artisan storage:link
call php artisan serve

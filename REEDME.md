
## Развернуть Бэк
1. git clone https://github.com/DenisRV92/REST-API.git
2. cd REST-API
3. composer install
4. Файл .env.example переименовать в .env
5. php artisan key:generate
6. В файле .env прописать доступы к базе данных - строчки 11-16
7. Выполнить миграции БД и генерацию случайных пользователей - php artisan migrate --seed

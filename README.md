# AuthBase-laravel-11
This project was created to implement registration and authorization without any starter kits on Laravel 11, using only Bootstrap (without the need to use npm run dev to compile frontend resources).

To run the project, use the following commands:

composer update

In the root directory of your project, create a new file named .env.

Open the .env.example file and copy all its contents.

Paste the copied contents into the newly created .env file.

php artisan key:generate

php artisan config:cache

php artisan migrate --seed

php artisan serve


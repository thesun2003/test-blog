# Test Blog application
- Laravel 5.3
- PHP 7
- MongoDB
- MySQL

# Quick start
- Install composer
- Run "composer install" in the project root folder
- Update .env with appropriate settings
- Run "php artisan migrate"
- Run "mongoimport -d test_blog -c posts < posts.json" to populate some posts data
- Run "phpunit" to see that tests passed
- Run "php artisan serve" to start Development server on http://localhost:8000/

p.s. Admin page available only for signed in users. You need to Register before Login.

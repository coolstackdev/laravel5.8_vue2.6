1. Update .env file with your mysql config.(DB_USERNAME, DB_PASSWORD)
2. Run 'composer install'
3. Run 'npm install'
4. Run 'npm run dev'
5. Run 'php artisan migrate:fresh --seed'. This adds two users to 'users' table. One is 'john@gmail.com, 123456', 'richard@gmail.com, 123456'. You can login to with these credential.
6. Run 'php artisan serve'
7. Visit '127.0.0.1:8000' then you will be directed to 'login' page. You can register yourself in 'register' page.
8. You can submit feedback. Then this will be stored in 'reviews' table. You can check all the data in database.

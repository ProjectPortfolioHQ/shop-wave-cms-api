# Prerequisite

-   PHP >= 8.1
-   MySQL >= 8
-   Composer >= 2.5

# Install dependencies

-   composer install

# Run seeder

-   Go to product.php in Models, uncomment `public $timestamps`, comment note.
-   run `php artisan migrate:fresh --seed`

# Access cms

-   Access `localhost:8000`, it will redirect to admin login page
-   Use email `admin@email.com`, password is `password`

# Route

-   Run `php artisan route:list` to see all available routes

# Priverion Test

This is a priverion test of Helberth Espindola. This test was made using Laravel + React.

## Frameworks and tools

-   **[Laravel](https://laravel.com/docs/10.x)**
-   **[Breeze](https://github.com/laravel/breeze)**
-   **[Inertiajs](https://inertiajs.com/)**
-   **[React](https://react.dev/)**

## Guides

This guides was used in this test:

-   **[bootcamp.laravel](https://bootcamp.laravel.com/)**

## Process

### Step 1: Install Laravel 9

Before creating your first Laravel project, you should ensure that your local machine has PHP and [Composer](https://getcomposer.org/) installed.

```sh
$ composer create-project laravel/laravel priverion-test
$ cd priverion-test
$ php artisan serve
```

### Step 2: Installing Laravel Breeze

Open a new terminal in your `priverion-test` project directory and install your chosen stack with the given commands:

```sh
$ composer require laravel/breeze --dev
$ php artisan breeze:install react
$ npm run dev
```

### Step 3: Create Initial Migration and Models

Open another terminal in your `priverion-test` project directory and run the initial database migrations to populate the database with the default tables from Laravel and Breeze:

```sh
$ php artisan migrate
```

Let's create the following models: Quiz, Question
Additionally, we can create a migration and resource controllers for these models:

```sh
$ php artisan make:model -mrc Quiz
$ php artisan make:model -mrc Question
$ php artisan migrate:fresh
```

### Step 4: Add Routes

To start with, we are going to enable two routes:

-   The `index` route will display our form and a listing of Quizzes.
-   The `store` route will be used for saving new Quizzes.

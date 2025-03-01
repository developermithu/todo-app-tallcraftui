# TallCraftUI Demo - Todo Application

This is a simple todo application built with [Laravel 12](https://laravel.com), [Livewire 3](https://laravel-livewire.com), [Tailwind CSS 4](https://tailwindcss.com) and [TallCraftUI V2](https://tallcraftui.developermithu.com).

## Installation Guide

1. Clone the repository

```bash
git clone https://github.com/developermithu/todo-app-tallcraftui.git
```

2. Change directory

```bash
cd todo-app-tallcraftui
```

3. Install dependencies

```bash
composer install
```

4. Copy the `.env.example` file to `.env` and update the configurations

```bash
cp .env.example .env
```

5. Generate the application key

```bash
php artisan key:generate
```

6. Migrate and seed the database

```bash
php artisan migrate:fresh --seed
```

7. Install npm dependencies & run the development server

```bash
npm install && npm run dev
```

8. Visit the application in your browser at `http://todo-app-tallcraftui.test`
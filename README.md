# TallCraftUI Demo - Todo Application

This is a simple todo application built with [Laravel 12](https://laravel.com), [Livewire 3](https://laravel-livewire.com), [Tailwind CSS 4](https://tailwindcss.com) and [TallCraftUI V2](https://tallcraftui.developermithu.com).

![Screenshot](/public/screenshot.png)

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

8. Visit the application in your browser at `http://todo-app-tallcraftui.test` or `http://localhost:8000`

## Project Features

- [x] Todo List
- [x] Create Todo
- [x] Update Todo
- [x] Delete Todo
- [x] Mark Todo as Completed
- [x] Display Toast Notifications
- [x] Modal for Editing Todo
- [x] Responsive design
- [ ] Dark mode
- [ ] GitHub Actions for CI/CD
- [ ] Unit Testing

## Contributing

Contributions are welcome! Please feel free to submit [pull requests](https://github.com/developermithu/todo-app-tallcraftui/pulls) or [issues](https://github.com/developermithu/todo-app-tallcraftui/issues) to improve this project.
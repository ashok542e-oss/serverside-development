# Server-Side Development - My First Project (Laravel)

This repository contains the practical lab coursework for the **Server-Side Development** course (Parts 1 & 2), built using **Laravel** and **TailwindCSS**.

## 📌 Project Overview
- **Framework:** Laravel 11 / 12
- **Environment:** Laravel Herd / PHP 8.4
- **Database:** SQLite
- **Styling:** TailwindCSS

---

## 🚀 Lab Tasks Implemented

### Part 1: Project Setup & Blade Basics
- Configured Laravel with SQLite database and environment variables.
- Configured application routes (`routes/web.php`).
- Built modular Blade views (`home`, `contact`, `jobs`).
- Created reusable component layout (`<x-layout>`) utilizing Blade dynamic `$slot`.

### Part 2: Dynamic Views, Navigation & Data Passing
- Styled navigation shell with TailwindCSS.
- Developed an `<x-nav-link>` component featuring dynamic active page indicators (`:active="request()->is(...)"`).
- Implemented named slots (`<x-slot:heading>`) for contextual page titles.
- Passed associative arrays from routing handlers into views.
- Rendered list collections via `@foreach` directives.
- Implemented single dynamic item views using route parameters (`/jobs/{id}`) and array helper lookup (`Arr::first`).

---

## 🗂️ Project Structure Highlights
```
myFirstProject/
├── routes/
│   └── web.php                          # Application route handlers & data sources
└── resources/
    └── views/
        ├── components/
        │   ├── layout.blade.php         # Master Tailwind application layout
        │   └── nav-link.blade.php       # Nav link component with active state handling
        ├── home.blade.php               # Home page view
        ├── jobs.blade.php               # Jobs listing view
        ├── job.blade.php                # Individual job detail view
        └── contact.blade.php            # Contact view
```

---

## ⚙️ Local Setup Instructions
1. Clone the repository:
   ```bash
   git clone https://github.com/ashok542e-oss/myFirstProject.git
   cd myFirstProject
   ```
2. Install dependencies:
   ```bash
   composer install
   ```
3. Set up environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Prepare SQLite database:
   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```
5. Serve the application:
   ```bash
   php artisan serve
   ```
   Or visit `http://myfirstproject.test` if using Laravel Herd.

# 📝 Laravel Task Manager (WIP)

A simple and clean task management app built with Laravel 11 and Tailwind CSS.  
This is a personal project created to practice and showcase my Laravel skills — and is currently a **work in progress**.

---

## 🚀 Features (So far)

- Add new tasks (title + optional description)
- View tasks in a clean, responsive layout
- Mark tasks as completed or undo
- Delete tasks
- Basic styling with Tailwind CSS

---

## 🔐 Coming Soon

- ✅ User Authentication (Login, Register, Logout) using Laravel Breeze  
- ✅ User-specific tasks (each user sees only their own)  
- ✅ Task ownership & authorization via Laravel Policies  
- ⏳ Task due dates and priority levels  
- ⏳ Daily task email reminders (notifications + scheduler)  
- ⏳ Livewire/AlpineJS for instant UI updates  
- ⏳ Dark mode toggle  
- ⏳ Deploy to Fly.io or Render with Docker  

---

## 📦 Tech Stack

- [Laravel 11](https://laravel.com)
- [Tailwind CSS](https://tailwindcss.com)
- [Breeze (Blade stack)](https://laravel.com/docs/starter-kits#laravel-breeze)
- SQLite (dev)
- Vite (frontend build)

---

## 🛠 Setup Instructions


git clone https://github.com/your-username/task-manager.git
cd task-manager

composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate

# (Ensure SQLite is configured in your .env)
touch database/database.sqlite
php artisan migrate

php artisan serve        


## 🙋🏽‍♂️ Why This Project?


I'm currently learning Laravel and working toward a backend internship.
This app is meant to practice:

Working with Laravel 11

Building full CRUD functionality

Implementing real-world features like auth, policies, and background jobs

Writing clean, maintainable code



## Status


⚠️ This project is actively being developed. Expect things to change quickly!

📫 Contact
If you're hiring or mentoring and want to connect, feel free to reach out:

Email:meshackzkl@gmail.com



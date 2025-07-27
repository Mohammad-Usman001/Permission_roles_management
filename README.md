# Permission Roles Management (Laravel + Spatie)

A role and permission-based access control system built using Laravel and the Spatie Permission package. This project provides a secure admin panel where access is controlled based on user roles and permissions. It includes modules for managing users, roles, permissions, and articles.

## 🚀 Features

- Role and permission management using [Spatie Laravel-Permission](https://github.com/spatie/laravel-permission)
- Superadmin with full access to all resources and actions
- User-based access control with predefined roles (e.g., Writer, Manager)
- CRUD operations for Articles with permission restrictions
- Admin panel with dynamic access control based on roles
- Roles can be assigned and permissions managed via UI
- You can Create New Roles and Permissions according to Your Roles Provided By SuperAdmin and Manager

## 🧑‍💼 User Roles

- **Superadmin**
  - Has access to all modules and actions
  - Can manage roles, permissions, users, and articles

- **Manager**
  - Can manage roles and permissions
  - Assign roles to users
  - View and manage articles

- **Writer**
  - Can only create, edit, and view articles
  - Cannot manage users, roles, or permissions

## 📦 Technologies Used

- Laravel 12
- Spatie Laravel Permission
- Laravel Breeze
- Bootstrap
- MySQL
- Blade Templating

## 📁 Modules

- **Authentication** – Laravel's built-in authentication system
- **Users** – Manage users and assign roles
- **Roles & Permissions** – Dynamically create and assign
- **Articles** – Writers can manage their content; Managers/Superadmins can manage all

# 🏗️ Monolithic PHP MVC Application

A custom-built monolithic web application developed in pure PHP following the MVC (Model-View-Controller) architectural pattern.

This project was created to demonstrate a deep understanding of core PHP concepts and software architecture without relying on frameworks such as Laravel or Symfony.

---

## 🚀 Overview

This application implements many features commonly provided by modern frameworks, including:

- Custom routing system
- MVC architecture
- Dependency management with Composer
- Front controller pattern
- Basic testing with PHPUnit
- Configuration management
- Clean separation of concerns

The project is designed as a single deployable application (monolith), where all components—routing, controllers, views, and business logic—are contained in one codebase.

---

## 🛠️ Technologies Used

- PHP 8+
- Composer
- PHPUnit
- Apache / Nginx
- MVC Architecture

---

## 📂 Project Structure

```bash
monolithicApp/
│
├── Core/              # Core framework classes (Router, Request, Response, etc.)
├── Http/              # Controllers, middleware, and HTTP-related classes
├── public/            # Public entry point (index.php) and static assets
├── tests/             # Unit and integration tests
├── views/             # Application templates
│
├── .gitignore
├── .htaccess
├── bootstrap.php      # Application bootstrap and initialization
├── composer.json      # Composer dependencies and autoloading
├── composer.lock
├── config.php         # Application configuration
├── phpunit.xml        # PHPUnit configuration
└── routes.php         # Route definitions

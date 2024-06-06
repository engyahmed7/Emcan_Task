# Learning Management System

## Introduction

This is a Laravel-based web application for managing courses. It includes features for creating, reading, updating, and deleting (CRUD) courses. Additionally, it includes a contact form to send messages to the admin via email.

## Features

- User authentication (registration and login) using Laravel Breeze.
- CRUD operations for managing courses.
- Contact form to send messages to the admin.
- Form validation using Laravel's Form Request feature.
- Email sending using Laravel's mail functionality.

## Prerequisites

- PHP >= 8.0
- Composer
- MySQL
- Node.js & npm

## Installation

### Step 1: Clone the Repository

```bash
git clone https://github.com/engyahmed7/Emcan_Task.git
cd Emcan_Task
```

### Step 2: Install Dependencies

```bash
composer install
npm install
npm run dev
```

### Step 3: Environment Setup

Copy the `.env.example` file to `.env` and adjust the environment variables as needed.

```bash
cp .env.example .env
```

Update the necessary variables in your `.env` file, particularly the database and mail configuration:

- `DB_CONNECTION`
- `DB_HOST`
- `DB_PORT`
- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`
- `MAIL_MAILER`
- `MAIL_HOST`
- `MAIL_PORT`
- `MAIL_USERNAME`
- `MAIL_PASSWORD`
- `MAIL_ENCRYPTION`
- `MAIL_FROM_ADDRESS`
- `MAIL_FROM_NAME`

### Step 4: Generate Application Key

```bash
php artisan key:generate
```

### Step 5: Run Migrations

```bash
php artisan migrate
```

### Step 6: Serve the Application

```bash
php artisan serve
```

Open your browser and navigate to `http://localhost:8000`.

## Usage

### Authentication

- Register a new user or login with existing credentials.
- Only authenticated users can manage courses.

### Courses Management

1. **List Courses**: Navigate to the Courses page to see a list of all courses.
2. **Create Course**: Click on the "Add New Course" button to create a new course.
3. **Edit Course**: Click on the "Edit" button next to a course to edit its details.
4. **Delete Course**: Click on the "Delete" button next to a course to delete it.

### Contact Form

- Navigate to the Contact page.
- Fill in the form with your name, email, and message.
- Submit the form to send an email to the admin.

## Project Structure

```
.
├── app
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── CourseController.php
│   │   │   ├── ContactController.php
│   │   ├── Requests
│   │   │   ├── CourseRequest.php
│   │   │   ├── ContactRequest.php
│   ├── Mail
│   │   ├── ContactMail.php
├── resources
│   ├── views
│   │   ├── courses
│   │   │   ├── create.blade.php
│   │   │   ├── edit.blade.php
│   │   │   ├── index.blade.php
│   │   │   ├── show.blade.php
│   │   ├── emails
│   │   │   ├── contact.blade.php
│   │   ├── contact.blade.php
│   │   ├── layouts
│   │   │   ├── app.blade.php
├── routes
│   ├── web.php
└── .env
```

## Demo Video

You can watch the demo video for the Learning Management System below:

[Course Management Application Demo](https://www.youtube.com/watch?v=PORo2McCbPI)


## Contribution

If you wish to contribute to this project, please fork the repository and submit a pull request.

## License

This project is licensed under the MIT License. See the LICENSE file for details.

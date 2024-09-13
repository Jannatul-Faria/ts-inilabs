# To-Do App

This is a simple To-Do application built with Laravel. Users can create, update, view, and delete their to-do tasks. Each to-do is linked to an authenticated user. The app features user authentication using Laravel Breeze and a custom dashboard for the front-end. It demonstrates basic CRUD (Create, Read, Update, Delete) operations, user authentication, and database relationships.

## Features

- User Authentication (login, register) powered by Laravel Breeze
- Custom dashboard for displaying tasks
- Create To-Do items
- View all To-Dos by the authenticated user
- Update and mark To-Dos as completed or not completed
- Delete To-Do items
- Protect routes from unauthorized access

## Requirements

- PHP >= 8.0
- Composer
- Laravel >= 9.x
- MySQL or any other supported database
- Node.js and npm (for compiling assets)

## Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/Jannatul-Faria/ts-inilabs.git
   cd "To-Do app"
   ```

2. **Install dependencies**

   Install PHP dependencies using Composer:

   ```bash
   composer install
   ```

   Install front-end dependencies using npm:

   ```bash
   npm install
   ```

3. **Configure environment**

   Copy the `.env.example` file to `.env`:

   ```bash
   cp .env.example .env
   ```

   Set up the `.env` file with your database configuration. Example:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=to-do
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate application key**

   ```bash
   php artisan key:generate
   ```

5. **Run migrations**

   Create the necessary tables in the database by running the migrations:

   ```bash
   php artisan migrate
   ```

6. **Seed the database (optional)**

   If you have any seeders, you can run them as follows:

   ```bash
   php artisan db:seed
   ```

7. **Install Laravel Breeze**

   If you haven't already installed Laravel Breeze (for authentication), run the following:

   ```bash
   composer require laravel/breeze --dev
   php artisan breeze:install
   ```

   Then, compile the assets and migrate:

   ```bash
   npm install && npm run dev
   php artisan migrate
   ```

8. **Run the application**

   You can run the application using Laravel's development server:

   ```bash
   php artisan serve
   ```

   Access the application at [http://localhost:8000](http://localhost:8000).

## Custom Dashboard

The application features a custom dashboard for managing to-do tasks. Once logged in, users can view, create, update, and delete their tasks from the dashboard.

### Dashboard Layout

- **Home Page**: Displays a list of all to-do tasks.
- **Create To-Do**: A form to create a new task.
- **Edit To-Do**: Allows users to update the title and completion status of a task.

## Usage

### 1. Register / Login
To use the application, register a new account or log in using Laravel Breeze's authentication system.

### 2. Creating a To-Do
Once logged in, navigate to the 'Create To-Do' page via the custom dashboard and enter a title to add a new task.

### 3. Viewing To-Dos
You can view all of your to-dos on the home page of the dashboard.

### 4. Updating To-Dos
Click on a to-do item to edit its title or mark it as completed.

### 5. Deleting To-Dos
Click the delete button next to any to-do to remove it from the list.

## Code Overview

### Models
- `User`: The user model, representing the users of the app.
- `Todo`: The model for to-do items. Each to-do belongs to a user.

### Controllers
- `TodoController`: Handles CRUD operations for the to-do items.

### Views
- Custom Blade templates for the dashboard, user registration, login, and managing to-dos.
- The custom dashboard is built using Blade components.

### Routes
All application routes are defined in the `routes/web.php` file.

- **Home**: `/` - Displays the user's to-do list on the dashboard.
- **Create To-Do**: `/todos/create` - Form to create a new to-do.
- **Edit To-Do**: `/todos/{todo}/edit` - Form to edit a specific to-do.
- **Delete To-Do**: `/todos/{todo}` - Delete a specific to-do (handled via form submission with DELETE method).

### Middleware
- `auth`: Ensures that only authenticated users can access certain routes.

## Contributing

If you'd like to contribute to this project, feel free to submit a pull request or open an issue.

## License

This project is open-source and available under the [MIT License](LICENSE).
```

### Key Changes:
- **Breeze Authentication**: A section was added for Laravel Breeze installation.
- **Custom Dashboard**: Added details about the custom dashboard in the features and usage sections.
- **Database Information**: Used your provided database information in the `.env` setup.
  
You can adjust the repository URL and other minor details to match your exact setup.
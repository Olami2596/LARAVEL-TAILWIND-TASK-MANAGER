# Task Manager

Task Manager is a web application built using the popular PHP framework Laravel and designed with the CSS framework Tailwind, Alpine js was also used to make the web application interactive. It serves as a platform for creating tasks to be accomplished, providing a straightforward process to mark tasks as complete. The application incorporates essential CRUD functionalities for seamless task management.

## Table of Contents

- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Features](#features)

  
## Getting Started

These instructions will help you get a copy of the project up and running on your local machine or web server.

### Prerequisites

- [PHP](https://www.php.net/) >= 7.4
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/)
- [Tailwind](https://tailwindcss.com/)
- [Alpinejs](https://alpinejs.dev/)

### Installation

Clone the repository:

   ```bash
   git clone [https://github.com/your-username/your-repo](https://github.com/Olami2596/LARAVEL-TAILWIND-TASK-MANAGER).git
   ```

Navigate to the project directory:

   ```bash
   cd your-repo
   ```

Install dependencies:

   ```bash
   composer install
   npm install
    # or
   yarn install
   ```

Set up your environment variables:

   ```bash
    cp .env.example .env
    # configure database and other necessary settings in .env
    php artisan key:generate
   ```

Run migrations and seed the database:

   ```bash
    php artisan migrate --seed
   ```

Start the development server:

   ```bash
    php artisan serve
   ```


### Usage

1. **Adding a New Task:**

   After opening the application, navigate to the navigation bar where you can find an option to "Add New Task." Click on it to create a new task.

2. **Viewing, Searching and Filtering Tasks on the Home Page:**

   On the home page, newly added tasks will be displayed in black. You can easily identify and manage your tasks from this central hub. You can also search for tasks and filter tasks based on whether it has been completed or not.

3. **Managing Individual Tasks:**

   Click on each task on the home page to access individual task pages. From here, you have the options to edit or delete the task, providing flexibility and control over your task list.

4. **Marking Tasks as Completed:**

   After completing a task, use the "Mark as Completed" option. Once marked, returning to the home page will showcase completed tasks in a distinct green color, providing a visual indicator of completed items.


### Features

1. **Task Creation:**
   
   Easily add new tasks through the application's navigation bar. Streamlined task creation provides a quick way to organize your to-do list.

2. **Task Search and Filtering:**
   
   Effortlessly search for tasks and filter them based on their completion status. Quickly find the tasks you're looking for by specifying whether they have been completed or not.

3. **Visual Task Representation:**

   Tasks are visually represented in black on the home page, providing a clear and organized view of your current tasks.

4. **Task Detail Pages:**

   Clicking on each task on the home page leads to individual task pages. Here, you can edit or delete tasks, tailoring your task list to your evolving needs.

5. **Completion Tracking:**

   Utilize the "Mark as Completed" feature to signify task completion. Completed tasks are visually highlighted in green on the home page, offering a convenient way to identify accomplished items at a glance.

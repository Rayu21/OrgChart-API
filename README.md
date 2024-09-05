# Organizational-Chart-API

## Table of Contents

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Postman Collection](#postman-collection)

## Prerequisites

- PHP version 8.2 or higher
- Composer
- Laravel 10
- MySQL 

## Postman Collection

Locate the file:

The Postman collection file **Organizational-Chart.postman_collection.json** is available in the root directory of this repository.

## Installation

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/yourusername/your-repo.git
    cd your-repo
    ```

2. **Install Dependencies:**

    ```bash
    composer install
    ```

3. **Copy the Environment File:**

    ```bash
    cp .env.example .env
    ```

4. **Generate an Application Key:**

    ```bash
    php artisan key:generate
    ```

5. **Run Migrations:**

    ```bash
    php artisan migrate
    ```

6. **Seed the Database (Optional):**

    If you have seeders, you can populate the database with initial data:

    ```bash
    php artisan db:seed
    ```

## Configuration

Update your `.env` file with the correct database and other environment configurations. Below are the required environment variables:

- **DB_CONNECTION:** The database connection type (e.g., `mysql`).
- **DB_HOST:** The database host (e.g., `127.0.0.1`).
- **DB_PORT:** The database port (e.g., `3306`).
- **DB_DATABASE:** The name of the database.
- **DB_USERNAME:** The database username.
- **DB_PASSWORD:** The database password.

Example `.env` configuration:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=org-chart
DB_USERNAME=root
DB_PASSWORD=rayu



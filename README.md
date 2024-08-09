# Laravel-Post-Management

# Laravel version -> 10.x

# PHP version -> 8.2.13

# Database -> MySQL

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/Rupali-Baravkar/Student-manage.git
    cd Student-manage
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Copy the `.env` file:**

    ```bash
    cp .env.example .env
    ```

4. **Generate an application key:**
    ```bash
    php artisan key:generate
    ```

## Configuration

1.  **Update the `.env` file:**

        ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=student_management
    DB_USERNAME=root
    DB_PASSWORD=
    ```

## Running the Project

1. **Run database migrations:**

    ```bash
    php artisan migrate
    ```

    ```

    ```

2. **Start the development server:**

    ```bash
    php artisan serve
    ```

3. **Access the application:**

    Open your browser and go to `http://localhost:8000/students`.


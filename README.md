# Laravel Project: Human Resources Management System

## Description

This Laravel project aims to develop a comprehensive web application tailored to the needs of human resources directors, managers, and candidates. The primary goal is to streamline recruitment processes, reduce application entry and follow-up time, facilitate information sharing among department managers, and establish standardized CV formats. Additionally, the system will incorporate automatic selection and sorting criteria while maintaining a database of unsuccessful CVs.

## Requirements

- **PHP Version:** ^7.3|^8.0
- **Frameworks/Libraries:**
  - Laravel Framework: ^8.12
  - Laravel Passport: ^10.3
  - Laravel Sanctum: ^2.14
  - Laravel Tinker: ^2.5
  - Laravel UI: ^3.4
  - Livewire: ^2.10
  - AdminLTE: ~2.4
  - Guzzle HTTP: ^7.0.1
  - Laravel CORS: ^2.0
  - Fideloper Proxy: ^4.4

## Installation

1. Clone the repository.
2. Run `composer install` to install dependencies.
3. Copy `.env.example` to `.env` and configure your environment variables.
4. Generate an application key by running `php artisan key:generate`.
5. Set up your database configuration in the `.env` file.
6. Run database migrations with `php artisan migrate`.
7. (Optional) Seed your database with sample data using `php artisan db:seed`.

## Usage

- Start your development server by running `php artisan serve`.
- Access the application in your web browser at `http://localhost:8000`.

## Contributing

Contributions are welcome! Please open an issue to discuss proposed changes or submit a pull request directly.

## License

This project is open-source and available under the [MIT License](LICENSE).

# TC09 Logistics Management System

TC09 is a logistics management system built using Laravel. It includes modules to manage actors, products, trucks, deliveries, orders, routes, and other transaction center (TC) orders.

## Features

- **Actors Management**: Create, view, edit, and delete actors with roles such as TC, DC, CT, and SP.
- **Products Management**: Manage products, including SKU and product names.
- **Trucks Management**: Handle truck details, such as license plate, dimensions, status, and capacity.
- **Deliveries Management**: Track delivery details, fees, and statuses.
- **Orders Management**: Manage customer orders and their statuses.
- **Routes Management**: Track delivery routes and estimated time of arrival (ETA).
- **Other TC Orders**: Manage inter-TC orders, including bidding and order statuses.

## Prerequisites

Ensure you have the following installed on your system:

- [PHP 8.2+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) or compatible database
- [Node.js](https://nodejs.org/) (optional for frontend asset compilation)
- Laravel 11.x

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository**:
   ```bash
   git clone <repository-url>
   cd tc09
   ```

2. **Install dependencies**:
   ```bash
   composer install
   ```

3. **Copy `.env.example` to `.env`**:
   ```bash
   cp .env.example .env
   ```

4. **Configure environment variables** in `.env`:
   Update the database settings:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tc09_db
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

5. **Generate the application key**:
   ```bash
   php artisan key:generate
   ```

6. **Run migrations**:
   ```bash
   php artisan migrate
   ```

7. **Seed the database (optional)**:
   ```bash
   php artisan db:seed
   ```

8. **Run the development server**:
   ```bash
   php artisan serve
   ```

   Access the application at [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Usage

### **Modules**
- **Actors**: Manage all actor roles.
- **Products**: Add or update products.
- **Trucks**: Track truck status and details.
- **Deliveries**: View and manage delivery operations.
- **Orders**: Manage customer orders and statuses.
- **Routes**: Monitor and update route information.
- **Other TC Orders**: Handle inter-TC order bidding and statuses.

### **Icons**
All buttons are enhanced with Font Awesome icons:
- **Add**: `fa-plus`
- **Edit**: `fa-edit`
- **View**: `fa-eye`
- **Delete**: `fa-trash`
- **Save/Update**: `fa-save`
- **Back**: `fa-arrow-left`

## Folder Structure

- **`app/Models`**: Models for the database tables, including `Actor`, `Delivery`, `Order`, etc.
- **`resources/views`**: Blade templates for UI, divided by module.
- **`routes/web.php`**: Routes for the application.
- **`public/css/styles.css`**: Custom CSS for layout styling.

## Customization

- To adjust styling, modify the `public/css/styles.css` file.
- To update navigation menus, edit `resources/views/layouts/app.blade.php`.

## Troubleshooting

- **Issue:** `Column not found: 1054 Unknown column 'updated_at'`
  - **Fix:** Disable timestamps in the model using `public $timestamps = false;` or add `created_at` and `updated_at` columns to your migrations.
  
- **Issue:** `Missing required parameter for route`
  - **Fix:** Ensure primary keys (`actor_id`, `delivery_id`, etc.) are passed correctly in the routes and views.

## License

This project is open-source and free to use under the [MIT License](LICENSE).

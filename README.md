
## NIC Dashboard

A Dashboard web application for NIC that includes custom authentication, a user-friendly dashboard, Excel file upload functionality, database integration, and display of Excel Data in the dashboard. 


### Key Features

- Clean UI
- Excel Upload
- Excel Data Display


### Tech Stack

**Frontend:** Blade, HTML, CSS, Vanilla JS, Bootstrap
**Backend:** Laravel 10 
**Database:** PostgreSQL


### Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP >= 8.0
- Composer 
- PostgreSQL >= 10

### Run Locally

Clone the project

```bash
  git clone https://github.com/0xArcheon/nic-dashboard
```

Go to the project directory

```bash
  cd nic-dashboard
```

Install dependencies

```bash
 composer install
```



### Environment Variables

To run this project, you will need to add the following environment variables to your .env file

```bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE= database_name
DB_USERNAME=database_user
DB_PASSWORD=database_password
```

### Generate Application Key

```bash
php artisan key:generate
```

### Run Migration

```bash
php artisan migrate 
```

### Start the development server

```bash
php artisan serve
```
The application will be now be available at http://localhost:8000 by default, unless changed in the env file. Please proceed by registering a new user and then logging into the system.





## Authors

- Amlan Jyoti Saikia [@0xArcheon](https://github.com/0xArcheon)


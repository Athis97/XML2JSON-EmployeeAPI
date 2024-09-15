
# CodeIgniter 4 Application for Employee Management & XML Data Handling

## Overview
This is a simple CodeIgniter 4 application that provides the following functionalities:

- **Employee Registration** with token generation and storage.
- **Token-based Authentication API** to fetch employee data.
- **XML File Upload and Parsing**:
  - Converts XML data into JSON format.
  - Stores the JSON data in the database.
  - Displays the stored JSON data.

## Features

### Employee Registration:
- User registration with form validation (client & server-side).
- Each registered employee is assigned a unique token.

### Token-based API:
- API to fetch employee data by employee ID and token.

### XML Handling:
- Upload an XML file, parse it, convert to JSON, and store it in the database.
- View the stored XML data in JSON format.

## Prerequisites
- PHP >= 7.4
- Composer
- CodeIgniter 4.x
- MySQL or SQLite for database

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/Athis97/XML2JSON-EmployeeAPI.git
    cd XML2JSON-EmployeeAPI
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Copy the `.env.example` to `.env`:

    ```bash
    cp env.example .env
    ```

4. Update your `.env` file with the database credentials:

    ```env
    database.default.hostname = localhost
    database.default.database = your_database_name
    database.default.username = your_db_username
    database.default.password = your_db_password
    database.default.DBDriver = MySQL
    ```

5. Migrate the database to create the required tables:

    ```bash
    php spark migrate
    ```

6. Start the development server:

    ```bash
    php spark serve
    ```

   The application should now be running at [http://localhost:8080](http://localhost:8080).

## Folder Structure

### Controllers:
- `EmployeeController.php`: Handles employee registration and form submission.
- `VehAvailController.php`: Manages XML data upload, conversion, and storage.
- `ApiController.php`: Provides the token-based employee data retrieval API.

### Models:
- `Employee.php`: Defines the employee model.
- `VehAvail.php`: Defines the XML data model.

### Views:
- `employee_register.php`: Registration form.
- `employee_success.php`: Success message after employee registration.
- `upload_xml.php`: XML upload form.
- `veh_avail_view.php`: Displays stored JSON data.

## Routes

```php
$routes->get('/', 'Home::index');
$routes->get('employee/register', 'EmployeeController::register');
$routes->post('employee/save', 'EmployeeController::save');
$routes->get('employee/success', 'EmployeeController::success');
$routes->get('veh-avail/show', 'VehAvailController::showData');
$routes->get('veh-avail/upload', 'VehAvailController::uploadXmlForm');
$routes->post('veh-avail/import', 'VehAvailController::importXml');

// API routes
$routes->get('api/employee', 'ApiController::getEmployee');
```

## API Documentation

### Get Employee Data:
- **URL**: `GET /api/employee`
- **Parameters**:
  - `token` (required): The employeeâ€™s unique token.
  - `id` (required): Employee ID.
- **Response**: JSON containing employee data or error message.

#### Example API Request

```http
GET /api/employee?token=abc123&id=1
Content-Type: application/json
```

#### Response:

```json
{
    "id": 1,
    "name": "John Doe",
    "email": "johndoe@example.com",
    "token": "abc123"
}
```

## XML Upload Example

To upload XML and convert it to JSON:

1. Go to [http://localhost:8080/veh-avail/upload](http://localhost:8080/veh-avail/upload).
2. Select the XML file and click upload.
3. Data will be saved in JSON format and can be viewed at [http://localhost:8080/veh-avail/show](http://localhost:8080/veh-avail/show).

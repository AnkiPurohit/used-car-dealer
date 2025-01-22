# Used Car Dealer Project

## About the Project
This is a simple Laravel application for a used car dealership. The project displays a list of car manufacturers and their available cars, allows users to view manufacturer details, and provides a search functionality for cars based on various criteria (e.g., manufacturer, model, color, year).

---

## Setup Instructions
Follow the steps below to set up the project on your local environment:

### Prerequisites
- PHP 8.0 or higher
- Composer
- MySQL 

---

### Steps to Set Up the Project

**Clone the Repository**
```
git clone <repository-url>
cd used-car-dealer
```
**Install Dependencies**
```
composer install
```
**Set Up Environment Variables**
```
cp .env.example .env
```
**Update the .env file with your database credentials**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=used_car_dealer
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password
```
**Generate the Application Key**
```
php artisan key:generate
```
**Run Migration**
```
php artisan migrate
```
**Seed the Database**
```
php artisan db:seed
```

## Assumptions
### Data Import
The provided Excel files containing manufacturers and cars data were converted into CSV format.
Data was imported into the database using the fgetcsv function in Laravel seeders.
This approach assumes that the requirement was only to populate the database, not to implement a full import functionality.
### Best Practices
PHP and Laravel best practices were followed throughout the development process.
The code is modular and uses query scopes and relationships to maintain separation of concerns.
### Unit Testing
Although unit tests are not included in this version, they can be added to improve scalability and ensure code quality.

## Features
* Display a list of manufacturers along with the number of cars in stock.
* View details of a specific manufacturer, including a table of cars in stock.
* Search for cars based on manufacturer, model, year, or color.

## Running the Application
Start the Development Server
```
php artisan serve
```

## Open the Application in Your Browser by entering below url
[http://127.0.0.1:8000](http://127.0.0.1:8000)

## Future Enhancements
* Add unit tests to ensure the robustness of the application.
* Implement full import functionality for CSV or Excel files if require.
* Add pagination to the search results for better performance with large datasets.
* Improve UI/UX using a frontend framework like Vue.js or React.

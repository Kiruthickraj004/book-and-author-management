🚀 Setup Instructions

Follow these steps to run the project locally:

git clone <your-git-repo-url>
cd project-folder
composer install
cp .env.example .env
php artisan key:generate


Update .env with your database details:

DB_DATABASE=your_db
DB_USERNAME=root
DB_PASSWORD=


Run migrations:

php artisan migrate


Start the server:

php artisan serve


Server will run at:

http://127.0.0.1:8000

🔌 API Endpoints
Authors
Method	Endpoint
GET	/api/authors
POST	/api/authors
GET	/api/authors/{id}
PUT	/api/authors/{id}
DELETE	/api/authors/{id}

Books
Method	Endpoint
GET	/api/books
POST	/api/books
GET	/api/books/{id}
PUT	/api/books/{id}
DELETE	/api/books/{id}
🧪 API Testing

You can test all endpoints using Postman or any API testing tool.

All requests must include:

Accept: application/json
Content-Type: application/json

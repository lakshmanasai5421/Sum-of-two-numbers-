# Sum-of-two-numbers

HTMX-PHP-Python-json API for Adding Two Numbers This project is a simple API that allows users to input two numbers in an HTML form, send the data to a PHP backend, and execute a Python script to compute the sum. The result is dynamically displayed using HTMX, eliminating the need for page reloads.

🚀 Features

🖥️ Frontend: HTML, CSS, HTMX (for dynamic updates).

🛠️ Backend: PHP,json (handles requests and executes Python script).

🐍 Computation: Python (performs the sum operation).

⚡ Fast & Lightweight: Uses simple PHP-Python integration.

🔄 Dynamic Updates: HTMX updates the result without refreshing the page.

📌 How It Works

User enters two numbers in an HTML form.

HTMX sends a POST request to add.php (PHP backend).

PHP validates the input and executes sum.py (Python script).

Python calculates the sum and returns the result.

PHP sends the result back to the frontend.

HTMX dynamically updates the result without a full page reload.

📂 Project Structure

/project-folder

│── index.html # Frontend UI (HTMX-powered form)

│── add.php # PHP backend (handles requests and runs Python script)

│── sum.py # Python script (computes sum of two numbers)

│── style.css # Styling (optional)

For runing the server use this --> C:\xampp\php\php -S localhost:8000
For runing the python server use this --->python sum.py
For runing the server in browser use this --> http://localhost:8000/index.html

# Sum-of-two-numbers
Sum of Two Numbers
A simple web application that calculates the sum of two numbers. The project uses:

Frontend: HTML with HTMX for dynamic interactions.
Backend: PHP and Python for processing requests.
Communication: Uses cURL to send requests and returns the result as a JSON response.
How It Works
1. The user enters two numbers in the input fields.
2. Clicking the "Calculate Sum" button sends a request using HTMX.
3. The backend (PHP or Python) processes the request, calculates the sum, and returns a JSON response.
4. The result is displayed dynamically without a full page reload.sult back to the frontend.

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


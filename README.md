# mgtcurd
First task by MGT 
1. Overview
CRUD (Create, Read, Update, Delete) operations are the fundamental functions required for managing data in any application. In this document, we will explore how to implement CRUD operations in PHP using MariaDB as the database. PHP is a server-side scripting language, and MariaDB is a popular open-source relational database management system.

This document will cover the structure of classes, interfaces, attributes, and database design, along with step-by-step execution of CRUD operations. Finally, we will discuss potential improvements.

 2. Structure of files, functionality, Attributes, and Database

1. db.php (Database Connection File)
Function: Establishes a connection to the MariaDB database.
•	This file is included in all other PHP files to provide a database connection.
•	Uses MySQLi to connect PHP to MariaDB.
•	 new mysqli($host, $user, $pass, $dbname); → Connects to MariaDB.
•	If connection fails, die() prints an error message.

2. index.php (Read Data & Display Users)
Function: Fetches and displays data from the database in an HTML table.
Key Functionalities:
•	Connects to the database.
•	Uses SQL SELECT query to fetch all records.
•	Displays user details in an HTML table.
•	Provides Edit and Delete buttons.
•	SELECT * FROM users; → Fetches all records.
•	PHP while loop (while ($row = $result->fetch_assoc())) → Loops through records and prints them in an HTML table.
•	 edit.php & delete.php links → Send the user ID via URL for editing/deleting.
3. create.php (Insert Data)
Function: Handles user input and inserts data into the database.
Key Functionalities:
•	Shows an HTML form for user input.
•	Uses POST method to submit data.
•	Saves data to the database via SQL INSERT query.
•	if (isset($_POST["submit"])) → Checks if form is submitted.
•	SQL INSERT INTO users (name, email) VALUES ('$name', '$email') → Inserts user data.
•	Redirects to index.php after successful insertion.

4. edit.php (Update Data)
Function: Fetches user details, displays them in a form, and updates the database.
Key Functionalities:
•	Gets user ID from URL ($_GET["id"]).
•	Uses SQL SELECT query to fetch existing user data.
•	Displays an HTML form with existing values.
•	Updates database when the form is submitted.
•	Retrieves the user's current data (SELECT * FROM users WHERE id=$id).
•	 Prefills form fields with existing data.
•	 Updates user details (UPDATE users SET name='$name', email='$email' WHERE id=$id) when submitted.
5. delete.php (Delete Data)
Function: Deletes a user record from the database.
Key Functionalities:
•	Gets ID from URL ($_GET["id"]).
•	Runs an SQL DELETE query.
•	Redirects to index.php
•	 Retrieves user ID from URL.
•	Executes DELETE FROM users WHERE id=$id to remove the user.
•	 Redirects back to index.php after deletion.
 5. Conclusion
CRUD operations are essential for any application that interacts with a database. By following the steps outlined in this document, you can implement CRUD operations in PHP using MariaDB. This approach provides a solid foundation for building more complex applications.

6. Improvement
Input Validation: Add validation to ensure data integrity and security.
Prepared Statements: Use prepared statements to prevent SQL injection.
Error Handling: Implement robust error handling for database operations.
Object-Relational Mapping (ORM): Consider using an ORM like Eloquent for more complex applications.
API Integration : Expose CRUD operations via a REST API for use in front-end applications.

This document provides a comprehensive guide to implementing CRUD operations in PHP using MariaDB. You can expand upon this foundation to build more advanced features and applications.

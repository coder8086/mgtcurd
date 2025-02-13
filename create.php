<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
/* General Page Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    text-align: center;
    padding: 20px;
}

/* Form Container */
.form-container {
    background: #fff;
    width: 350px;
    padding: 20px;
    margin: 50px auto;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Form Fields */
form {
    display: flex;
    flex-direction: column;
}

label {
    font-weight: bold;
    margin: 10px 0 5px;
}

input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    width: 100%;
}

/* Submit Button */
button {
    background: #007bff;
    color: #fff;
    padding: 10px;
    margin-top: 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: 0.3s;
}

button:hover {
    background: #0056b3;
}

</style>
  </head>
  <body>
<?php
include "db.php";

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<div class="form-container">
<form action="create.php" method="POST">
	
    <input type="text" name="name" placeholder="Enter Name" required>
	
	
    <input type="email" name="email" placeholder="Enter Email" required>

	
    <button type="submit" name="submit" class="btn btn-primary mb-2">Add User</button>

</form>

</div>

<a href="index.php">View Users</a>

 </body>
</html>

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

$id = $_GET["id"];
$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST["update"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
<div class="form-container">
<form action="" method="POST">
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
    <button type="submit" name="update">Update</button>
</form>
</div>

<a href="index.php">Back</a>
</body>
</html>

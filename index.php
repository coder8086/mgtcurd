<!DOCTYPE html>
<html>
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="style.css">
</head>
<body>



<?php
include "db.php";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<div id="MyTitle">
<h2>
Email directry
</h3>
</div>

<div id="main_container">



<a class="button add" href="create.php">Add User</a>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td>
            <a class="button edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
            <a class="button del" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>


</div>

</body>
</html>

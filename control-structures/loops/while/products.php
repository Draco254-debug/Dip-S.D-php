<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
    <style>
        table{
            width: 100%;
        }
        tr, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div>
        <button>New Product</button>
    </div>
</body>
</html>
<?php

$database_connection = mysqli_connect('localhost', 'root', '', 'testing app');

// echo "<pre>";
// print_r($database_connection);
// echo "<pre>";

if ($database_connection->connect_error) {
    echo $database_connection->connect_error;
}

$sql = "SELECT * FROM products";

$result = $database_connection->query($sql);

echo "<pre>";
// print_r($result);
// var_dump($result);
echo "<pre>";


echo "<table> 
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th colspan=2>Action</th>
    </tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>$" . $row['price'] . "</td>
            <td>" . $row['description'] . "</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>";
}
echo "</table>";
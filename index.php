<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">

<div class="container">
    <h2 class="mb-3">Users List</h2>

    <a href="add.php" class="btn btn-primary mb-3">Add New Item</a>

    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>1</td>
            <td>Mohamed Ali</td>
            <td>mohamed@example.com</td>
            <td>
                <a href="edit.php" class="btn btn-warning btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>Ahmed Salah</td>
            <td>ahmed@example.com</td>
            <td>
                <a href="edit.php" class="btn btn-warning btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>

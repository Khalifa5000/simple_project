<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item - Static</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

<div class="container">
    <h2 class="mb-3">Add New User</h2>

    <form action="UserController.php" method="post" class="card p-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control mb-3">

        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control mb-3">

        <button class="btn btn-success mb-3" type="submit">Add</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</div>

</body>
</html>

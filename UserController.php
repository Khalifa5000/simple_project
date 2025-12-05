<?php

 

    $name = $_POST['name']??'';
    $email = $_POST['email']??'';

    var_dump($_POST);

    echo "<br>" . "Received Name: $name" . "<br>" . " Email: $email";



    if ($name && $email) {
        include 'connect.php';

        $stmt = $pdo->prepare('INSERT INTO users (Name, E_mail) VALUES (?, ?)');
        $stmt->execute([$name, $email]);

        echo "<br>" . "New user added successfully.";
    } else {
        echo "Name and Email are required.";
    }

?>
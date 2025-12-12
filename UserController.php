<?php

    include 'connect.php';

    $name = $_POST['name']??'';
    $email = $_POST['email']??'';

    var_dump($_POST);

    echo "<br>" . "Received Name: $name" . "<br>" . " Email: $email";


    $stmt = $pdo->prepare('SELECT * FROM users WHERE E_mail = ?');
    $stmt->execute([$email]);
 
    $count = $stmt->rowCount();

    echo $count;



    if ($name && $email) {
 

        $stmt = $pdo->prepare('INSERT INTO users (Name, E_mail) VALUES (?, ?)');
        $stmt->execute([$name, $email]);

        echo "<br>" . "New user added successfully.";
    } else {
        echo "<br>" . "Name and Email are required." . $e->getMessage();
    }

?>
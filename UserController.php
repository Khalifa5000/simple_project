<?php

    include 'connect.php';

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];

       try {
        $stmt = $pdo->prepare('DELETE FROM users WHERE ID = ?');
        $stmt->execute([$id]);

        header("Location: index.php");

        // echo "<br>" . "User with ID $id deleted successfully.";


    } catch (Exception $e) {
        echo "<br>" . "Error deleting user: " . $e->getMessage();
    }
        exit;
    }


    $name = $_POST['name']??'';
    $email = $_POST['email']??'';

    var_dump($_POST);

    echo "<br>" . "Received Name: $name" . "<br>" . " Email: $email";


    $stmt = $pdo->prepare('SELECT * FROM users WHERE E_mail = ?');
    $stmt->execute([$email]);
 
    $count = $stmt->rowCount();

  if ($count > 0) {
        echo "<br>" . "A user with this email already exists.";
        exit;
    }   


    if ($name && $email) {
 
         try {
        $stmt = $pdo->prepare('INSERT INTO users (Name, E_mail) VALUES (?, ?)');
        $stmt->execute([$name, $email]);

        echo "<br>" . "New user added successfully.";
        header("Location: index.php");
    } catch (Exception $e) {
        echo "<br>" . "Error adding user: " . $e->getMessage();
    }
}

?>
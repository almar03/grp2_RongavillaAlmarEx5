<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $gender = htmlspecialchars($_POST['gender']);

    

    
    echo "Username: $username, Email: $email, Gender: $gender";
} else {
    echo "Invalid request method.";
}
?>

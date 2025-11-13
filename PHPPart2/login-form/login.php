<?php

// Process only if it's POST - Ofc, because POST is safer for password transmissions
if($_SERVER['REQUEST_METHOD'] == "POST") {

    // Check if the form contains the necessary values
    if(isset($_POST['username']) && isset($_POST['password'])) {
        // Echo them out just to test
        // echo $_POST['username'] . ' ' . $_POST['password'];

        // Let's Login the User
        // Assume the username and password is in Database
        $username = "mberrios";
        $password = "helloThereWakeUpAbhik!";

        // Match the username and password
        if($username === $_POST['username'] && $password === $_POST['password']) {
            session_start();

            // Once logged in and session startedd, redirect back to index.php
            $_SESSION['cookie'] = [
                'username' => $_POST['username']
            ];

            // redirect back to index.php - tells the server to make an http request
            // to index.php
            header("Location: index.php");
        } else {
            echo "Sorry bad username and password";
            echo '<a href="index.php">Try Again</a>';
        }
    } else {
        echo "Unauthorized Access - Get out of here.";
    }
} else {
    echo "Nope. You are not allowed via GET";
}
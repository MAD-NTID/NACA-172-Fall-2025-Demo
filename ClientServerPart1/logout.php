<?php

session_start();

$message = "Successfully logged out";

if(isset($_SESSION['user']))
    $message .= " {$_SESSION['user']['username']}!";

session_unset();

exit(json_encode([
    'message' => $message,
    'user' => null
]));
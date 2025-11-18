<?php
session_start();

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$make = trim($_POST['make']);
$model = trim($_POST['model']);
$year = trim($_POST['year']);
$submodel = trim($_POST['submodel']);
$message = trim($_POST['message']);

$errors = [];

if (empty($name))
    $errors[] = "Name is required.";
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    $errors[] = "Invalid email format.";
if (empty($make))
    $errors[] = "Car make is required.";
if (empty($model))
    $errors[] = "Car model is required.";
if (empty($year))
    $errors[] = "Car year is required.";
if (empty($message))
    $errors[] = "Message cannot be empty.";

if ($errors) {
    $_SESSION['errors'] = $errors;
    header("Location: index.php");
    exit;
}

$_SESSION['success'] = "Form validated successfully!";
header("Location: api.php?action=sendEmail");
exit;

<?php
session_start();

$action = $_GET['action'] ?? '';

if ($action === 'validate') {
    include 'validate-form.php';
} elseif ($action === 'sendEmail') {
    include 'send-email.php';
} else {
    $_SESSION['errors'] = ["Invalid action."];
    header("Location: index.php");
    exit;
}

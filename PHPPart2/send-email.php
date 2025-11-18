<?php
session_start();

// Simulated email send
$sent = true; // pretend mail() worked

if ($sent) {
    $_SESSION['success'] = "Thank you! Your message has been sent (simulation).";
} else {
    $_SESSION['errors'] = ["Failed to send email. Try again later."];
}

header("Location: index.php");
exit;

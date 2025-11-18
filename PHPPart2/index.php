<?php
session_start();
$success = $_SESSION['success'] ?? '';
$errors = $_SESSION['errors'] ?? [];
session_unset();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Me</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h2>Contact Me</h2>

    <?php if ($success): ?>
        <p class="success"><?= htmlspecialchars($success) ?></p>
    <?php endif; ?>

    <?php if ($errors): ?>
        <div class="error">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="api.php?action=validate" method="POST">
        <label for="name">Full Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email Address:</label>
        <input type="email" name="email" id="email" required>

        <label for="make">Car Make:</label>
        <input type="text" name="make" id="make" required>

        <label for="model">Car Model:</label>
        <input type="text" name="model" id="model" required>

        <label for="year">Car Year:</label>
        <input type="number" name="year" id="year" required>

        <label for="submodel">Car Submodel (optional):</label>
        <input type="text" name="submodel" id="submodel">

        <label for="message">Description:</label>
        <textarea name="message" id="message" required></textarea>

        <button type="submit">Send</button>
    </form>

</body>

</html>
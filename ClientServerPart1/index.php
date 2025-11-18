<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <?php
        session_start(); ?>

    <div id="loginStatus" class="hidden">
        <h1>User is Logged In</h1>

        <button type="button" id="logoutButton">
            Logout
        </button>
    </div>

    <form action="#" method="POST" id="myForm">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <script src="login.js"></script>
</body>
</html>
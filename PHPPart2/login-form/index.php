<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <?php
    session_start();

    // Check whether the user is logged in or not
    if(isset($_SESSION['cookie'])) {
        echo "<h1>User is logged in</h1>";

        echo '<form action="logout.php" method="POST">
                <button type="submit">Logout</button>
              </form>';
    }
    ?>

    <?php
    if(isset($_GET['loggedout']) && $_GET['loggedout'] == true) {
        echo "<h1>You are logged out!";
    }
    ?>

    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" autofocus>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">

        <button type="submit">Login</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
<?php
    // Assume Tony is logged in
    $user = "";

    session_start();

    if(isset($_GET['login']))
    {
        $_SESSION['user'] = 'Tony';
        $user = $_SESSION['user'];
    } else if (isset($_GET['logout'])) {
        session_unset();
        $user = '';
    } else {
        $user = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrated HTML/PHP</title>
</head>
<body>
    <header>

    </header>

    <nav>

    </nav>

    <main>
        <!-- What if the user is not logged in? -->
        <?php if($user == "" || $user == null): ?>
            <h1>Welcome! Go ahead and log in</h1>
            
            <form action="index.php" method="get">
                <input type="hidden" name="login" value="true">
                <button type="submit">Login</button>
            </form>
        <?php else: ?>
            <!-- Assume that a user is logged in and saved in $user -->
            <h1>Welcome <?php echo $user; ?>!</h1>
            
            <form action="index.php?logout">
                <input type="hidden" name="logout" value="true">
                <button type="submit">Logout</button>
            </form>
        <?php endif; ?>
    </main>

    <footer>
        &copy; 2020 - <?php echo getdate()['year']; ?>
    </footer>
</body>
</html>
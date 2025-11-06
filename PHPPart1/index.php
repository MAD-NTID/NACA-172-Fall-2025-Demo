<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Demo</title>
</head>
<body>
    <h1>
        <!-- You can manually insert in the URI
         localhost/index.php?some_variable=hello+world
         to make this world
        -->
        <?php echo $_GET['some_variable']; ?>
    </h1>

    <h1>
        <!-- we can't add this variable to the URI
         must use a form
        -->
        <?php echo $_POST['another_variable']; ?>

        <form action="index.php" method="post">
            <input type="hidden" 
                name="another_variable" value="Hey there!">
        
            <button type="submit">
                Submit
            </button>
        </form>
    </h1>
</body>
</html>
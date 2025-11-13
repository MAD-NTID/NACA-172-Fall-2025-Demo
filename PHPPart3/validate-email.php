<form action="validate-email.php">
    <input type="email" name="email" id="email" autofocus>
    <textarea name="comment" id="comment"></textarea>
    <button type="submit">Submit</button>
</form>

<?php

echo "Before Trim: " . $_GET['email'];
echo "<br/>";

$email = trim($_GET['email']);

echo "After Trim: " . $email;
echo "<br/>";

echo "Before HTMLSpecialChars: " . $_GET['comment'];
echo "<br/>";

$comment = htmlspecialchars($_GET['comment']);

echo "After HTMLSpecialChars: " . $comment;
echo "<br/>";

// sanitize the email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

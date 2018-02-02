<?php
    session_start(); //DONT FORGET
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 
    'Guest';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
    print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Sessions - Page 3</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?></h1>
</body>
</html>
<?php
 session_start();

 include("connection.php");
 include("functions.php");

 $user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Welcome to my practice page</h1>
    <br>
        Hello, How may I help you <?php echo $user_data['user_name']; ?>
</body>
</html>
<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // Something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
    

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            // Save to database
            $user_id = random_num(10);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
            
            mysqli_query($con, $query);

            header("Location: login.php");  
            die;
        }else{
            echo "Please enter some valid information!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <style type=text/css>
            #text{
                height: 25px;
                border-radius: 5px;
                padding: 4px;
                border: solid thin #aaa;
                width: 100%;
            }
            
            #button{
                padding: 10px;
                width: 100px;
                color: white;
                background-color: lightblue;
                border: none;
            }
            #box{
                background-color: grey;
                margin: auto;
                width: 300px;
                padding: 20px;
            }
            input{
                display:block;
                margin-bottom: 15px;
            }
    </style>

    <div id="box">
        <form method="post"> 
            <div style="font-size: 20px; color: white; margin: 10px">Signup</div>
            <input id="text" type="text" name="user_name">
            <input id="text" type="password" name="password">

            <input id="button" type="submit" value="Signup">
            <a href="login.php">Click to Login</a>
        </form>
    </div>
</body>
</html>

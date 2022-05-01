<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'login_final');
$username = $_SESSION['username'];
$result=mysqli_fetch_assoc(mysqli_query($con,"SELECT * from login_data where uname = '$username'")) ;   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login Yourself</title>
</head>

<body>

    <div class="login-box">
        <h1>Account Information</h1>
            <div class="user-box">
                <?php
                echo "
                <span>Username :</span> <span id='details'>".$result['name']."</span>
                <br>
                <br>
                <span>Mail ID : </span><span id='details'>".$result['email']."</span>
                <br>
                <br>
                <span>Contact Number :</span> <span id='details'>".$result['mono']."</span>"
                ;
                ?>
                
            </div>
    </div>
</body>

</html>
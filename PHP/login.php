<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'login_final');
    
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username=$_POST['uname'];
    $pswd=$_POST['pswd'];
    $sql="SELECT * FROM `login_data` WHERE `uname` LIKE '$username' AND `pswd` LIKE '$pswd'";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    echo $num;
    if($num==1)
    {
        session_start();
        $success="Login Successfull";
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        echo($success);
        header('location: index.php');
    }
    else
    {
        echo "In the else section";
        echo "<script>alert('Invalid Credentials or you do not have any account')</script>";
    }
}
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
        <h1>Login</h1>
        <form method="POST">
            <div class="user-box">
                <input type="text" name="uname" required="" id="uname">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="pswd" required="" id="pswd">
                <label>Password</label>
            </div>
            <span>Don't Have An Account ? <a href="register.php" id="reglink">Click Here</a></span>
            <button id="submit" type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
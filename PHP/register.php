<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'login_final');

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['name'];
    $username=$_POST['uname'];
    $email=$_POST['email'];
    $mono=$_POST['mono'];
    $pswd=$_POST['pswd'];
    // $rpswd=$_POST['rpswd'];
    $exists=false;
    $sql="INSERT INTO `login_data` (`uname`,`name`,`email`,`mono`, `pswd`) VALUES ('$username', '$name','$email', '$mono','$pswd');";
    $res=mysqli_query($con,$sql);
    $confirm="SELECT * from `login_data` where `uname` like '$username'";
    $result=mysqli_query($con,$confirm);
    $num=mysqli_num_rows($result);
    if($num==1 && $res)
    {
        session_start();
        $success="Login Successfull";
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        echo($success);
        header('location: index.php');
    }
    else{
        echo "<script>alert('This username has been already taken enter another one')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Create New Account</title>
</head>

<body>

    <div class="login-box">
        <h1>Sign Up</h1>
        <form method="POST" onsubmit="return validate()" name="regform">
            <div class="user-box">
                <input type="text" name="name" required="" id="text">
                <label>Name</label>
            </div>
            <div class="user-box">
                <input type="text" name="uname" required="" id="uname">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" required="" id="email">
                <label>Email ID</label>
            </div>
            <div class="user-box">
                <input type="tel" name="mono" required="" id="mono">
                <label>Mobile No</label>
            </div>
            <div class="user-box">
                <input type="password" name="pswd" id='pswd' required="">
                <label>Password</label>
            </div>
            <div class="user-box">  
                <input type="text" name="rpswd" id="rpswd" required="">
                <label>Confirm Password</label>
            </div>
            <span>Alrady Have An Account ? <a href="login.php" id="reglink">Click Here</a></span>
            <button id="submit" type="submit">Submit</button>
        </form>
    </div>
    <script>
        let uname=document.getElementById('uname');
        let email=document.getElementById('email');
        let mono = document.getElementById('mono');
        function validate()
        {
            let reguname=/^[a-z]{1-8}/;
            let regemail=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2-4}$/;
            let regmono=/^\d{10}/;

            if(reguname.test(uname) && regemail.eval(email) && regmono.eval(mono))
                return true;
            else{
                alert("An expression is invalid..!\n Please check out the info again");
                return false;
            }
        }
    </script>
</body>

</html>
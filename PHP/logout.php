<?php
session_start();
echo "We are in the logout page";
if(isset($_SESSION['loggedin']))
{
    echo "Session is set";
    session_destroy();
    unset($_SESSION['loggedin']);
}
header('location: index.php');
?>
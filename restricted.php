<?php
session_start();
if($_SESSION['auth'] == true) 
{
    $log = $_SESSION['login'];
    $output ="
    <html>
    <head>
    <title>User</title>
    </head>
    <body>
    <h1> Hello, $log! We are glad to see you here! </h1>
    
    ";
    $output.="</body></html>";
    echo $output;
    
}
else
{  
    $output ="
    <html>
    <head>
    <title>User</title>
    </head>
    <body>
    <h1> Invalid login or password.  </h1>
    <h3> Try again!  </h3>
    <h2> <a href='login.php'> Sign In</a> </h2>
    ";
    $output.="</body></html>"; 
    echo $output;
}
echo '<body align = "center" style="background-color:#FAE787;padding:30px;">'; 
?>
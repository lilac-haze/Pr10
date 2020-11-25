<?php
session_start();
echo 'hello';

$_SESSION['login'] = $_POST['login'];
$user_name = "admin";
$user_pass = "1111";
$_SESSION['auth']  = false;


    if($_POST['login'] == $user_name && $_POST['password'] == $user_pass){
    
        $_SESSION['auth'] = true;
        echo 'asss';
        header('Location: restricted.php');
    
    }
    else {
        $_SESSION['message'] = 'Invalid login or password';
        header('Location: login.php');
    }

    require_once 'connection.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);
   
    $check_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "first_name" => $user['first_name'],
            "last_name" => $user['last_name'],
            "login" => $user['login'],
            "password" => $user['password'],
            "id_role" => $user['id_role']
        ];
        $_SESSION['auth'] = true;
        header('Location: restricted.php');

    } else {
        $_SESSION['message'] = 'Invalid login or password';
        header('Location: login.php');
    }

?>
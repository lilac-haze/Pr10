<?php

session_start();


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$login = $_POST['login'];
$password = $_POST['password'];

$check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");

$password = md5($password);

mysqli_query($connect, "INSERT INTO `users` (`id`, `first_name`, `last_name`, `password`, `login`, `id_role` ) VALUES (NULL, '$first_name','$last_name', '$password', '$login', '1')");

$_SESSION['message'] = 'Successfully!';
header('Location: login.php');

?>

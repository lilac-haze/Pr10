<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<link rel="stylesheet" href="assets/css/style.css">
    </head>
<body>
    <div class="container">
<form name="feedback" method="POST" action="signup.php" enctype="multipart/form-data">
<div class="input-field"><input placeholder="First name" id="first_name" type="text" name="first_name" ></div>
<div class="input-field"><input placeholder="Last name" id="last_name" type="text" name="last_name" ></div>
<div class="input-field"><input placeholder="Login" id="login" type="text" name="login" ></div>
<div class="input-field"><input placeholder="Password" id="password" type="text" name="password" ></div>
    <input  type="submit" class="btn" name="send" value="Send">
    <input  type="reset" class="btn" name="reset" value="Clear form">
    <p class="register">
        you already have account? - <a href="/Pr10/login.php">Log in</a> 
    </p>
</form>
    </div>

<?php
if (isset($_GET["submit"])) {

    header('Location: login.php');
exit;
}
?>
</body>
</html>

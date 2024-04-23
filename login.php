<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Зуев Р.В.</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="index">Вход</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                   <form class="flex_center" method="post" action="login.php">
                        <div> <input  type="text" name="login" placeholder="Login"></div>
                        <div> <input  type="password" name="password" placeholder="Password"></div>
                        <button type="submit" class="btn_reg btn__reg" name="submit">Войти</button>
                   </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php 

if (isset($_COOKIE['User'])) {
    header("Location: profile.php");
}

require_once('db.php');

$conn = mysqli_connect('db', 'root', 'kali', 'mysite');

if (isset($_POST['submit'])) {
    $username = $_POST['login'];
    $pass = $_POST['password'];
  
    if (!$username || !$pass) die ('Пожалуйста введите все значения!');


    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$pass'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        setcookie("User", $username, time()+7200);
        header('Location: profile.php');    
    }
    else {
        echo "неправельный логин или пароль";
    }
}
?>
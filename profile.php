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
        <div class="container nav_bar">
            <div class="row">
                <div class="col-3 nav_logo"></div>
                <div class="col-9 nav_text">Информация обо мне!</div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-8"></div>
                <div class="col-4"></div>
            </div>
            <div class="row">
                <div class="col-8"> <p class="text">Меня зовут Зуев Руслан, и я студент направления информационной безопасности.
                    Моё главное увлечение - изучение нового. Кроме того, я активно участвую в различных соревнованиях CTF.</p>
                </div>
                <div class="col-4">
                    <div class="row my_photo"></div>
                    <div class="row"><p class="title_photo">Зуев Р.В.</p></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 button_js">
                    <button id="myButton" class="btn_reg">Click me</button>
                    <p id="demo"></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="helo">
                        Привет, <?php echo $_COOKIE['User']; ?>
                    </h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form class="flex_center" method="POST" action="profile.php">
                            <input type="text" class="form_add" name="title" placeholder="Заголовок поста">
                            <textarea class="form_add" name="text" cols="60" rows="10" placeholder="Введите текст в данное поле..."></textarea>
                            <button type="submit" class="btn_reg" name="submit">Сохранить пост!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/button.js"></script>
    </body>
</html>

<?php

require_once('db.php');

$conn = mysqli_connect('127.0.0.1', 'root', 'kali', 'mysite');

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die("Заполните поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
    if(!mysqli_query($conn, $sql)) die("не удалось добавить пост");
}


?>
<!DOCTYPE html>
<html lang="en">
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
                <div class="col-12 ">
                    <h1 class="index">Необходимо авторизироваться</h1>
                <?php
                if (!isset($_COOKIE['Useer'])) {
                ?>
                    <div class="index"> <a  href="/registration.php">Зарегестрируйтесь</a> или <a href="/login.php">Войдите</a>!</div>
                <?php
                } 
                else {
                    
                }
                ?>
                </div>
            </div>
        </div>
    </body>
</html>
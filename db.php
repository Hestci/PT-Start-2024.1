<?php
$servername = "127.0.0.1";
$username = "root";
$password = "kali";
$dbName = "mysite";

$conn = new mysqli($servername, $username, $password);

if (!$conn) {
    die("Ошибка подключения" . mysqli_error($conn));
}

$sql = "CREATE DATABASE IF NOT EXIST $dbName";

if(!mysqli_query($conn, $sql)) {
    echo"Не удалось создать БД";
}

mysql_close($conn);

$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL
    )";

if(!mysqli_qyery($conn, $sql)) {
    echo "Не удалось создать таблицу Users";
  }
  mysql_close($conn);
?>
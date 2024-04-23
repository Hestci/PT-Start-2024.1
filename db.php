<?php
$servername = "db";
$username = "root";
$password = "kali";
$dbName = "mysite";

$conn = new mysqli($servername, $username, $password);

if (!$conn) {
    die("Ошибка подключения". mysqli_error($conn));
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbName";

if(!mysqli_query($conn, $sql)) {
    echo"Не удалось создать БД";
}

mysqli_close($conn);

$conn = new mysqli($servername, $username, $password, $dbName);

$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL)";

if(!mysqli_query($conn, $sql)) {
    echo "Не удалось создать таблицу Users";
  }

  $sql = "CREATE TABLE IF NOT EXISTS posts(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(20) NOT NULL,
    main_text VARCHAR(500) NOT NULL)";

if(!mysqli_query($conn, $sql)) {
    echo "Не удалось создать таблицу Posts";
  }
  mysqli_close($conn);
?>
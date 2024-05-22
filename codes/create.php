<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (name, mobile, email) VALUES ('javad', '09125874569', 'javad@gmail.com')";
    $conn->exec($sql);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
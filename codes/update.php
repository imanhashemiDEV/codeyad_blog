<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE users SET name='mohammad' WHERE id=2";
    $conn->exec($sql);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
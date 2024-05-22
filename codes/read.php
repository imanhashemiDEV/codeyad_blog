<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
     $options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION , PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ];
    $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password,$options);
    $sql = "SELECT * FROM users";
    $users =$conn->query($sql)->fetchAll();
    foreach ($users as $user) {
        echo $user->name;
        echo "<br>";
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}





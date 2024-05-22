<?php

//echo  "imo_developer";

$servername = "localhost";
$username = "root";
$password = "";

try {
    $options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION , PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ];
    $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password,$options);

    $stmt = $conn->prepare("INSERT INTO users (name, mobile, email) VALUES (:name, :mobile, :email)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':mobile', $mobile);
    $stmt->bindParam(':email', $email);

    // insert a row
    $name = "asghar";
    $mobile = "09112548796";
    $email = "asghar@gmail.com";
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO users (name, mobile, email) VALUES (?,?,?)");
    $name = "hassan";
    $mobile = "09112548795";
    $email = "hassan@gmail.com";
    $stmt->execute([$name,$mobile,$email]);

    echo "New record created successfully";

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}





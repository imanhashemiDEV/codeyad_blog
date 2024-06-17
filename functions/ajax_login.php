<?php

require_once "DB.php";
require_once "helpers.php";

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE email=?";
global $conn;
$stmt = $conn->prepare($sql);
$stmt->execute([$email]);
$user = $stmt->fetch();

if($user && password_verify($password, $user->password)){
    echo json_encode(['status'=>true, 'data'=>$user]);
}else{
    echo json_encode(['status'=>false, 'data'=>null]);
}
<?php
require_once "../../functions/users.php" ;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteUserById($id);
    header('location: index.php');
}
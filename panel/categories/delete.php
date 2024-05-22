<?php
require_once "../../functions/categories.php" ;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteCategoryById($id);
    header('location: index.php');
}
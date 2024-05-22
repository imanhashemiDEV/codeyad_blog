<?php

require_once "DB.php";
require_once "helpers.php";

function createCategory($title)
{
    $sql = "INSERT INTO categories SET title=?, created_at=now()";
     global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute([$title]);
}

function getCategoryById($id){
    $sql = "SELECT * FROM categories WHERE id=?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    return  $stmt->fetch();
}

function getAllCategories(){
    $sql = "SELECT * FROM categories";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return  $stmt->fetchAll();
}

function updateCategory($id,$title){

    $sql = "UPDATE categories SET title=?, updated_at=now() WHERE id=?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute([$title,$id]);
}


function deleteCategoryById($id){
    $sql = "DELETE FROM  categories WHERE id=?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
}






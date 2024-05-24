<?php

require_once "DB.php";
require_once "helpers.php";

function createArticle($title,$body,$user_id,$category_id,$status,$image)
{
    $new_image = uploadImage($image,'articles');
    $sql = "INSERT INTO articles SET title=?, body=?,user_id=? , category_id=?,status=?,image=?, created_at=now()";
     global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute([$title,$body,$user_id,$category_id,$status,$new_image]);
}

function getArticleById($id){
    $sql = "SELECT * FROM articles WHERE id=?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    return  $stmt->fetch();
}

function getAllArticles(){
    $sql = "SELECT * FROM articles";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return  $stmt->fetchAll();
}

function getLastArticles(){
    $sql = "SELECT * FROM articles ORDER BY created_at DESC LIMIT 4";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return  $stmt->fetchAll();
}

function updateArticle($id,$title,$body,$category_id,$status,$image){
    $article = getArticleById($id);
    if(isset($image) && !empty($image['name'])){
        $image= uploadImage($image,'articles');
    }else{
        $image= $article->image;
    }

    $sql = "UPDATE articles SET title=?,body=?,category_id=?,status=?,image=?, updated_at=now() WHERE id=?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute([$title,$body,$category_id,$status,$image,$id]);
}


function deleteArticleById($id){
    $sql = "DELETE FROM  articles WHERE id=?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
}

function status($status){
      $fa_status="";

      switch ($status){
          case "draft":
              $fa_status="پیشنویس";
              break;
          case "published":
              $fa_status="منتشر شده";
              break;
          case "archived":
              $fa_status="بایگانی";
              break;
      }

      return $fa_status;
}






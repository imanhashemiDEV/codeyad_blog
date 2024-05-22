<?php

const BASE_URL = "http://localhost/codeyad%20blog/";

function asset($file){
    return BASE_URL . $file;
}

function url($url){
    return BASE_URL . $url;
}

function uploadImage($image){
    move_uploaded_file($image['tmp_name'],__DIR__.'/../images/'.$image['name']);
   return $image['name'];
}
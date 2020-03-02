<?php
require_once "bootstrap.php";
if (!isset($_GET['id']) || empty($_GET['id'] )) {
    exit;
}
$post=$newPost->getPostId($_GET['id']);
if(!$post){
    header("Location: /");
    exit;
}
if(isset($_POST['btnPost'])){
    $_POST["id"]=$_GET["id"];
    $_POST["datePublication"]=date("Y-m-d");
    $id=$newPost->updatePost($_POST);
    header("Location: /");
    exit;
}
require_once "views/posts/updatePost.View.php";


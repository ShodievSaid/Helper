<?php

require_once "bootstrap.php";
if(!isset($_GET['id'])||empty($_GET['id']))
{
    exit;
}

$post=$newPost->getPostID($_GET['id']);

if(isset($_POST['btnPost']))
{
    $newPost->deletePost($_GET['id']);
    header("Location: /");
    exit;
}
//Изменение
require_once "views/posts/deletePost.view.php";//bpvty+btty

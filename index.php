<?php
require_once "bootstrap.php";

$posts=$newPost->getAllPosts();
require_once "views/posts/index.view.php";


require_once "PostData.php";
require_once "app/db/components/QueryHelper.php";
require_once "vendor/autoload.php";
require_once "app/db/posts/index.php";
$route = $_GET['route'];
switch ($route) {
    case '':
        require_once 'app/db/posts/index.php';
        break;
    case 'insertPost':
        require_once '/app/db/posts/insertPost.php';
        break;
    case 'deletePost':
        require_once '/app/db/posts/deletePost.php';
        break;
    case 'updatePost':
        require_once '/app/db/posts/updatePost.php';
        break;
}
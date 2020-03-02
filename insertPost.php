<?php
require_once "bootstrap.php";

if(isset($_POST['btnPost'])){
    $_POST["datePublication"]=date("Y-m-d");

    $fileName=$_FILES['photo']['name'];
    $fileTmpName=$_FILES['photo']['tmp_name'];
    $fileType = $_FILES['photo']['type'];
    $fileError = $_FILES['photo']['error'];
    $fileSize = $_FILES['photo']['size'];
    $fileExtension = strtolower(end(explode('.',$fileName)));
    $fileName=explode('.',$fileName)[0];

    $extensions=['jpg','jpeg','png'];
    if (in_array($fileExtension,$extensions)){
        if($fileSize<5000000){
            if($fileError=== 0){
                $_POST['photo']= implode('.',[$fileName,$fileExtension]);

            }
        }
    }
    else{
        $_POST['photo']="default.jpg";
    }
    $id=$newPost->insertPost($_POST);
    if($id!=null){
        $fileDestination="uploads/".$_POST['photo'];
        move_uploaded_file($fileTmpName,$fileDestination);
    }
    header("Location: /");
    exit;
}
require_once "views/posts/insertPost.view.php";
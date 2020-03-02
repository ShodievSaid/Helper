<?php
$title="Добавление поста";
require_once __DIR__."/../parts/header.php";
?>
<h2 class="offset-3">Пост...</h2>
<div class="card mt-3 col-8 offset-2">
    <img src="<?= $post->photo ? 'uploads/'.$post->photo: '' ?>"
    class="card-img-top img-big" alt="Фото" >
    <div class="card-body">
        <h5 class="card-title"><?= $post->title ?></h5>
        <p class="crd-text">
        <?= date_format(new DateTime($post->datePoblication),
            'd.m.Y')?></p>
        <a class="btn btn-outline-danger"
        href='../../daletePost.php?id=<?= $post->id; ?>'>
        Удалить</a>
        <a class="btn btn-outline-primary"
           href='../../updatePost.php?id=<?= $post->id; ?>'>
            Изменить</a>
        <a class="btn btn-outline-info"
           href='/index.php'>
            Назад</a>
    </div>
</div>
<?php require_once  __DIR__ . "/../parts/footer.php"?>
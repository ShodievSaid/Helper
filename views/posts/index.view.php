<?php
$title = "Главная страница";
require_once __DIR__ . "/../parts/header.php";
?>
<h2>Посты</h2>

    <a class="col-m-3 btn btn-success mt-3 mb-3"
       href="../../insertPost.php">
        Добавить новую запись
    </a>

<div class="row">
    <?php
    $i = 1;
    foreach ($posts as $post): ?>
    <div class="card mt-3 p-2 col-md-4 col-sm-6">
        <img src="<?= $post->photo ? 'uploads/'.$post->photo: '' ?>"
             class="card-img-top img-big" alt="Фото" >
        <div class="card-body">
            <h5 class="card-title"><?= $post->title ?></h5>
            <p class="card-text">
                <?= date_format(new DateTime($post->datePublication),
                    'd.m.Y') ?></p>
            <a class="btn btn-info p-2" style="width: 100%;"
               href="../../showPost.php?id=<?= $post -> id; ?>">
                Подробно </a>

        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php require_once __DIR__ . "/../parts/footer.php" ?>


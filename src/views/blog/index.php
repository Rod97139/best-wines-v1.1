
<h1 class="text-center m-3">Nos Articles</h1>
<?php if (isset($_SESSION['user']['is_employee']) && $_SESSION['user']['is_employee']) : ?>
    <a href="<?= BASE_DIR ?>/blog/insert" class="btn btn-warning text-center">Ajouter un article</a>
<?php endif ?>
<?php foreach ($articles as $article) : ?>
    <div class="container-fluid p-5">
        <div class="row content">
            <div class="col-lg-3 centerCard">
                <img src="<?= BASE_DIR ?>/uploads/blog/<?= $article['photo_article']; ?>" class="rounded card-bw">
            </div>
            <div class="col-lg-9 ">
                <h2><?= $article['title'] ?></h2>
                <div class="h4"><?= substr($article['content'], 0, 300) ?>...</div>
                <a href="<?= BASE_DIR ?>/blog/details?id=<?= $article['id'] ?>">Voir plus</a>
                <?php if (isset($_SESSION['user']['is_employee']) && $_SESSION['user']['is_employee']) : ?>
                    <a href="<?= BASE_DIR ?>/blog/edit?id=<?= $article['id'] ?>" class="btn btn-warning">Modifier</a>
                <?php endif ?>
            </div>
        </div>
    </div>
<?php endforeach ?>
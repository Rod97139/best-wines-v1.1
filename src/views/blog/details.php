<div class="col-md-6">
    <div class="col-md-12">
        <h1><?= $article_blog['title'] ?></h1>
    </div>
    <div>
        <div><?= $article_blog['content'] ?></div>
    </div>
    <div class="col-md-4">
        <img src="<?= BASE_DIR ?>/uploads/blog/<?= $article_blog['photo_article']; ?>" alt="" class="img-fluid rounded-start">
    </div>
    <small>Ajouté le <?= $article_blog['date'] ?></small>
</div>
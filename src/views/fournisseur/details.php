<div class="col-md-6">
    <div class="col-md-12">
        <h1><?= $article_blog['name'] ?></h1>
    </div>
    <div>
        <div><?= $article_blog['content'] ?></div>
    </div>
    <div class="col-md-4">
        <img src="<?= BASE_DIR ?>/uploads/supplier/<?= $article_blog['image_supp']; ?>" alt="" class="img-fluid rounded-start">
    </div>
</div>
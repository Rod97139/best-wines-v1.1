<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>
<?php endif; ?>

<h1 class="text-center m-3">Nos Fournisseurs</h1>
<?php if (isset($_SESSION['user']['is_employee']) && ($_SESSION['user']['is_employee'])) : ?>
<div class="text-center">
<a href="<?= BASE_DIR ?>/nos-fournisseurs/insert" class="btn btn-warning">Ajouter un fournisseur</a>
</div>
<?php endif; ?>
<?php foreach ($suppliers as $supplier) : ?>
    <div class="container-fluid p-5">
        <div class="row content">
            <div class="col-lg-3 centerCard ">
                <img src="<?= BASE_DIR ?>/uploads/blog/<?= $supplier['image_supp']; ?>" alt="" class="rounded card-bw">
            </div>
            <div class="col-lg-9 ">
                <h2><?= $supplier['name'] ?></h2>
                <div class="h4"><?= substr($supplier['content'], 0, 300) ?>...</div>
                <a href="<?= BASE_DIR ?>/blog/details?id=<?= $supplier['id'] ?>">Voir plus</a>
                <?php if (isset($_SESSION['user']['is_employee']) && ($_SESSION['user']['is_employee'])) : ?>
                <a href="<?= BASE_DIR ?>/nos-fournisseurs/edit?id=<?= $supplier['id'] ?>" class="btn btn-warning">Modifier</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endforeach ?><div>

<?php

namespace Phppot;

use Phppot\SearchModel;

require_once __DIR__ . "/../../../models/SearchModel.php";
require_once __DIR__ . "/../../../../core/SearchConfig.php";

/* Pagination Code starts */
$per_page_html = '';
$page = 1;
$start = 0;
if (!empty($_POST["page"])) {
    $page = $_POST["page"];
    $start = ($page - 1) * Config::LIMIT_PER_PAGE;
}

$searchModel = new SearchModel();
$row_count = $searchModel->getCount();
$limit = " limit " . $start . "," . Config::LIMIT_PER_PAGE;
if (!empty($row_count)) {
    $per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
    $page_count = ceil($row_count / Config::LIMIT_PER_PAGE);
    if ($page_count > 1) {
        for ($i = 1; $i <= $page_count; $i++) {
            if ($i == $page) {
                $per_page_html .= '<input type="button"  name="page" onclick="getResult(' . $i . ')" value="' . $i . '" class="btn-page current" />';
            } else {
                $per_page_html .= '<input type="button"  name="page" onclick="getResult(' . $i . ')" value="' . $i . '" class="btn-page" />';
            }
        }
    }
    $per_page_html .= "</div>";
}
$result = $searchModel->getAllPosts($start, Config::LIMIT_PER_PAGE);
?><div class="text-center m-3">
<a class='btn btn-success' href=" <?= BASE_DIR ?>/employe/stock/insert">Ajouter un produit</a>
</div>
<form class="d-flex" role="search" name='frmSearch' action='' method='post' onSubmit="submitSearch(event)">
    <input class="form-control me-2" type='text' name='search' id='keyword' placeholder="Rechercher un produit..." aria-label="Search">
    <div class="result"></div>
</form>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Référence</th>
            <th scope="col">Nom</th>
            <th scope="col">Stock</th>
            <th></th>
        </tr>
    </thead>
    <tbody id='table-body'>
        <?php
        foreach ($result as $row) {
        ?>
            <tr class='table-row'>
                <td><?= $row['id']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['stock']; ?></td>
                <td>
                    <a href="<?= BASE_DIR ?>/employe/stock/edit?id=<?= $row['id'] ?>" class="btn btn-warning">Modifier</a>
                </td>
                <td>
                    <a href="<?= BASE_DIR ?>/employe/stock/delete?id=<?= $row['id'] ?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        <?php
        }

        ?>
    </tbody>
</table>
<?php echo $per_page_html; ?>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
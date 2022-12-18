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
$row_count = $searchModel->getCountInvoice();
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
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No facture</th>
            <th scope="col">Date</th>
            <th scope="col">Etat</th>
            <th scope="col">Remboursement</th>
            <th scope="col">Détail</th>
        </tr>
    </thead>
    <tbody id='table-body'>
        <?php
        foreach ($invoices as $row): ?>

            <tr class='table-row'>
                <td><?= $row['id_invoice']; ?></td>
                <td><?= $row['date']; ?></td>
                <td><a href="" class="btn btn-success">Terminé</a></button></td>
                <td><a href="<?= BASE_DIR ?>/employe/commandes/delete?id=<?= $row['id_invoice'] ?>" class="btn btn-danger">"Rembourser"</a></td>
                <td><a href="<?= BASE_DIR ?>/employe/commandes/details?id=<?= $row['orderId_Invoice'] ?>" class="btn btn-warning">Détails</a></td>
            </tr>
        <?php ; endforeach?>
    </tbody>
</table>
<?php echo $per_page_html; ?>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
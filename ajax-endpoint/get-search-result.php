<?php
namespace Phppot;

use Phppot\SearchModel;
require_once __DIR__ . "/../src/models/SearchModel.php";
require_once __DIR__ . '/../core/SearchConfig.php';

$search_keyword = '';

if (! empty($_POST['search'])) {
    $search_keyword = $_POST['search'];
}

/* Pagination Code starts */
$page = 1;
$start = 0;
if (! empty($_POST["page"])) {
    $page = $_POST["page"];
    $start = ($page - 1) * Config::LIMIT_PER_PAGE;
}

$searchModel = new SearchModel();

$result = $searchModel->getAllPosts($start, Config::LIMIT_PER_PAGE, $search_keyword);

function highlightKeywords($text, $keyword)
{
    $wordsAry = explode(" ", $keyword);
    $wordsCount = count($wordsAry);

    for ($i = 0; $i < $wordsCount; $i ++) {
        $highlighted_text = "<span style='font-weight:bold;'>$wordsAry[$i]</span>";
        $text = str_ireplace($wordsAry[$i], $highlighted_text, $text);
    }

    return $text;
}
if (! empty($_POST["page"])) {
    if (! empty($result)) {
        foreach ($result as $row) {
            if (Config::ENABLE_HIGHLIGHT == true) {
                $post_title = highlightKeywords($row["id"], $_POST["search"]);
                $new_description = highlightKeywords($row["name"], $_POST["search"]);
                $post_at = highlightKeywords($row["stock"], $_POST["search"]);
            } else {
                print $post_title = $row['id'];
                $new_description = $row['name'];
                $post_at = $row['stock'];
            }
            echo "<tr class='table-row'>
            <td>".$post_title."</td>
            <td>".$new_description."</td>
            <td>".$post_at."</td>
            <td><a href='/best-wines/employe/stock/edit?id=". $row['id']."'class='btn btn-warning'>Modifier</a></td>
            <td><a href='/best-wines/employe/stock/delete?id=". $row['id']."'class='btn btn-danger'>Supprimer</a></td>
            </tr>";
   
                  

        }}
    } ?>
    

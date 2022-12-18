<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Product;
use App\Models\Article;

//Gestion de la page d'accueil
class HomeController extends Controller
{
    //Affichage des derniers...
    public function showLast()
    {

        $product = new Product();
        $lastarticles = new Article;
        //...articles du blog enregistrés dans la BDD
        $articles = $lastarticles->findLast();
        //...vins blancs enregistrés dans la BDD
        $lastWhiteWine = $product->findLastBy(['id_type' => 1]);
        //...vins rouges enregistrés dans la BDD
        $lastRedWine = $product->findLastBy(['id_type' => 2]);
        //...champagnes enregistrés dans la BDD
        $lastChampagne = $product->findLastBy(['id_type' => 3]);
        //...coffrets enregistrés dans la BDD
        $lastBox = $product->findLastBy(['id_type' => 4]);
        //...vins blancs mis en avant
        $featuredWhiteWine = $product->findFeaturedBy(['id_type' => 1,]);
        //...vins rouges mis en avant
        $featuredRedWine = $product->findFeaturedBy(['id_type' => 2]);
        //...champagnes mis en avant
        $featuredChampagne = $product->findFeaturedBy(['id_type' => 3]);
        //...coffrets mis en avant       
        $featuredBox = $product->findFeaturedBy(['id_type' => 4]);
        $this->renderView('home/index', compact('articles', 'lastWhiteWine', 'featuredWhiteWine', 'featuredRedWine', 'featuredChampagne', 'featuredBox', 'lastRedWine', 'lastChampagne', 'lastBox'));
        
        //Fonction de recherche
        if (isset($_REQUEST["term"])) {
            // Prepare a select statement
            $sql = "SELECT * FROM product WHERE name LIKE ?";
            if ($stmt = $this->pdo->prepare($sql)) {
                // Bind variables to the prepared statement as parameters
                // Set parameters
                $param_term = $_REQUEST["term"] . '%';
                $stmt->bindParam($stmt, "s", $param_term);
                // Attempt to execute the prepared statement
                if ($stmt->execute) {
                    $result = $stmt;
                    // Check number of rows in the result set
                    if ($stmt->rowCount() > 0) {
                        while ($row = $stmt->fetchAll()) {
                            echo "<p>" . $row["name"] . "</p>";
                        }
                    } else {
                        echo "<p>No matches found</p>";
                    }
                }
            }
        }
    }
}

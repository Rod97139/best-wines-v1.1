<?php

namespace App\Controllers;

use Core\Controller;

use App\Models\Region;
use App\Models\Product;
use App\Models\Cepage;
use App\Models\Taste;
use App\Models\Association;
use App\Models\TypeProduct;
use Core\Partials\CheckLog;

//Gestion du stock par les employés
class StockController extends Controller
{
//Affichage de tous les produits
    public function showAll()
    {
        CheckLog::checkIsEmployee();
        $product = new Product();
        $products = $product->findAll();
        $this->renderView('employe/stock/index', compact('products'));
    }


    /**
     * Insérer un nouveau produit
     *
     * @return void
     */

    public function insert()
    {
        CheckLog::checkIsEmployee();
        $region = new Region();
        $regions = $region->findAll();
        $cepage = new Cepage();
        $cepages = $cepage->findAll();
        $taste = new Taste();
        $tastes = $taste->findAll();
        $association = new Association();
        $associations = $association->findAll();
        $type_product = new TypeProduct();
        $type_products = $type_product->findAll();
        $this->renderView('employe/stock/insert', compact('regions', 'cepages', 'tastes', 'associations', 'type_products'));
        if (isset($_POST['submit'])) {
            $product = new Product();
            $product->setName(htmlentities($_POST['name']));
            $product->setDescription(htmlentities($_POST['description']));
            $product->setStock(htmlentities($_POST['stock']));
            $product->setAlcohol_percentage(htmlentities($_POST['alcohol_percentage']));
            $product->setId_region($_POST['id_region']);
            $product->setId_cepage($_POST['id_cepage']);
            $product->setId_taste($_POST['id_taste']);
            $product->setId_association($_POST['id_association']);
            $product->setId_type($_POST['id_type']);
            $product->setPrice($_POST['price']);
            $product->setPhoto($_FILES['image']['name']);
            $product->setIsFeatured($_POST['is_featured']);
            if (count($_FILES) > 0) {
                $allowed[] = "image/jpeg";
                $allowed[] = "image/png";
                $allowed[] = "image/jpg";
                if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {
                    $folder = "uploads/vins/";
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }
                    $destination = $folder . $_FILES['image']['name'];
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                    $_POST['image'] = $destination;
                }
            }
            $result = $product->insert();
            if ($result) {
                $message =  "Insertion bien effectuée";
            } else {
                $message =  "échec de l'insertion";
            }
            $this->renderView('employe/stock/insert', [
                'message' => $message
            ]);
        }
        $this->renderView('employe/stock/insert', compact('message', 'regions', 'cepages', 'tastes', 'associations', 'type_products'));
    }

//Modification d'un produit
    public function edit()
    {
        CheckLog::checkIsEmployee();
        $id = $_GET['id'];
        $to_edit = new Product;
        $edit_temp = $to_edit->findOneForEdit(['id' => $id]);
        $region = new Region();
        $regions = $region->findAll();
        $cepage = new Cepage();
        $cepages = $cepage->findAll();
        $taste = new Taste();
        $tastes = $taste->findAll();
        $association = new Association();
        $associations = $association->findAll();
        $type_product = new TypeProduct();
        $type_products = $type_product->findAll();
        if (isset($_POST['submit'])) {
            $to_edit->edit($id);
            $result = $to_edit->edit($id);
            if (count($_FILES) > 0) {
                $allowed[] = "image/jpeg";
                $allowed[] = "image/png";
                $allowed[] = "image/jpg";
                if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {
                    $folder = "uploads/vins/";
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }
                    $destination = $folder . $_FILES['image']['name'];
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                    $_POST['image'] = $destination;
                }
            }
            if ($result) {
                $message =  "Modification bien effectuée";
            } else {
                $message =  "échec de l'édit";
            };
            $to_edit->findOneForEdit(['id' => $id]);
            $edit_temp = $to_edit->findOneForEdit(['id' => $id]);
            $this->renderView(
                'employe/stock/edit',
                compact('message', 'id', 'edit_temp', 'regions', 'cepages', 'tastes', 'associations', 'type_products')
            );
        }
        $this->renderView('employe/stock/edit', compact('id', 'edit_temp', 'regions', 'cepages', 'tastes', 'associations', 'type_products'));
    }

//Suppression d'un produit
    public function delete()
    {
        CheckLog::checkIsEmployee();
        $id = $_GET['id'];
        $to_delete = new Product;
        $to_delete->delete($id);
        header('Location: /best-wines/employe/stock');
    }

//Affichage de la page espace employé
    public function index()
    {
        CheckLog::checkIsEmployee();
        $this->renderView('employe/index');
    }
}

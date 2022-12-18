<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Supplier;
use Core\Partials\CheckLog;

//Gestion des fournisseurs
class SupplierController extends Controller

{
    //Affichage de tous les fournisseurs
    public function showFournisseur()
    {
        $supplier = new Supplier;
        $suppliers =  $supplier->findAll();
        $this->renderView('fournisseur/index', compact('suppliers'));
    }

    //Affichage détail d'un fournisseur
    public function showOne()
    {
        $id = $_GET['id'];
        $article = new Supplier;
        $article_blog = $article->find($id);
        $this->renderView('fournisseur/details', compact('article_blog', 'id'));
    }

    //Insertion d'un fournisseur par un employé
    public function insertSupplier()
    {
        CheckLog::checkIsEmployee();
        if (isset($_POST['submit'])) {
            $supplier = new Supplier;
            $supplier->setName(htmlentities($_POST['name']));
            $supplier->setContent(($_POST['content']));
            $supplier->setImage_supp($_FILES['image']['name']);
            if (count($_FILES) > 0) {
                $allowed[] = "image/jpeg";
                $allowed[] = "image/png";
                if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {
                    $folder = "uploads/supplier/";
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }
                    $destination = $folder . $_FILES['image']['name'];
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                    $_POST['image'] = $destination;
                }
            }
            $result = $supplier->insertSupp();
            if ($result) {
                $message =  "Insertion bien effectuée";
            } else {
                $message =  "échec";
            };
            $this->renderView('fournisseur/insert', compact('message'));
        }
        $this->renderView('fournisseur/insert');
    }

    //Modification d'un fournisseur par un employé
    public function EditSupplier()
    {
        CheckLog::checkIsEmployee();
        $id = $_GET['id'];
        $supplier_to_edit = new Supplier;
        $edit_temp = $supplier_to_edit->findOneForEdit(['id' => $id]);
        if (isset($_POST['submit'])) {
            $supplier_to_edit->editSupplier($id);
            $result = $supplier_to_edit->editSupplier($id);
            if (count($_FILES) > 0) {
                $allowed[] = "image/jpeg";
                $allowed[] = "image/png";
                if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {
                    $folder = "uploads/blog/";
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
            $supplier_to_edit->findOneForEdit(['id' => $id]);
            $edit_temp = $supplier_to_edit->findOneForEdit(['id' => $id]);
            $this->renderView(
                'fournisseur/edit',
                compact('message', 'id', 'edit_temp')
            );
            $this->renderView('fournisseur/edit');
        }
        $this->renderView('fournisseur/edit', compact('id', 'edit_temp'));
    }
}

<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\User;
use Core\Partials\CheckLog;

//Gestion depuis un compte administrateur
class AdminController extends Controller
{

    //insertion d'un employé
    public function insertEmployee()
    {
        CheckLog::checkIsAdmin();
        $message = "";
        if (isset($_POST['submit'])) {
            $user = new User();
            $user->setEmail(htmlentities($_POST['email']));
            $user->setPassword(htmlentities($_POST['password']));
            $user->setIs_employee(1);
            $result = $user->insertEmployee();
            if ($result) {
                $message =  "L'insertion a été prise en compte";
            } else {
                $message =  "échec de l'insertion";
            }
        }
        $this->renderView('administrateur/insert', [
            'message' => $message
        ]);
    }


    //Affichage de tous les employés et administrateurs
    public function showAll()
    {
        CheckLog::checkIsAdmin();
        $user = new User();
        $all_users = $user->findAll();
        $this->renderView('administrateur/index', compact('all_users'));
    }

    //Suppression d'un employé ou administrateur
    public function delete()
    {
        CheckLog::checkIsAdmin();
        $id = $_GET['id'];
        $to_delete = new User;
        $to_delete->delete($id);
        header('Location: /best-wines/administrateur');
    }

    //Modifiaction du statut de l'employé ou administrateur
    public function edit()
    {
        CheckLog::checkIsAdmin();
        $id = $_GET['id'];
        $employe_edit = new User;
        $edit_temp = $employe_edit->findOneForEdit(['id' => $id]);
        if (isset($_POST['submit'])) {
            $employe_edit->editEmploye($id);
            $result = $employe_edit->editEmploye($id);
            if ($result) {
                $message =  "Le statut de l'employé a bien été modifié";
            } else {
                $message =  "échec de la modification";
            };
            $employe_edit->findOneForEdit(['id' => $id]);
            $edit_temp = $employe_edit->findOneForEdit(['id' => $id]);
            $this->renderView('administrateur/edit', compact('id', 'edit_temp', 'message'));
        }
        $this->renderView('administrateur/edit', compact('id', 'edit_temp'));
    }
}

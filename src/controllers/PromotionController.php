<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Promotion;
use Core\Partials\CheckLog;

//Gestion des promotions

class PromotionController extends Controller
{
    //Fonction affichage de toutes les promotions
    public function showAll()
    {
        CheckLog::checkIsEmployee();
        $promotion = new Promotion();
        $all_promotions = $promotion->findAll();
        $this->renderView('employe/promotion/index', compact('all_promotions'));
    }

    //Fonction d'insertion d'un code de promotion
    public function insert()
    {
        CheckLog::checkIsEmployee();
        $message="";
        if (isset($_POST['submit'])) {
            $promotion = new Promotion();
            $promotion->setPromotionName(htmlentities($_POST['promotion_name']));
            $promotion->setStartDate($_POST['start_date']);
            $promotion->setEndDate($_POST['end_date']);
            $promotion->setPercentage($_POST['percentage']);
            $result = $promotion->insert();
            if ($result) {
                $message =  "Le code a bien été enregistré";
            } else {
                $message =  "échec de l'insertion";
            }
        }
        $this->renderView('employe/promotion/insert', [
            'message' => $message
        ]);
    }

    // Fonction de modification d'un code promo
    public function edit()
    {
        CheckLog::checkIsEmployee();
        $id = $_GET['id'];
        $promotion_edit = new Promotion;
        $edit_temp = $promotion_edit->findOneForEdit(['id' => $id]);
        if (isset($_POST['submit'])) {
            $promotion_edit->edit($id);
            $result = $promotion_edit->edit($id);
            if ($result) {
                $message =  "Le code de promotion a bien été modifié";
            } else {
                $message =  "échec de l'enregistrement";
            };
            $promotion_edit->findOneForEdit(['id' => $id]);
            $edit_temp = $promotion_edit->findOneForEdit(['id' => $id]);
            $this->renderView('employe/promotion/edit', compact('id', 'edit_temp', 'message'));
        }
        $this->renderView('employe/promotion/edit', compact('id', 'edit_temp'));
    }
}

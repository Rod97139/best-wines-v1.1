<?php

namespace App\Controllers;

use App\Models\Invoice;
use Core\Controller;
use Core\Partials\CheckLog;

//En cours de réalisation
//Gestion des statuts de commandes

class OrderTrackingController extends Controller
{
    
    public function showAll()
    {

        CheckLog::checkIsEmployee();
        $invoice = new Invoice();
        $invoices = $invoice->findAll();
  
        $this->renderView('employe/commandes/index', compact('invoices'));
    }


    public function showOne()
    {   
        CheckLog::checkIsEmployee();
        $id = $_GET['id'];
        $invoice = new Invoice();
        $invoices = $invoice->findOneInvoiceBy($id);        
        $this->renderView('employe/commandes/details', compact('invoices'));
    }
    public function delete()
    {
        CheckLog::checkIsEmployee();
        $id = $_GET['id'];
        $to_delete = new Invoice;
        $to_delete->deleteInvoice($id);
        
        header('Location: /best-wines/employe/commandes');
    }
}

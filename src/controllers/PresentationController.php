<?php

namespace App\Controllers;

use Core\Controller;

//Affichage des pages du menu "qui sommes nous"
class PresentationController extends Controller
{
    public function showContact()
    {
        $this->renderView('presentation/contact');
    }
    public function showFaq()
    {
        $this->renderView('presentation/faq');
    }
    public function showMention()
    {
        $this->renderView('presentation/mentionLegal');
    }
    public function showPresse()
    {
        $this->renderView('presentation/presse');
    }
    public function showAboutUS()
    {
        $this->renderView('presentation/aboutUS');
    }
}

<?php

namespace Controller;

use App\Session;
use App\AbstractController;
use App\ControllerInterface;
use Model\Managers\AuteurManager;
use Model\Managers\LivreManager;

class Bibliotheque extends AbstractController implements ControllerInterface{

    public function index(){

    }

     //!----------------------------- AUTEUR ----------------------------------------------

    public function listAuteurs($id){
        $AuteurManager = new AuteurManager();

        return [
            "view" => VIEW_DIR. "bibliotheque/listAuteurs.php",
            "data" => [
                "livres" => $AuteurManager->findAuteur($id)
            ]
        ];
    }
 
     //!----------------------------- LIVRE ----------------------------------------------

     public function listLivres($id){
        $livreManager = new livreManager();

        return [
            "view" => VIEW_DIR. "bibliotheque/listLivres.php",
            "data" => [
                "livres" => $livreManager->findLivre($id)
            ]
        ];
    }

     //!----------------------------- GENRE ----------------------------------------------
    }

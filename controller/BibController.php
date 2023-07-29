<?php

namespace Controller;

use App\Session;
use App\AbstractController;
use App\ControllerInterface;
use Model\Managers\AuteurManager;
use Model\Managers\LivreManager;

class BibController extends AbstractController implements ControllerInterface{

    public function index(){

    }

     //!----------------------------- AUTEUR ----------------------------------------------

    public function listAuteurs(){
        //var_dump('test');die;
        $AuteurManager = new AuteurManager();

        return 
        [
            "view" => VIEW_DIR. "bib/listAuteurs.php",
            "data" => [
                "auteurs" => $AuteurManager->findAll(['nom',"ASC"])
            ]
        ];
    }
 
     //!----------------------------- LIVRE ----------------------------------------------

     public function listLivres($id){
        $livreManager = new LivreManager();

        return [
            "view" => VIEW_DIR. "bib/listLivres.php",
            "data" => [
                "livres" => $livreManager->findLivre($id)
            ]
        ];
    }

    public function listLivreByAuteur($id){
        $livreManager = new livreManager();
        
        
        // var_dump();die;
            return [
                "view" => VIEW_DIR."bib/listLivres.php",
            "data" => [
                
                "livres" => $livreManager->findLivreByAuteur($id),
                ]];
    }

     //!----------------------------- GENRE ----------------------------------------------
    }

<?php

namespace Controller;

use App\Session;
use App\AbstractController;
use App\ControllerInterface;
use Model\Managers\AuteurManager;
use Model\Managers\LivreManager;
use Model\Managers\GenreManager;

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
    
    public function detailAuteur($id){
        $auteurManager = new AuteurManager();

        return[
            "view" => VIEW_DIR."bib/detailAuteur.php",
            "data" => [
                "auteurs" => $auteurManager->findAuteurByLivre($id)
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
                "view" => VIEW_DIR."bib/listLivreByAuteur.php",
            "data" => [
                
                "livres" => $livreManager->findLivreByAuteur($id),
                ]];
    }

     //!----------------------------- GENRE ----------------------------------------------
    
     public function listGenres($id){
        $genreManager = new GenreManager();

        return [
            "view" => VIEW_DIR. "bib/listgenres.php",
            "data" => [
                "genres" => $genreManager->findgenre($id)
            ]
        ];
    }
    }

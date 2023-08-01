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
    
    public function addAuteur($id){ 
        $auteurManager = new AuteurManager();
        
            
            
           
            
            if(isset($_POST['submit'])){
                //var_dump($_POST['submit']);die;
                
                if(isset($_POST['nom']) && ($_POST['prenom']) && ($_POST['dateNaissance']) && ($_POST['sexe']) && 
                (!empty($_POST['nom'])) && ($_POST['prenom']) && ($_POST['dateNaissance']) && ($_POST['sexe'])){   //? verifie si title existe et si il est vide
                    $nom = filter_input(INPUT_POST,'nom',FILTER_SANITIZE_FULL_SPECIAL_CHARS);                   //? protege de  faille xss
                    $prenom = filter_input(INPUT_POST,'prenom',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $dateNaissance = filter_input(INPUT_POST,'dateNaissance',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $sexe = filter_input(INPUT_POST,'sexe',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    
                    //var_dump("test4");die;
                    
                    
                    $auteurManager->add( $data=[
                        "nom"=>$nom,
                        "prenom"=>$prenom,
                        "dateNaissance"=>$dateNaissance,
                        "sexe"=>$sexe,
                    ]);
                
                
                
                }
                $this->redirectTo("bib",'listAuteurs',$id);   
            }
        
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
    public function listLivreByGenre($id){
        $livreManager = new livreManager();
        
        
         //var_dump('ok');die;
            return [
                "view" => VIEW_DIR."bib/listLivreByGenre.php",
            "data" => [
                
                "livres" => $livreManager->findLivreByGenre($id),
                ]];
    }

    public function addLivre($id){ 
        $livreManager = new LivreManager();
  
        
            
            
           
            
            if(isset($_POST['submit'])){
                //var_dump($_POST['submit']);die;
                
                if(isset($_POST['titre']) && ($_POST['resume']) && ($_POST['dateParution']) && 
                (!empty($_POST['titre'])) && ($_POST['resume']) && ($_POST['dateParution'])){   //? verifie si title existe et si il est vide
                    $titre = filter_input(INPUT_POST,'titre',FILTER_SANITIZE_FULL_SPECIAL_CHARS);                   //? protege de  faille xss
                    $resume = filter_input(INPUT_POST,'resume',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $dateparution = filter_input(INPUT_POST,'dateParution',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                   
                    
                    //var_dump("test4");die;
                   
                    
                    $livreManager->add( $data=[
                        "titre"=>$titre,
                        "resume"=>$resume,
                        "dateparution"=>$dateparution,
                        
                    ]);
                
                
                
                }
                $this->redirectTo("bib",'listLivres',$id);   
            }
        
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

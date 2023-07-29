<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;
    Use Model\Managers\LivreManager;

    class AuteurManager extends Manager{

        protected $className = "Model\Entities\Auteur";
        protected $tableName = "Auteur";

        public function __construct(){
            parent::connect();
        }

        public function findAuteurByLivre($id){ //fonction permettant de recup dans la bdd les topics d'une categorie


            //requet sql
       $sql = "SELECT *                
               FROM ".$this->tableName." a
               INNER JOIN livre l ON a.id_auteur = l.auteur_id
               WHERE id_livre = :id"; 
               
       return $this->getMultipleResults(
           DAO::select($sql, ['id' =>$id]),
           $this->className
       );
   }
    }
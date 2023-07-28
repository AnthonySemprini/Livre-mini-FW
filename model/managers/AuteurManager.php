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

        public function findAuteur($id){ //fonction permettant de recup dans la bdd les topics d'une categorie


            //requet sql
       $sql = "SELECT *                
               FROM ".$this->tableName."a";
        
               
       return $this->getMultipleResults(
           DAO::select($sql, ['id' =>$id]),
           $this->className
       );
   }
    }
<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;
    Use Model\Managers\AuteurManager;

    class LivreManager extends Manager{

        protected $className = "Model\Entities\Livre";
        protected $tableName = "Livre";

        public function __construct(){
            parent::connect();
        }

        public function findLivre($id){ //fonction permettant de recup dans la bdd les topics d'une categorie


            //requet sql
       $sql = "SELECT *                
               FROM ".$this->tableName."l";
        
               
       return $this->getMultipleResults(
           DAO::select($sql, ['id' =>$id]),
           $this->className
       );
   }
    }
<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;
    Use Model\Managers\GenreManager;
    Use Model\Managers\AuteurManager;

    class LivreManager extends Manager{

        protected $className = "Model\Entities\Livre";
        protected $tableName = "Livre";

        public function __construct(){
            parent::connect();
        }

        public function findLivre($id){

            $sql = "SELECT *
                FROM ".$this->tableName." l";
               
                
            return   $this->getMultipleResults(
                DAO::select($sql),
                $this->className
            ); 
        }

        public function findLivreByAuteur($id){ 


            //requet sql
       $sql = "SELECT *                
               FROM ".$this->tableName." l
               WHERE auteur_id = :id"; 
               
       return $this->getMultipleResults(
           DAO::select($sql, ['id' =>$id]),
           $this->className
       );
   }
        public function findLivreByGenre($id){ 


            //requet sql
       $sql = "SELECT *                
               FROM ".$this->tableName." l
               WHERE genre_id = :id"; 
               
       return $this->getMultipleResults(
           DAO::select($sql, ['id' =>$id]),
           $this->className
       );
   }
    }
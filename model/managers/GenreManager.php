<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;
    Use Model\Managers\AuteurManager;

    class GenreManager extends Manager{

        protected $className = "Model\Entities\Genre";
        protected $tableName = "Genre";

        public function __construct(){
            parent::connect();
        }

        public function findGenre($id){

            $sql = "SELECT *
                FROM ".$this->tableName." g";
            return   $this->getMultipleResults(
                DAO::select($sql),
                $this->className
            ); 
        }
    }
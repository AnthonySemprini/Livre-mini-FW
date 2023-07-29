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


    }
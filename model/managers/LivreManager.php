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
    }
<?php
namespace Model\Entities;

use App\Entity;

final class Genre extends Entity{

    private $id;
    private $nom;

    public function __construct($data){         
        $this->hydrate($data);        
    }
//!------------------ ID ----------------------------------
     /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

//!------------------ nom ----------------------------------

         /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }
}
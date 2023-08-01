<?php
namespace Model\Entities;

use App\Entity;

final class Livre extends Entity{

    private $id;
    private $titre;
    private $resume;
    private $dateParution;
    private $auteur;

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

//!------------------ TITRE ----------------------------------

         /**
         * Get the value of titre
         */ 
        public function getTitre()
        {
                return $this->titre;
        }

        /**
         * Set the value of Titre
         *
         * @return  self
         */ 
        public function setTitre($titre)
        {
                $this->titre = $titre;

                return $this;
        }

//!------------------ RESUME ----------------------------------

         /**
         * Get the value of resume
         */ 
        public function getResume()
        {
                return $this->resume;
        }

        /**
         * Set the value of resume
         *
         * @return  self
         */ 
        public function setResume($resume)
        {
                $this->resume = $resume;

                return $this;
        }

//!------------------ DATEPARUTION ----------------------------------
         /**
         * Get the value of dateParution
         */ 
        public function getDateParution()
        {
                return $this->dateParution;
        }

        /**
         * Set the value of dateParution
         *
         * @return  self
         */ 
        public function setDateParution($dateParution)
        {
                $this->dateParution = $dateParution;

                return $this;
        }


        

//!------------------ AUTEUR ----------------------------------

        public function getAuteur()
        {
                return $this->auteur;
        }

        /**
         * Set the value of auteur
         *
         * @return  self
         */ 
        public function setAuteur($auteur)
        {
                $this->auteur = $auteur;

                return $this;
        }
}
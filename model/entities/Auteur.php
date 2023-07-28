<?php
namespace Model\Entities;

use App\Entity;

final class Auteur extends Entity{

    private $id;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $sexe;
    private $livre;

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

//!------------------ NOM ----------------------------------

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
    
//!------------------ PRENOM ----------------------------------

        /**
            * Get the value of prenom
            */ 
           public function getPrenom()
           {
                   return $this->prenom;
           }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

//!------------------ DATE NAISSANCE ----------------------------------

        /**
            * Get the value of dateNaissance
            */ 
           public function getDateNaissance()
           {
                   return $this->dateNaissance;
           }
        /**
         * Set the value of dateNaissance
         *
         * @return  self
         */ 
        public function setDateNaissance($dateNaissance)
        {
                $this->dateNaissance = $dateNaissance;

                return $this;
        }

//!------------------ SEXE ----------------------------------

     /**
         * Get the value of sexe
         */ 
        public function getSexe()
        {
                return $this->sexe;
        }

        /**
         * Set the value of sexe
         *
         * @return  self
         */ 
        public function setSexe($sexe)
        {
                $this->sexe = $sexe;

                return $this;
        }

//!------------------ LIVRE ----------------------------------

     /**
         * Get the value of livre
         */ 
        public function getLivre()
        {
                return $this->livre;
        }

        /**
         * Set the value of livre
         *
         * @return  self
         */ 
        public function setLivre($livre)
        {
                $this->livre = $livre;

                return $this;
        }
}
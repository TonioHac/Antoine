<?php
    class Personne {
        // Attributs
        private $_nom;
        private $_prenom;
        private $_mail;
        private $_situation;

        // Constructeur demandant 4 paramètres
        public function __construct($nom, $prenom, $mail, $situation) { 
            $this->setNom($nom); // Initialisation du nom.
            $this->setPrenom($prenom); // Initialisation du prenom.
            $this->setmail($mail); // Initialisation du mail.
            $this->setsituation($situation); // Initialisation de la situation.
        }

        // Mutateurs et Accesseurs
        public function setNom($nom) {
            // S'il ne s'agit pas d'une chaine de caractère.
            if (!is_string($nom))  {
                trigger_error('Nom: doit être une chaine de caractère', E_USER_WARNING);
                return;
            }

            $this->_nom = $nom;
        }
        
        public function getNom() {
            return $this->_nom;
        }

        public function setPrenom($prenom) {
            // S'il ne s'agit pas d'une chaine de caractère.
            if (!is_string($prenom))  {
            trigger_error('Prenom: doit être une chaine de caractère', E_USER_WARNING);
            return;
            }

            $this->_prenom = $prenom;
        }
        
        public function getPrenom() {
            return $this->_prenom;
        }
        
        public function setPrenom($mail) {
            // S'il ne s'agit pas d'une chaine de caractère.
            if (!is_string($mail))  {
            trigger_error('Mail: doit être une chaine de caractère', E_USER_WARNING);
            return;
            }

            $this->_mail = $mail;
        }
        
        public function getPrenom() {
            return $this->_mail;
        }
        
        public function setPrenom($situation) {
            // S'il ne s'agit pas d'une chaine de caractère.
            if (!is_string($situation))  {
            trigger_error('Situation: doit être une chaine de caractère', E_USER_WARNING);
            return;
            }

            $this->_situation = $situation;
        }
        
        public function setPrenom() {
            return $this->_situation;
        }
    }
?>

<?php
    class Personne {
        // Attributs
        private $_id;
        private $_nom;
        private $_prenom;
        private $_mail;
        private $_situation;

        // Constructeur demandant 4 paramètres
        public function __construct($id, $nom, $prenom, $mail, $situation) { 
            $this->setID($id); // Initialisation de l'ID.
            $this->setNom($nom); // Initialisation du nom.
            $this->setPrenom($prenom); // Initialisation du prenom.
            $this->setMail($mail); // Initialisation du mail.
            $this->setSituation($situation); // Initialisation de la situation.
        }

        // Mutateurs et Accesseurs
        public function setID($id) {
            // S'il ne s'agit pas d'une chaine de caractère.
            if (!is_int($id))  {
                trigger_error('Nom: doit être une chaine de caractère', E_USER_WARNING);
                return;
            }

            $this->_id = $id;
        }
        
        public function getID() {
            return $this->_id;
        }
        
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
        
        public function setMail($mail) {
            // S'il ne s'agit pas d'une chaine de caractère.
            if (!is_string($mail))  {
            trigger_error('Mail: doit être une chaine de caractère', E_USER_WARNING);
            return;
            }

            $this->_mail = $mail;
        }
        
        public function getMail() {
            return $this->_mail;
        }
        
        public function setSituation($situation) {
            // S'il ne s'agit pas d'une chaine de caractère.
            if (!is_string($situation))  {
            trigger_error('Situation: doit être une chaine de caractère', E_USER_WARNING);
            return;
            }

            $this->_situation = $situation;
        }
        
        public function getSituation() {
            return $this->_situation;
        }
    }
?>
